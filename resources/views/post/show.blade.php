@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $post->title }} | <small>{{ $post->category->name }}</small>
                    <div class="pull-right">
                        <a class="btn btn-xs btn-success" href="{{ route('post.index') }}">Back</a></button>
                    </div>
                    </div>
                    <div class="panel-body">
                        {{ $post->content }}
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Tambahkan Komentar</div>
                        <div class="panel-body">
                            <form action="{{ route('post.comment.store', $post) }}" method="post" class="form-horizontal">
                                {{ csrf_field() }}
                                <textarea name="message" cols="30" rows="3" class="form-control" placeholder="Isi Komentar ..."></textarea>
                                <input style="margin-top:10px; " type="submit" value="Komentar" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
        </div>
</div>
@endsection
