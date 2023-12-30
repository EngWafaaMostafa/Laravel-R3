<!DOCTYPE html>
<html lang="en">

<head>
    <title>Show Car</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    @include('includes.nav')
    <h1>Title :{{$car->title}}</h1>
    <h1>Description :{{$car->description}}</h1>
    <h1>Category ID:{{$car->category_id}}</h1>
    <h1>Category Name:{{$car->category->cat_name}}</h1>
    <br>
    <h1>Image :{{$car->image}}</h1>
    <img src="{{asset('/assets/images/'.$car->image)}}" alt="" style="width:200px;">
    <h1>{{$car->published ?"Published":"Not Published"}}</h1>
    <h1>created_at :{{$car->created_at}}</h1>
    <h1>updated_at :{{$car->updated_at}}</h1>

    <!-- <h1>{{$car->published ?'Yes':'No'}}</h1> -->


</body>

</html>