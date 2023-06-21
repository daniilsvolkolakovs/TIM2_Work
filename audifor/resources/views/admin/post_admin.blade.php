<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="styleadm.css">
    </head>
    <body>
        <div class="main">
            <label>Admin Functionl Page</label1>
            @foreach ($users as $user)
                <div>
                    <span>{{ $user->name }}</span>
                    <form action="{{ route('delete_user', $user->id) }}" method="POST" onsubmit="return confirm('Are you shure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </body>
</html>