@foreach ($articles as $article)
    @if ($loop->last)
        @break
    @endif

    <a href="{{ route('article.details', ['id' => $article->id]) }}">
        <x-article :title="$article->title" :description="$article->description" />
    </a>
@endforeach
