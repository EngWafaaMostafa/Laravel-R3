<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Car</title>
</head>

<body>
    @include('includes.nav')
    <h1>title :{{$car->title}}</h1>
    <h1>description :{{$car->description}}</h1>
    <h1>created_at :{{$car->created_at}}</h1>
    <h1>updated_at :{{$car->updated_at}}</h1>
    <h1>{{$car->published ?"Published":"Not Published"}}</h1>
    <!-- <h1>{{$car->published ?'Yes':'No'}}</h1> -->


</body>

</html>