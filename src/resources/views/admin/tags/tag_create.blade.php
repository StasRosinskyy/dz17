@extends('loyout')
@section('content')

<form method="POST" action="{{route('tags.store')}}">
    <p align="center"> Добавить Tag! <br>
    <input type="text" name="name" />
    <br>
    <input type="text" name="slug" />
    <br>
    <input type="submit" name="crete" />
    @csrf
</form>   </p>
@endsection;

