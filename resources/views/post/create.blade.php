@extends('layouts.app')

@section('content')
    <div class="container" style="width:700px;height:100%">
        {!! Form::open(['route'=>'post.store']) !!}
            <div class="form-group">
                {!! Form::label('title', 'Title ', ['class' => 'control-label']) !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::select('category_id', App\Category::pluck('name','id')->all(), null, ['class'=>'form-control','id'=>'category_id','placeholder'=>'Choose Category']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content', 'Content ', ['class' => 'control-label']) !!}
                {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
            </div>
            <div class="box-footer">
                <div class="form-group">
                    {!! Form::submit('Tambah', ['class' => 'btn btn-primary form-control']) !!}
                </div>
            </div>
        {!! Form::close() !!}
@endsection