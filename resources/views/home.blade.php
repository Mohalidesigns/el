@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    You are welcome to El-Alan Dashboard
                      <a class="nav-link" href="/image-gallery">Click here to Update the Residential Projects</a>
                        <a class="nav-link" href="/cproject">Click here to Update the Commercial Projects</a>
                          <a class="nav-link" href="/fproject">Click here to Update the Factory Projects</a>
                            <a class="nav-link" href="/iproject">Click here to Update the Infrastructure Projects</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
