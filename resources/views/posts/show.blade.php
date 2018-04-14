@extends('layouts.master')


@section('content')
<div class="container" >
<div class="card-header">
Post Info
</div>
<div class="card">
    <div class="container">
    <b style="display: inline">Title:-</b> {{ $post->title }}<br>
    <b style="display: inline">Description:-</b><br> {{ $post->description }}
    </div>
</div>
<br><br>

<div class="card-header">
Post Creator Info
</div>

<div class="card">
    <div class="container">
    <b style="display: inline">Name:-</b> {{ $post->user->name }}<br>
    <b style="display: inline">Email:-</b> {{ $post->user->email }}<br>
    <b style="display: inline">Created At:-</b> {{ $post->created_at->format('l jS \of F Y h:i:s A') }}
    </div>

</div>

</div>
@endsection