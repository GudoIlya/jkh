@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('auth.h_changepassword_form')</div>
                    <div class="panel-body">
                        @if (session('success_change_password'))
                            <p>
                                @if (session('success_change_password') == 'good')
                                    <span style="color:green">@lang('auth.t_success_change_password')</span>
                                @elseif (session('success_change_password') == 'wrong_password')
                                    <span style="color:red">@lang('auth.t_wrong_old_password')</span>
                                @endif

                            </p>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/user/changepassword') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('old_password') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">@lang('auth.f_old_password')</label>

                                <div class="col-md-6">
                                    <input id="name" type="password" class="form-control" name="old_password" value="">

                                    @if ($errors->has('old_password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('old_password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">@lang('auth.f_password')</label>

                                <div class="col-md-6">
                                    <input id="name" type="password" class="form-control" name="password" value="">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">@lang('auth.f_password_confirm')</label>

                                <div class="col-md-6">
                                    <input id="name" type="password" class="form-control" name="password_confirmation" value="">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-save"></i> Сохранить
                                    </button>
                                    <a href="{{ route('userProfileIndex') }}">@lang('mainmenu.l_go_back')</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
