@extends('loyout')
@section('content')
    <p align="center">
        <a style="background-color: skyblue" href="{{route('tags.create')}}">Добавить Tag!</a>
    <br>

<br>
<table>
@foreach($tags as $tag)
    {{$tag->id}}
    {{$tag->name}} -
    {{$tag->slug}}
    <form method="POST" action="{{route('tags.destroy', $tag)}}">
        @method('DELETE')
        <input type="submit" value="X">
        @csrf
    </form>
        <br>
    
    @endforeach
    </table>
    @endsection;
</p>
