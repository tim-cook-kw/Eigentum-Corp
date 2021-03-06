@extends('layouts.homelayouts')
@section('content')
<!-- page__body -->
<div class="page__body">
    <div class="block">
        <div class="container-login">
            <div class="col-md-6 col-xl-5 offset-xl-1 d-flex">
                <div class="card flex-grow-1 mb-md-0">
                    <div class="card__header">
                        <h4 class="decor-header">Login</h4></div>
                    <div class="card__content">
                    <form method="POST" action="{{ route('login') }}">
                        <form>
                        @csrf
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" placeholder="Enter email">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page__body / end -->
@endsection