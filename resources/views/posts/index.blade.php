<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>



<div class="container">
<div class="row justify-content-center">
   <a href="{{route('dashboard')}}"> <h2 class="justify-content-center">Dashboard</h2></a>
<div class="col-md-12">
<h1>Manage Posts</h1>

<a href="{{ route('posts.create') }}" class="btn btn-success" style="float: right">Create Post</a>
<table class="table table-bordered">
<thead>
<th width="80px">Id</th>
<th>Title</th>
<th width="150px">Action</th>
</thead>
<tbody>
@foreach($posts as $post)
<tr>
<td>{{ $post->id }}</td>
<td>{{ $post->title }}</td>
<td>
<a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View Post</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</body>
</html>
