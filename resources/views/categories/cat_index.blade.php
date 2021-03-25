@extends('layouts.app')


@section('slot')
<h1 class="text-center my-5">Category Page</h1>

<div class="row justify-content-center my-5">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                Categories
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($categories as $cat)
                    <li class="list-group-item">
                        {{ $cat -> Name }}

                        <div class="btn-group m-x 2 float-right">
                            <a href="/categories/{{ $cat->id }}/edit" class="btn btn-success btn-sm">
                                Edit
                            </a>
                            <a href="/categories/{{ $cat->id }}/delete" class="btn btn-danger btn-sm">
                                Delete
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <a href="/categories/new" class="btn btn-primary btn-large">
        Add Category
    </a>
</div>
@endsection