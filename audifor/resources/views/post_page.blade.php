<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Page</title>
    <link rel="stylesheet" href="stylepost.css">
    <title>Document</title>
</head>
<body>
    <x-app-layout>
    </x-app-layout> 
    <div class="divtab">
        <lable class="heading">Your Posts</lable>
        <table class="table">
            <tr>
                <th>Post Description</th>

                <th>Image</th>

            </tr>
            @foreach($post as $post)
            <tr>
                <td class="text">{{$post->desription}}</td>

                <td>
                    <img src="post/{{$post->image}}" alt="Your foto will be here!" width="400px">
                </td>
                <td>
                    <a href="{{url('update_post',$post->id)}}" class="btn btn-primary">Update</a>
                </td>
                <td>
                    <a onclick="return confirm('Are you sure to delete a your post?')" href="{{url('delete_post',$post->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>