<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trashed Cars List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    @include('includes.nav')
    <div class="container">
        <h2>Trashed Cars List</h2>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Images</th>
                    <th>Published</th>

                    <th>Delete Car</th>
                    <th>Restore Car</th>
                </tr>
            </thead>
            <tbody>
                @foreach($car as $car)
                <tr>
                    <td>{{$car->title}}</td>
                    <td>{{$car->description}}</td>
                    <td>{{$car->image}} <br><img src="{{asset('/assets/images/'.$car->image)}}" alt="" style="width:200px;"></td>
                    <td>{{$car->published ?'Yes':'No'}}</td>


                    <td><a href="forceDeleteCar/{{$car->id}}" onclick="return confirm('Are you sure you want to permanently delete this record ?')">Force Delete</a></td>
                    <td><a href="restoreCar/{{$car->id}}">Restore</a></td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>