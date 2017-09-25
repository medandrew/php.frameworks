<?php

/* @var $this yii\web\View */

$this->title = 'Добро пожаловать';
?>
<main class="container">
    <h4>Новости</h4>

    <article>
        <div class="detail">
            <h3><?= $article->title; ?></h3>
            <div class="author">
                <?php
                foreach ($authors as $author) :
                    if (!empty($article->author_id) && $author->id === $article->author_id) {
                        echo $author->name;
                    }
                endforeach;
                ?>
            </div>
            <img src="/images/<?= $article->image; ?>" class="left" />
            <?= $article->text; ?>
        </div>
    </article>
</main>
