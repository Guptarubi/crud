<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="jumbotron text-center" style="margin-bottom:0">
        <h2>Laravel 9 Multiple Image Upload Real Programmer</h2>
      </div>
      <br>
      <div class="container">
      @if (count($errors) > 0)
      <div class="alert alert-danger">
          <strong>Sorry!</strong> Here have some issue please check<br><br>
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
      </div>
      @endif
        
      @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div> 
      @endif
        
       
      <form method="post" action="{{url('image')}}" enctype="multipart/form-data">
          @csrf
        
          <div class="input-group realprocode control-group lst increment" >
            <input type="file" name="filenames[]" class="myfrm form-control">
            <div class="input-group-btn"> 
              <button class="btn btn-success" type="button"> <i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
            </div>
          </div>
          <div class="clone hide">
            <div class="realprocode control-group lst input-group" style="margin-top:10px">
              <input type="file" name="filenames[]" class="myfrm form-control">
              <div class="input-group-btn"> 
                <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
              </div>
            </div>
          </div>
        
          <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
        
      </form>        
      </div>
        
      <script type="text/javascript">
          $(document).ready(function() {
            $(".btn-success").click(function(){ 
                var lsthmtl = $(".clone").html();
                $(".increment").after(lsthmtl);
            });
            $("body").on("click",".btn-danger",function(){ 
                $(this).parents(".realprocode").remove();
            });
          });
      </script>
</body>
</html>