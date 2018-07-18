@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('rates.rates_info_header')</div>
                    <div class="panel-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">Наименование тарфиа</div><div class="col-md-5">Цена</div>
                            </div>
                            @foreach ($rates as $rate)
                                  <div class="row">
                                      <div class="col-md-5">{{ $rate->name  }}</div><div class="col-md-5">{{ $rate->price }}
                                          <form action="{{ route('deleteRate')  }}">
                                              <input type="hidden" value="{{ $rate->id  }}">
                                              <input type="submit" value="-">
                                          </form>
                                      </div>
                                  </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="panel-heading">Добавить</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('saveRate') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="nr_name" class="col-md-4 control-label">@lang('rates.f_rate_name')</label>
                                <div class="col-md-6">
                                    <input id="nr_name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label for="nr_price" class="col-md-4 control-label">@lang('rates.f_rate_price')</label>
                                <div class="col-md-6">
                                    <input id="nr_price" type="text" class="form-control" name="price" value="{{ old('price') }}">

                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <input type="hidden" name="user_id" value="{{ $user_id  }}">

                            <div class="form-group">
                               <div class="col-md-6 col-md-offset-4">
                                   <button type="submit" class="btn btn-primary">
                                       <i class="fa fa-btn fa-save"></i>@lang('rates.b_save_rate')
                                   </button>
                               </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
