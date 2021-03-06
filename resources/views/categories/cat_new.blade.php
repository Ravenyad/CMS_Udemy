@extends('layouts.app')

@section('slot')

<div class="row justify-content-center my-5">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                Create category
            </div>

            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach ($errors->all() as $error)
                            <li class='list-group-item'>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="/categories/create_cat" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" placeholder="category name" class="form-control" name="name">
                </div>

                <div class="form-group text-center">
                    <button class="btn btn-success">
                        Create Category
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection