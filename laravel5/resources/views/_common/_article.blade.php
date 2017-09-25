<article>
    <div class="detail">
        <h3>{{ $article->title }}</h3>
        <div class="author">
            @foreach($authors as $author)
                @if(null !== $article->author_id && $article->author_id === $author->id)
                    {{ $author->name }}
                @endif
            @endforeach
        </div>
        <img src="/images/{{ $article->image }}" class="left" />
        {!! $article->text !!}
    </div>
</article>