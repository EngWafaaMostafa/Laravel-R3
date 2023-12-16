<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    @include('includes.postNav')
    <div class="container">
        <h2>Posts List</h2>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Post Title</th>
                    <th>Auther</th>
                    <th>Content</th>
                    <th>Published</th>
                    <th>Edit Post</th>
                    <th>Show Post</th>
                </tr>
            </thead>
            <tbody>
                @foreach($post as $post)
                <tr>
                    <td>{{$post->Title}}</td>
                    <td>{{$post->Auther}}</td>
                    <td>{{$post->Content}}</td>
                    <td>{{$post->Published ?'Yes':'No'}}</td>
                    <td><a href="updatePosts/{{$post->id}}">Update</a></td>
                    <td><a href="showPost/{{$post->id}}">Show</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>