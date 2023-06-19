<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPanel</title>
    <link rel="stylesheet" href="styledash.css">
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Admin Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("You're logged in like Admin!") }}
                    </div>
                </div>
            </div>
        </div>
        <div class="maindiv">
                
                <form action="{{url('view_post')}}" method="get" class="form1">
                    @csrf
                    <div>
                        <input type="submit" value="View my Post" style="background: blue ; color: white; cursore: pointer; padding: 5px; border-radius: 10px;">
                    </div>
                </form>

                <label class="title">Add your Audi Foto</label>
                <br><br>
                <form action="{{url('upload_post')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label>Description</label>
                        <input type="text" name="desription">    
                    </div>
                        <br>
                    <div>
                        <label>Upload a Image</label>
                        <input type="file" name="image">    
                    </div>
                        <br>
                    <div>
                        <input type="Submit" style="background: red ; color: white; cursore: pointer; padding: 10px; border-radius: 15px;">
                    </div>
                </form>
            </div>
    </x-app-layout>
</body>
</html>