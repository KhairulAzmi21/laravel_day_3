<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
    </head>
    <body>
        @guest
            This is a guest 
        @endguest
        @auth
            This is authenticate user {{ auth()->user()->name }}
        @endauth

        <form action="/post" method="post">
            <label for="">Title</label>
            <input type="text" name="title" value=""> <br>
            <label for="">Body</label>
            <textarea name="body" rows="8" cols="80"></textarea><br>
            <button type="submit" name="button">Add New Post</button>
        </form>
    </body>
</html>
