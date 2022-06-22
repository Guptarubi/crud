<html>
    <head>
        <title>form</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Update Data</h1>
           
            <form method="POST" action="/update/{{$posts->id}}">
                @csrf
               
                <div class="mb-3">
                    <label><b>Employee name:</b></label>
                    <input type="text" name="name" class="form-control" value={{$posts->Name}}>
                </div>
                <div class="mb-3">
                    <label><b>Employee email:</b></label>
                    <input type="email" name="email" class="form-control" value={{$posts->Email}}>
                </div>
                <div class="mb-3">
                    <label><b>Employee mobile:</b></label>
                    <input type="text" name="mobile" class="form-control" value={{$posts->Mobile_No}}>
                </div>
                <div class="mb-3">
                    <label><b>Employee password:</b></label>
                    <input type="text" name="password" class="form-control" value={{$posts->password}}>
                </div>
                <div class="mb-3">
                    <label><b>Employee DOB:</b></label>
                    <input type="date" name="DOB" class="form-control" value={{$posts->DOB}}>
                </div>
                <div class="image">
                    <label><h4>Add image</h4></label>
                    <input type="file" class="form-control" name="profile_image" value={{$posts->profile_image}}>
                  </div>
                <input type="submit" name="update" value="Update" class="btn btn-success">
            </form>
        </div>
    </body>
    
</html>