<article>
    <div>
        <h3>{{ $article[1] }}</h3>
        <div class="author">
            {{ $article[2] }}
        </div>
        <img src="/images/{{ $article[4] }}" class="left" />
        {!! $article[3] !!}
    </div>
</article>