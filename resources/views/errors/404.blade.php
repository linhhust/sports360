@extends('sportsbet.layout')

@section('css')

@stop
@section('content')
    @php

    $page_title = '404';
    @endphp

    <div class="error-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-txt">
                        <div class="oops" style="max-width: 100px; margin: 0 auto;">
                            <img src="{{asset('public/templates/img/oops.png')}}" alt=""  style="width: 100%;">
                        </div>
                        <h2>@lang('Page Not Found')</h2>
                        {{-- <a href="{{url('/')}}" class="go-home-btn">@lang('Back Home')</a> --}}
                        <div class="Inline-sc-1rz1cju-0" style="overflow: visible;">
                            <a variant="primary" class="button__Button-sc-1kryk61-2 ieTUff" href="{{url('/')}}">
                                <span class="button__ButtonText-sc-1kryk61-0 fNvhMU">@lang('Back Home')</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop