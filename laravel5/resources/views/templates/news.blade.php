@extends('main')

@section('content')
    <main class="container">
        <h4>Новости</h4>

        <?php foreach ($news as $article) : ?>

        @include('_common._news')

        <?php endforeach; ?>
    </main>
@stop