@extends('layouts.master')


@section('content')
<div class="container" >
<center>
 <a class="btn btn-success" href="posts/create">Create Post</a>
</center>
<br>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#Pagination Bonus</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">Created At</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
 
@foreach ($posts as $post)


<!-- <li>{{ $post->title }}  And The Creator is ({{$post->user->name}})</li> -->

 <tbody>
    <tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->title }}</td>
      <td>{{$post->user->name}}</td>
      <td>{{$post->created_at->todatestring()}}</td>
      <td>
      <a class="btn btn-info" href="posts/show/{{ $post->id }}">view</a>
      <a class="btn btn-primary" href="posts/create">edit</a>
      <a class="btn btn-danger" href="posts/create">delete</a>
      </td>

    </tr>
  </tbody>

@endforeach
</table>
</div>
@endsection