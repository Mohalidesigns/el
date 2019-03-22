<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
    <a href="/employeepage" class="btn btn-primary">view User</a><br>
      <div class="jumbotron">
      <form method="POST" action="/updateimage/{{ $employees->id }}" enctype="multipart/form-data">

         <input id="id" type="hidden"  name="id" value="{{ $employees->id }}" >
            {{csrf_field()}}
            {{method_field('PUT')}}
          <div class="form-group">
              <label>Name</label>
                  <input id="name" type="text" class="form-control" name="name" value="{{ $employees->name }}">
          </div>

          <div class="form-group">
              <label>Email</label>
                  <input id="email" type="email" class="form-control" name="email"  value="{{ $employees->email }}">
          </div>

          <div class="form-group">
              <label>Post</label>
                  <input name="post" id="post" type="text" class="form-control" value="{{ $employees->post }}">
          </div>

            <label>Image</label>
          <div class="input-group">
                  <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" value="{{ $employees->image }}">
                    <label class="custom-file-label">Choose file</label>
                  </div>
          </div>

                  <button type="submit" name="submit" class="btn btn-primary btn-lg">Update  Data</button>

      </form>
      </div>
    </div>
  </body>
</html>
