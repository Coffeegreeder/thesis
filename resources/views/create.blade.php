@extends('layouts.app')

<!-- Название страницы -->
@section('title')
Создание шаблона | Coffeegreeder
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="question">
        <h2></h2>
        <div class="content" id="app">
            <div class="title m-b-md">
                Laravel
            </div>
            <example-component></example-component>
        </div>
        <p> Вопрос: ... из 15</p>
    </div>
</div>
<script src="js/app.js"></script>
@endsection
