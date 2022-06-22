<!DOCTYPE html>
<html>
    <head>
        <title>form</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row m-2">
                <form  class="col-9" method="GET">

            <div class="form-group">
                <input type="search" name="search" id="" class="form-control" placeholder="Search anything...">  
            </div>  
            
            <button id="search-button" type="submit" class="btn btn-primary">Search</button>
                </form>
            <div class="col-3">
                <button id="search-button" type="button" class="btn btn-primary">Add</button>
                  <button id="search-button" type="button" class="btn btn-danger">Delete</button>
                            </div>
            </div>
            <center><h1>Employee Record </h1></center>
            <table class="table table-bordered shadow text-center table-striped">
                <tr>
                    <th>Employee id</th>
                    <th>Employee Name</th>
                    <th>Employee Email</th>
                    <th>Employee Mobile</th>
                    <th>Employee Password</th>
                    <th>Employee DOB</th>
                    <th>Employee Image</th>
                    <th>Status</th>
                    <th>Delete </th>
                    <th>Edit</th>
                </tr>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->Name}}</td>
                    <td>{{$post->Email}}</td>
                    <td>{{$post->Mobile_No}}</td>
                    <td>{{$post->password}}</td>
                    <td>{{$post->DOB}}</td>
                    <td><img src="{{asset('upload/'.$post->profile_image)}}" alt="" width="60px" height="60px"></td>
                    
                    <td>
                    <?php if($post->Status == '1'){ ?> 

                        <a href="{{url('/status-update/'.$post->id)}}" class="btn btn-success">Active</a>
                      
                      <?php }else{ ?> 
                      
                        <a href="{{url('/status-update/'.$post->id)}}" class="btn btn-danger">Inactive</a>
                      
                      <?php } ?>
                      </td>
                    <td><a href="/delete/{{$post->id}}" class="btn btn-danger">delete</a></td>
                    <td><a href="/edit/{{$post->id}}" class="btn btn-success">edit</a></td>
                </tr>
                @endforeach
            </table>
        </div>
        </body>
</html>