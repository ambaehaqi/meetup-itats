@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Article</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ route('articles.store') }}" class="form-horizontal" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="">Title :</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="">Content :</label>
                            </div>
                            <div class="col-md-8">
                                <textarea name="content" id="" rows="5" class="form-control">{{ old('content') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="submit" value="Add Article" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
