<?php

/* @var $this yii\web\View */

$this->title = 'Добро пожаловать';
?>
<main class="container">
    <h4>Новости</h4>

    <?php foreach ($news as $article) : ?>
        <article>
            <div>
                <h3><a href="/news/<?= $article->id; ?>/show"><?= $article->title; ?></a></h3>
                <?php echo strip_tags(mb_substr($article->text, 0, 260) . '...') ?>
            </div>
        </article>
    <?php endforeach; ?>
</main>
