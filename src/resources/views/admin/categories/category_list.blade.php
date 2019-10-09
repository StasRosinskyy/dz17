@extends('loyout')
@section('content')


<p align="center">
<a style="background-color: skyblue" href="{{route('categories.create')}}">Добавить Категорию!</a>
<br>

<table>
@foreach($categories as $category)
    {{$category->id}}
    {{$category->name}} -
    {{$category->slug}}
    <form method="POST" action="{{route('categories.destroy', $category)}}">
        @method('DELETE')
        <input type="submit" value="X">
        @csrf
    </form>
    <br>
@endforeach

</table>
</p>
    @endsection;
    

