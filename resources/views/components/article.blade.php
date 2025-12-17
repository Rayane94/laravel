@php
    use Illuminate\Support\Str;
@endphp

<article>
    <h3>{{ $title }}</h3>
    <p>{{ Str::limit($description, 30, '...') }}</p>
</article>
