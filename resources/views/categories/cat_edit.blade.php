@extends('layouts.app')

@section('slot')

<div class="row justify-content-center my-5">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                Create category
            </div>

            <div class="card-body">
                

                <form action="/categories/{{ $cat->id }}/update" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $cat->id }}">
                <div class="form-group">
                    <input type="text" class="form-control" name="Name" value="{{ $cat->Name }}">
                </div>

                <div class="form-group">
                    <textarea name="Description" placeholder="Description" cols="10" rows="5" class="form-control">{{ $cat->Description }}</textarea>
                </div>

                <div class="form-group text-center">
                    <button class="btn btn-success">
                        Update Category
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection