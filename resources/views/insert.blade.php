<html>
    <head>
        <title>form</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            @if(session('status'))
            <h6 class="alert alert success">{{session('status')}}</h6>
            @endif

            <h1 class="text-center">Add Employee Data</h1>
            <form method="POST" action="{{url('/store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label><b>Employee Name:</b></label>
                    <input type="text" name="name" id="fullname" class="form-control" value="{{old('name')}}" >
                    @if($errors->has('name'))
                    <span class="text-danger" role="alert" id="errormail">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label><b>Employee Email:</b></label>
                    <input type="email" name="email" id="emailid" class="form-control" value="{{old('email')}}" >
                    @if($errors->has('email'))
                    <span class="text-danger" role="alert" id="errormail">
                        <strong>{{$errors->first('email')}}</strong>
                    </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label><b>Employee Mobile:</b></label>
                    <input type="text" name="mobile" id="mobile" class="form-control" value="{{old('mobile')}}" required>
                    @if($errors->has('mobile'))
                    <span class="text-danger"  role="alert" id="mobile">
                        <strong>{{$errors->first('mobile')}}</strong>
                    </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label><b>Employee Password:</b></label>
                    <input type="text" name="password" id="password" class="form-control" value="{{old('password')}}" required>
                    @if($errors->has('password'))
                    <span class="text-danger" role="alert" id="password">
                        <strong>{{$errors->first('password')}}</strong>
                    </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label><b>Employee DOB:</b></label>
                    <input type="date" name="DOB" id="DOB" class="form-control" value="{{old('DOB')}}" required>
                    @if($errors->has('DOB'))
                    <span class="text-danger" role="alert" id="DOB">
                        <strong>{{$errors->first('DOB')}}</strong>
                    </span>
                    @endif
                </div>
                <div class="image">
                    <label><h4>Add image</h4></label>
                    <input  type="file" class="form-control"  id="profile_image" name="profile_image" value="{{old('profile_image')}}" required>
                    @if($errors->has('profile_image'))
                    <span class="text-danger" role="alert" id="profile_image">
                        <strong>{{$errors->first('profile_image')}}</strong>
                    </span>
                    @endif
                  </div>
                  
                <input type="submit" name="insert" value="Insert" class="btn btn-primary">
            </form>
        </div>
    </body>
</html>