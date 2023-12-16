<!DOCTYPE html>
<html lang="en">


<head>
    <title>Add Post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css"> -->
</head>

<body>

    <div class="container">
        <form method="POST" action="{{route('AddPost')}}" class="m-auto" enctype="multipart/form-data">
            <!-- hidden input token without it laravel cant take any information from user-->
            @include('includes.postNav')
            @csrf
            <h3 class="my-4">Insert Post</h3>

            <hr class="my-4" />
            <div class="form-group mb-3 row"><label for="title2" class="col-md-5 col-form-label">Post Title</label>
                <div class="col-md-7"><input type="text" class="form-control form-control-lg" id="title2" name="Title" placeholder="Enter Post Title"></div>
            </div>

            <hr class="my-4" />
            <div class="form-group mb-3 row"><label for="title2" class="col-md-5 col-form-label">Auther</label>
                <div class="col-md-7"><input type="text" class="form-control form-control-lg" id="Auther" name="Auther" placeholder="Enter Auther"></div>
            </div>

            <hr class="bg-transparent border-0 py-1" />
            <div class="form-group mb-3 row"><label for="content4" class="col-md-5 col-form-label">Post Content</label>
                <div class="col-md-7"><textarea class="form-control form-control-lg" id="content4" name="Content" placeholder="Enter Content"></textarea></div>
            </div>





            <hr class="my-4" />
            <div class="form-group mb-3 row"><label for="published" name="published" class="col-md-5 col-form-label">Published</label>
                <div class="col-md-7"><input type="checkbox" id="published" name="Published"></div>
            </div>
            <hr class="my-4" />
            <div class="form-group mb-3 row"><label for="insert10" class="col-md-5 col-form-label"></label>
                <div class="col-md-7"><button class="btn btn-primary btn-lg" name="submit" type="submit">Insert</button></div>
            </div>
        </form>
    </div>
</body>

</html>