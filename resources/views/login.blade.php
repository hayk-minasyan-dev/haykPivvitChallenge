@extends('layouts/main')

@section('content')
<div class="panel-heading">
    <div class="panel-title text-center">
        <h1 class="title">Company Name</h1>
        <hr />
    </div>
</div> 
<div class="main-login main-center">
    <div class="col-sm-4 col-sm-offset-4">

        <?= Form::open(['class' => 'form-horizontal']) ?>
        <div class="form-group">
            <label for="email" class="cols-sm-2 control-label">Your Email</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                    <?= Form::text('email', Request::old('email', ''), ['class' => 'form-control', 'placeholder' => 'Enter your Email']) ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="cols-sm-2 control-label">Password</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                    <?= Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter your Password']) ?>
                </div>
            </div>
        </div>

        <div class="form-group ">
            <button class="btn btn-primary btn-lg btn-block login-button">Login</button>
        </div>
        <?= Form::close() ?>
    </div>
</div>
@endsection