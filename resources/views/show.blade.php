<!DOCTYPE html>
<html>
    <head>
        <title>form</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <table class="table table-bordered shadow text-center table-striped">
                <tr>
                    <th>post id</th>
                    <th>post title</th>
                    <th>post author</th>
                    <th>post delete</th>
                    <th>post edit</th>
                </tr>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->post_title}}</td>
                    <td>{{$post->post_author}}</td>
                    <td><a href="/delete/{{$post->id}}" class="btn btn-danger">delete</a></td>
                    <td><a href="/edit/{{$post->id}}" class="btn btn-success">edit</a></td>
                </tr>
                @endforeach
            </table>
        </div>
        </body>
</html>