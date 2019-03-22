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
      <form method="POST" action="{{route('addimage')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label>Name</label>
                  <input id="name" type="text" class="form-control" name="name" required autofocus>
          </div>

          <div class="form-group">
              <label>Email</label>
                  <input id="email" type="email" class="form-control" name="email"  required>
          </div>

          <div class="form-group">
              <label>Post</label>
                  <input name="post" id="password" type="text" class="form-control" name="password" required>
          </div>

          <div class="input-group">
                  <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input">
                    <label class="custom-file-label">Choose file</label>
                  </div>
          </div>

                  <button type="submit" name="submit" class="btn btn-primary btn-lg">Save Data</button>

      </form>
      </div>
    </div>
  </body>
</html>
