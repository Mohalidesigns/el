<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
      <a href="/employee" class="btn btn-primary">Add User</a><br>
        <table class="table table-stripped table-bordered">
          <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Post</th>
                <th scope="col">Image</th>
                <th>Edit</th>
                <th>Delet</th>
              </tr>
          </thead>
          <tbody>
          @foreach ($employees as $employee)
            <tr>
              <th>{{ $employee->id }}</th>
              <th>{{ $employee->name }}</th>
              <th>{{ $employee->email }}</th>
              <th>{{ $employee->post }}</th>
              <th> <img src="{{ asset('uploads/employee/' . $employee->image)}}" alt="image"  width="100px;" height="90px" > </th>
              <th><a href="/editimage/{{ $employee->id }}" class="btn btn-success">Edit</a></th>
              <th><a href="/deleteimage/{{ $employee->id }}" class="btn btn-danger">Delete</a></th>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
