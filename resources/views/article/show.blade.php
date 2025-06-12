{{-- resources/views/articles/show.blade.php --}}

<x-app-layout>
    {{-- This section ensures the page loads the specific CSS for the article view --}}
    @section('styles')
        @vite('resources/css/article_style.css')
    @endsection

    {{-- This structure directly mimics the one from your article_script.js --}}
    <div class="article-bg">
        <div class="article-page">
            <div class="article-hero">
                {{-- This is now a proper link back to the main articles list --}}
                <a href="{{ route('article.index') }}" id="back">← Back</a>

                {{-- The hero image --}}
                <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}">

                {{-- The text overlayed on the hero image --}}
                <div class="overlay-text">
                    <h1>{{ $article['title'] }}</h1>
                    <p>{{ $article['writer'] }}</p>
                    <p>{{ $article['time'] }}</p>
                </div>
            </div>

            {{-- The main content of the article --}}
            <div class="article-content">
                {{-- We use {!! !!} to render the HTML tags (like <p>) from your JSON content correctly --}}
                {!! $article['content'] !!}
            </div>
        </div>
    </div>

</x-app-layout>