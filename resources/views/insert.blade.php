<html>
    <head>
        <title>form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Add Data</h1>
            <form method="POST" action="store">
                @csrf
                <div class="mb-3">
                    <label><b>Post title:</b></label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label><b>Post author:</b></label>
                    <input type="text" name="author" class="form-control">
                </div>
                <input type="submit" name="insert" value="Insert" class="btn btn-primary">
            </form>
        </div>
    </body>
</html>