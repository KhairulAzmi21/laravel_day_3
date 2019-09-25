<!DOCTYPE html>
<html lang="en" dir="ltr">
    <body>
        post from {{ auth()->user()->name }} , has roles {{ auth()->user()->roles->implode('name', ' |') }}
        <br>
        This user has a {{ $posts->count() }} posts.
        <table>
            <tr>
                {{--  --}}
                <th>Title</th>
                <th>Created At</th>
            </tr>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at->toFormattedDateString() }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
