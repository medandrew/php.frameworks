@extends('main')

@section('content')
    <main class="container">
        <h4>Новости</h4>

        @foreach ($news as $article)

        @include('_common._news')

        @endforeach
    </main>
@stop