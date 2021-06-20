@extends('sportsbet.layout')

@section('css')
    <link rel="stylesheet" href="{{asset('public/templates/css/withdraw.css')}}">
@stop
@section('content')
    <div class="faq-section ">
        <div class="col-md-12">
            <div class="panel-body">
                <h4 class="title" style="color: white!important;">Withdraw</h4>
                <div class="row">
                    <form method="POST">
                        @csrf
                        <div>
                            <div>Your wallet address</div>
                            <div>
                                <input type="text" name="address" required="" />
                            </div>
                        </div>
                        <div>
                            <div>
                                <input type="radio" value="1" name="method">BTC</input>
                                <input type="radio" value="2" name="method">ETH</input>
                                <input type="radio" value="3" name="method">TRX</input>
                                    
                            </div>
                        </div>
                        <div>
                            <div>Amount</div>
                            <div>
                                <input type="text" name="amount" required="" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@stop




@section('js')
    <script src="{{asset('public/js/axios.min.js')}}"></script>
    <script src="{{asset('public/admin/js/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

    <script>

        (function ($) {
            "use strict";

            $(document).ready(function () {

                var gatewayId = null;
                $('.deposit-limit').hide();
                $('.deposit-charge').hide();

                $('.method').on('click', function () {
                    $('.method').removeClass('blue-border');
                    $('.method').find('input[name="payment"]').prop('checked', false);
                    $(this).addClass('blue-border');
                    $(this).find('input[name="payment"]').prop('checked', true);

                    var gateway = $(this).find('input[name="payment"]').data();
                    gatewayId = gateway.id;
                    $('.result-show').hide();

                    $(".deposit-limit").text(`@lang('Deposit Limit:') ${gateway.min_amount} - ${gateway.max_amount} {{$basic->currency}} `)
                    $('.deposit-charge').text(`@lang('Deposit Charge:') ${gateway.fixed_charge} {{$basic->currency}} + ${gateway.percent_charge} % `)
                    $('.deposit-limit').show()
                    $('.deposit-charge').show()
                });

                $('.amount').on('keypress', function () {
                    $('.result-show').hide();
                });

                $('.request-button').on('click', function () {
                    axios({
                        method: 'post',
                        url: '{{route('make-request')}}',
                        data: {
                            gateway_id: gatewayId,
                            amount: $('.amount').val()
                        }
                    }).then(function (response) {

                        // Error Part
                        if (response.data.errors && 0 < response.data.errors.length) {
                            response.data.errors.forEach(function (item, index) {
                                var content = {};
                                content.message = item;
                                content.title = 'Warning!';
                                content.icon = 'fa fa-bell';

                                $.notify(content, {
                                    type: 'danger',
                                    placement: {
                                        from: 'top',
                                        align: 'right'
                                    },
                                    showProgressbar: true,
                                    time: 1000,
                                    delay: 4000,
                                });
                            });
                        } else {
                            if (response.data.success == true) {
                                var logs = response.data.logs;
                                if(1000 >logs.method_code){
                                    var route = "/pay-now";
                                }else{
                                    var route = "{{route('deposit.manual.confirm')}}";
                                }


                                var output = `
                                    <ul class="list-group font-weight-bold text-center ">
                                        <li class="list-group-item">Payment Method : ${logs.method}</li>
                                        <li class="list-group-item">${logs.amount}</li>
                                        <li class="list-group-item">${logs.charge}</li>
                                        <li class="list-group-item d-none">${logs.payable}</li>
                                        <li class="list-group-item">${logs.conversion_rate}</li>
                                        <li class="list-group-item">${logs.in}</li>
                                        <li class="list-group-item ${(logs.crypto == 0)? 'd-none' : '' }">${logs.crypto_msg}</li>
                                        <li class="list-group-item" style="text-align:center;">
                                            <a href="${route}" class="btn btn-success">@lang('Pay Now')</a>
                                        </li>
                                    </ul>`;

                                $('.result-show').html(output)
                            } else {
                                $('.result-show').html(null)
                            }
                            $('.result-show').show();
                            $('.result-show').addClass('shadow');

                        }
                    });
                });

            });

        })(jQuery);


    </script>
@stop
