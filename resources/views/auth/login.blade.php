@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8" style="margin-top: 50px">
            @if(Session::has('unauthorized'))
                <div class="alert alert-info" role="alert">{{ Session::get('unauthorized') }}</div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Inloggen</div>
                <div class="panel-body login-panel">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">{{ trans('columns.email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">{{ trans('columns.password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> {{ trans('columns.remember') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Inloggen
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">{{ trans('columns.forgot_password') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4" style="margin-top: 50px">
            <div class="panel panel-default">
                <div class="panel-heading">Registreren</div>
                <div class="panel-body register-panel">
                    <div class="row">
                        <div class="col-md-10">
                            <p>
                                Met een account kunt u makkelijk een ligplaats registreren, heeft u een handig overzicht van al uw boten en blijft u op de hoogte van onze jachthaven.
                            </p>
                            <a href="/register" class="btn btn-primary">
                                <i class="fa fa-btn fa-sign-in"></i> Registreren
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
