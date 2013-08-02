@extends('syntara::layouts.dashboard.master')

@section('content')
<script type="text/javascript" src="{{ asset('packages/mrjuliuss/syntara/assets/js/dashboard/login.js') }}"></script>
<script type="text/javascript" src="{{ asset('packages/mrjuliuss/syntara/assets/js/forms/check.js') }}"></script>
{{ Breadcrumbs::create(array(array('title' => 'Login', 'link' => "dashboard/login", 'icon' => 'glyphicon-user'))); }}
<div class="container" id="main-container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-4 col-offset-4">
            <form id="login-form" method="post" class="form-horizontal">
                <div class="form-group account-username">
                    <input type="text" class="col-lg-12 form-control" placeholder="Username" name="email" id="email">
                </div>

                <div class="form-group account-username account-password">
                   <input type="password" class="col-lg-12 form-control" placeholder="Password" name="pass" id="pass">
                </div>
                <button class="btn btn-block btn-large btn-primary">Sign In</button>
            </form>
        </div>
    </div>
</div>
@stop