@extends('layout')
@section('content')
<div class="container">
    <div class="card">
      <div class="card-header" style="text-align:center">
        New Post
      </div>
    <div class="card-body">
    <form action="/posts" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea class="form-control" name="description" placeholder="Ender Desc" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/posts" class="btn btn-success"> Back</a>
    </form>
        
    </div>
    </div>
</div>
@endsection