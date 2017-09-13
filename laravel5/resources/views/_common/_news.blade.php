<article>
    <div>
        <h3><a href="/news/{{ $article[0] }}/show">{{ $article[1] }}</a></h3>
        {{ strip_tags(mb_substr($article[3], 0, 260) . '...') }}
    </div>
</article>
