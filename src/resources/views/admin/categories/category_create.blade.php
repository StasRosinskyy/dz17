@extends('loyout')
@section('content')
<form method="POST" action="{{route('categories.store')}}">
    <p align="center">Добавить Категорию <br>
    <input type="text" name="name" />
    <br>
    <input type="text" name="slug" />
    <br>
    <input type="submit" name="crete" />
    @csrf
    </p>
</form>

@endsection;
