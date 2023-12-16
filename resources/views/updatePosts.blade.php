<!DOCTYPE html>
<html lang="en">

<head>

    <title>Update Post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    @include('includes.postNav')
    <!-- Start Navbar -->
    <!-- <nav id='menu'>
        <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
        <ul>
            <li><a href=''>Home</a></li>
            <li><a class='dropdown-arrow' href=''>Posts</a>
                <ul class='sub-menus'>
                    <li><a href=''>Posts List</a></li>
                    <li><a href=''>Add Car</a></li>
                </ul>
            </li>
            <li><a class='dropdown-arrow' href='testimonials.php'>Users</a>
                <ul class='sub-menus'>
                    <li><a href=''>Users List</a></li>
                </ul>
            </li>
            <li><a href='#'>Contact Us</a></li>
        </ul>
    </nav> -->
    <!-- End Navbar -->

    <div class="container">

        <form method="post" action="{{route('update',$post->id)}}" class="m-auto" style="max-width:600px" enctype="multipart/form-data">
            @csrf
            @method('put')
            <h3 class="my-4">Update Post</h3>
            <hr class="my-4" />
            <div class="form-group mb-3 row"><label for="title2" class="col-md-5 col-form-label">Post Title</label>
                <!-- <input type="hidden" name="id" value="<?php //echo $post['id'] 
                                                            ?>"> -->
                <div class="col-md-7"><input type="text" class="form-control form-control-lg" id="title2" name="Title" placeholder="Enter Post Title" value="{{$post->Title}}"></div>

            </div>
            <hr class="my-4" />
            <div class="form-group mb-3 row"><label for="Auther" class="col-md-5 col-form-label">Post Auther</label>

                <div class="col-md-7"><input type="text" class="form-control form-control-lg" id="Auther" name="Auther" placeholder="Enter Post Auther" value="{{$post->Auther}}"></div>

            </div>

            <hr class="bg-transparent border-0 py-1" />
            <div class="form-group mb-3 row"><label for="content4" class="col-md-5 col-form-label">Content</label>
                <div class="col-md-7"><textarea class="form-control form-control-lg" id="content4" name="Content" placeholder="Enter Content">{{$post->Content}}</textarea></div>
            </div>



            <hr class="my-4" />
            <div class="form-group mb-3 row"><label for="published" class="col-md-5 col-form-label">Published</label>
                <div class="col-md-7"><input type="checkbox" id="published" name="Published" @checked($post->Published)></div>
            </div>



            <hr class="my-4" />
            <div class="form-group mb-3 row"><label for="insert10" class="col-md-5 col-form-label"></label>
                <div class="col-md-7"><button class="btn btn-primary btn-lg" name="submit" type="submit">Update</button></div>
            </div>
        </form>
    </div>
</body>

</html>