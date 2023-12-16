<!DOCTYPE html>
<html lang="en">

<head>
    <title>Show Posts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    @include('includes.postNav')
    <h1>Title :{{$post->Title}}</h1>
    <h5>Content :{{$post->Content}}</h5>
    <h5>Author :{{$post->Auther}}</h5>
    <h5>{{$post->Published ?"Published":"Not Published"}}</h5>
    <h5>created_at :{{$post->created_at}}</h5>
    <h5>updated_at :{{$post->updated_at}}</h5>




</body>

</html>