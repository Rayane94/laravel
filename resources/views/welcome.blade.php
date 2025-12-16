@foreach ($articles as $article)
    @if ($loop->last)
        @break
    @endif

    <x-article
        :title="$article['title']"
        :description="$article['description']"
    />
@endforeach
