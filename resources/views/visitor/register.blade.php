@extends('layouts.app')

{{-- Web site Title --}}
@section('title') Register Visitor :: @parent @endsection

{{-- Content --}}
@section('content')
<div class="row">
    <div class="page-header">
        <h2>
            Register Visitor
        </h2>
    </div>
</div>
<div class="container-fluid">
    @if (session('ok'))
    <div class="alert alert-success">
        <a aria-label="close" class="close" data-dismiss="alert" href="#">×</a>
        {{ session('ok') }}
    </div>
    @endif
    @if (session('fail'))
    <div class="alert alert-success">
        <a aria-label="close" class="close" data-dismiss="alert" href="#">×</a>
        {{ session('fail') }}
    </div>
    @endif
    <div class="row">
        <form accept-charset="UTF-8" action="register" enctype="multipart/form-data" method="POST">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label class="control-label" for="name">
                    Name
                </label>
                <div class="controls">
                    <input class="form-control" id="name" name="name" type="text" value="{{ old('name') }}"/>
                    <span class="help-block">
                        {{ $errors->first('name', ':message') }}
                    </span>
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label class="control-label" for="email">
                    E-Mail Address
                </label>
                <div class="controls">
                    <input class="form-control" id="email" name="email" type="text" value="{{ old('email') }}"/>
                    <span class="help-block">
                        {{ $errors->first('email', ':message') }}
                    </span>
                </div>
            </div>
            <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                <label class="control-label" for="text">
                    Phone
                </label>
                <div class="controls">
                    <input class="form-control" id="phone" name="phone" type="phone" value="{{ old('phone') }}"/>
                    <span class="help-block">
                        {{ $errors->first('phone', ':message') }}
                    </span>
                </div>
            </div>
            <div class="form-group {{ $errors->has('ocupation') ? 'has-error' : '' }}">
                <label class="control-label" for="ocupation">
                    Ocupation
                </label>
                <div class="controls">
                    <input class="form-control" id="ocupation" name="ocupation" type="text" value="{{ old('ocupation') }}"/>
                    <span class="help-block">
                        {{ $errors->first('ocupation', ':message') }}
                    </span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button class="btn btn-primary" type="submit">
                        Register
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
