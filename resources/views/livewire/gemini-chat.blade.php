<div class="flex items-center justify-center min-h-screen">
    <div class="max-w-xl mx-auto p-4 relative">
        <div class="pb-4">
            <a href="{{ route('dashboard') }}" class="absolute -top-2 left-0 text-customWhite hover:text-customYellow flex items-center space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                <span>Kembali</span>
            </a>
        </div>
    
        <div class="bg-white shadow-md p-4 rounded-md h-96 overflow-y-auto mb-4 space-y-3">
            @foreach ($messages as $message)
            <div class="flex {{ $message['sender'] === 'user' ? 'justify-end' : 'justify-start' }}">
                <div class="max-w-[70%] px-4 py-2 rounded-lg
                            {{ $message['sender'] === 'user' ? 'bg-customBlue text-right' : 'bg-gray-400 text-left' }}">
                    {{ $message['text'] }}
                </div>
            </div>
            @endforeach
        </div>
    
        <form wire:submit.prevent="sendMessage" class="flex gap-2">
            <input type="text" wire:model.defer="userMessage" class="flex-1 border rounded-md p-2 text-gray-800" placeholder="Ketik pesan...">
            <x-primary-button>{{ __('Kirim') }}</x-primary-button>
        </form>
    </div>
</div>