@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a contact</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('contacts.update', $contact->id) }}">
            @method('PUT')
            @csrf
            <div class="form-group">

                <label for="first_name">Title:</label>
                <input type="text" class="form-control" name="title" value={{ $contact->title }} />
            </div>

            <div class="form-group">
                <label for="last_name">Content:</label>
                <input type="text" class="form-control" name="content" value={{ $contact->content }} />
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
