<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleup.css">
</head>
<body>
    <x-app-layout>
    </x-app-layout>
    <div style="padding-left: 40%; padding-top: 10%;" >
        <form action="{{url('confirm_update',$data->id)}}" method="POST" enctype="multipart/form-data" style="padding-bottom:10px ;">
            @csrf
            <div>
                <label>Post Description</label>
                <input type="text" name="desription" value="{{$data->desription}}">
            </div>
                <br>
            <div>
                <label>Current Image</label>
                <img src="/post/{{$data->image}}" alt="Your image" width="400px">
            </div>
                <br>
            <div>
                <label>Your Image</label>
                <input type="file" name="image">
            </div>
                <br>
            <div>
                <input type="submit" value="Update!" style="background: red ; color: white; cursore: pointer; padding: 10px; border-radius: 15px;">
            </div>
        </form>

    </div>
</body>
</html>