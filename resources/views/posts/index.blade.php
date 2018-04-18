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
      <a class="btn btn-primary" href="posts/edit/{{ $post->id }}">edit</a>
      <form method="post" action="posts/delete/{{ $post->id }}">
      @csrf
      {{ method_field('DELETE') }}
      <button class="btn btn-danger" onclick="return confirm('You are sure you want to delete this post?')" >delete</button>
      </td>
</div>
    </tr>
  </tbody>

@endforeach
</table>
+    {{ $posts->links('paginator') }} 
</div>
@endsection