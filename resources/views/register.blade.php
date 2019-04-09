@extends('layouts.homelayouts')
@section('content')
<!-- page__body -->
<div class="page__body">
    <div class="block">
        <div class="container-login">
            <div class="col-md-6 col-xl-5 offset-xl-1 d-flex">
                <div class="card flex-grow-1 mb-md-0">
                    <div class="card__header">
                        <h4 class="decor-header">Register</h4></div>
                    <div class="card__content">
                        <form>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Repeat Password</label>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page__body / end -->
@endsection