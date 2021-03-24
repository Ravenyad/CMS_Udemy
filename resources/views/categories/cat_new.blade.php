@extends('layouts.app')

@section('slot')

<div class="row justify-content-center my-5">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                Create category
            </div>

            <div class="card-body">
                <!-- insert error here -->

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