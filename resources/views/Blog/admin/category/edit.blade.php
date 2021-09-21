@extends('layouts.app')

@section('content')
@if ($item->exists)
    <form method="POST" action="{{ route('blog.admin.categories.update',$item->id) }}">
        @method('PATCH')
@else
    <form method="POST" action="{{ route('blog.admin.categories.store') }}">
@endif
    @csrf
    <div class="container">
        @if ($errors->any())
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="alert alert-danger" role="alert">
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                            </span>
                        </button>
                        {{ $errors->first() }}
                    </div>
                </div>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('Blog.admin.category.includes.item_edit_main_col')
            </div>
            <div class="col-md-3">
                @include('Blog.admin.category.includes.item_edit_add_col')
            </div>
        </div>
    </div>
</form>
@endsection
