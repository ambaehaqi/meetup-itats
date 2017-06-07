@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach ($articles as $article)
                <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>
                        {{ $article->title }} oleh
                        {{ $article->user->name }} -
                        {{ $article->created_at->diffForHumans() }}

                        | <a href="{{ route('articles.edit', $article) }}">Edit</a> -
                        <form class="" action="{{ route('articles.destroy', $article) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </h4>
                </div>
                <div class="panel-body">
                    {{ $article->content }}
                </div>
            </div>
            @endforeach
        </div>

        <div class="col-md-8 col-md-offset-2">
            {{ $articles->links() }}
        </div>
    </div>
</div>
@endsection
