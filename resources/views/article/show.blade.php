<x-app-layout>
    @section('styles')
        @vite('resources/css/article_style.css')
    @endsection

    <div class="article-bg">
        <div class="article-page">
            <div class="article-hero">
                <a href="{{ route('article.index') }}" id="back">← Back</a>

                <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}">

                <div class="overlay-text">
                    <h1>{{ $article['title'] }}</h1>
                    <p>{{ $article['writer'] }}</p>
                    <p>{{ $article['time'] }}</p>
                </div>
            </div>

            <div class="article-content">
                {!! $article['content'] !!}
            </div>
        </div>
    </div>

</x-app-layout>