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


    {{-- @extends('layouts.app')
@section('content') --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Post</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('posts.store')}}">
                            @csrf
                            <div class="form-group">
                                <label class="label">Post Title: </label>
                                <input type="text" name="title" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label class="label">Post Body: </label>
                                <textarea name="body" rows="10" cols="30" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @endsection --}}
</body>

</html>
