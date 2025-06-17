<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class GeminiChat extends Component
{
    public $userMessage = '';
    public $messages = [
        ['sender' => 'bot', 'text' => 'Halo, aku Verdi! Bantuan hukum apa yang kamu butuhkan?'],
    ];


    public function sendMessage()
    {
        if (trim($this->userMessage) === '') return;

        $this->messages[] = ['sender' => 'user', 'text' => $this->userMessage];

        $apiKey = config('services.gemini.key');
        
        $prompt = "Balas semua pesan ini hanya dalam Bahasa Indonesia.\nUser: {$this->userMessage}";
        
        $response = Http::post("https://generativelanguage.googleapis.com/v1/models/gemini-1.5-flash:generateContent?key={$apiKey}", [
            'contents' => [
                // ['parts' => [['text' => $this->userMessage]]]
                ['parts' => [['text' => $prompt]]]
            ]
        ]);

        $data = $response->json();
        $rawReply = $data['candidates'][0]['content']['parts'][0]['text'] ?? 'Maaf, terjadi kesalahan.';
        $reply = preg_replace('/(\*\*|__|\*|_)/', '', $rawReply);


        $this->messages[] = ['sender' => 'bot', 'text' => $reply];
        $this->userMessage = '';
    }

    public function render()
    {
        return view('livewire.gemini-chat');
    }
}