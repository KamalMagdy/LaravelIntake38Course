@extends('layouts.master')


@section('content')
<div class="container">
<form action="{{ route('posts.update', $post->id) }}" method="POST">
@csrf
<label for="formGroupExampleInput">Title</label>
<input type="text" class="form-control" id="formGroupExampleInput" name="title" value="{{ $post->title }}">

<br>
<label for="formGroupExampleInput" >Description</label>
<textarea name="description" class="form-control" id="formGroupExampleInput">{{ $post->description }}</textarea>

<br>
Post Creator
<select class="form-control" name="user_id">
@foreach ($users as $user)
    <option value="{{$user->id}}">{{$user->name}}</option>
@endforeach

</select>
<br>
<input type="submit" value="Update" class="btn btn-success">
</form>
</div>
@endsection
