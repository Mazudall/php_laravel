@extends('layouts.main')
@section('content')
    <div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Likes</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td><a href="{{route('post.show',$post -> id)}}">{{$post -> title}}</td>
                    <td>{{$post -> content}}</td>
                    <td>{{$post -> Likes}}</td>
                </tr>
                @endforeach



    </div>

@endsection
