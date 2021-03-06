@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($post as $objek)
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $objek->title }}
                        <div class="pull-right">
                            {!! Form::open(['method' => 'DELETE', 'action' => ['PostController@destroy', $objek->id]]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-xs btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-xs btn-default" href="{{ route('post.edit',$objek->id) }}">Update</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        {{ str_limit($objek->content, 100, '...') }}
                        <a class="btn btn-xs btn-info" href="{{ route('post.show', $objek->id) }}">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach  
    </div>
</div>
@endsection
