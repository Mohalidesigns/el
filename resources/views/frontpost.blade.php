<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Front Page Post</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Title One</label>
                                <div class="col-md-6">
                                    <input  type="text" class="form-control" name="titleone" value="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Body One</label>
                                <div class="col-md-6">
                                    <input  type="text" class="form-control" name="bodyone" value="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Title Two</label>
                                <div class="col-md-6">
                                    <input  type="text" class="form-control" name="titletwo" value="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Title Two</label>
                                <div class="col-md-6">
                                    <input  type="text" class="form-control" name="titletwo" value="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Title Three</label>
                                <div class="col-md-6">
                                    <input  type="text" class="form-control" name="titlethree" value="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Title Three</label>
                                <div class="col-md-6">
                                    <input  type="text" class="form-control" name="titlethree" value="" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

  </body>
</html>
