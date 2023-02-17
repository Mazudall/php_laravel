@extends('layouts.main')
@section('content')

<div>

    <div>{{$post->id}}. {{$post -> title}} </br> {{$post->content}}</div>
    <div>{{$post -> category_id}}</div>

    <div>
        <a href="{{route('post.index')}}">Back</a>
        <a href="{{route('post.edit',$post->id)}}">Edit</a>
        <form action="{{route('post.delete',$post->id)}}" method="post">
            @csrf
            @method('delete')

            <input type="submit" value="Delete">
        </form>

    </div>
</div>
@endsection
