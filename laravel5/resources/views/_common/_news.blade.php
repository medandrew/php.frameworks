<article>
    <div>
        <h3><a href="/news/{{ $article->id }}/show">{{ $article->title }}</a></h3>
        {{ strip_tags(mb_substr($article->text, 0, 260) . '...') }}
    </div>
</article>
