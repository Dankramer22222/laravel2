@extends('layout')
@section('title')Отзывы @endsection
@section('main content')//формы и метод передачи данных
<h1>Форма добавление отзыва</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post"action="/review/check">
    @csrf
    <input type="email" name="email" id ="email" placeholder="Введите сюда email" class="form-control"><br>
    <input type="text" name="subject" id ="subject" placeholder="Введите сюда отзыв" class="form-control"><br>
    <textarea name ="message" id ="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
    <button type="submit" class="btn btn-success">отправить</button>
</form>

    <h1>отзывы о спектаклях</h1>
    @foreach($reviews as $el)
    <div class="alert alert warning">
        <h3>{{$el->subject}}</h3>
        <p>{{$el->message}}</p>
    </div>
    @endforeach
@endsection



