@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($items->exists)
            <form method="POST" action="{{ route('blog.admin.posts.update',$items->id) }}">
                @method('PATCH')
        @else
            <form method="POST" action="{{ route('blog.admin.posts.store') }}">
        @endif
        @csrf
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @include('Blog.admin.posts.includes.post_edit_main_col')
                </div>
                <div class="col-md-3">
                    @include('Blog.admin.posts.includes.post_edit_add_col')
                </div>
            </div>
            </form>

        @if ($items->exists)
            <br>
            <form method="POST" action="{{ route('blog.admin.posts.destroy',$items->id) }}">
                @method('DELETE')
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card card-block">
                            <div class="card-body ml-auto">
                                <button type="submit">удалить</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </form>
        @endif
    </div>
@endsection
