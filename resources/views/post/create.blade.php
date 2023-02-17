@extends('layouts.main')
@section('content')

<div>
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" >
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="content"></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <textarea name="image" type="text" class="form-control" id="image"></textarea>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control" id="category" name="category_id">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <select class="form-select" multiple aria-label="multiple select example" id="tags" name="tags[]">
            @foreach($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->title}}</option>
            @endforeach

        </select>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
