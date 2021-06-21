@extends('sportsbet.layout')

@section('css')
    <link rel="stylesheet" href="{{asset('public/css/withdraw.css')}}">
@stop
@section('content')
<div class="modal fade" id="modalWithdraw" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true" style="padding-right: 15px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header custom-modal-header">
                <h5 class="modal-title method-name  text-white" id="exampleModalLabel">Withdraw Via  Payoneer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="" method="post">
                @csrf
                <div class="modal-body">
                    <p class="text-danger depositLimit">Withdraw Limit: 100 - 3200  USD</p>
                    <p class="text-danger depositCharge">Charge: 10 USD + 0.15 %</p>
                    <p class="text-info duration">Recipient Get Amount in  1-2 Hours</p>
                    <div class="form-group">
                        <input type="hidden" name="id" class="id form-control" value="2">
                    </div>
                    <div class="form-group">
                        <label><strong>Enter Amount:</strong></label>
                        <div class="input-group">
                            <input id="amount" type="text" class="input-control" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" name="amount" placeholder="0.00" required="" value="">
                        </div>
                    </div>
                    <div class="form-element mt-2">
                        <button type="submit" class="btn btn-submit"><span>Confirm</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@stop




@section('js')
    <script src="{{asset('public/js/axios.min.js')}}"></script>
    <script src="{{asset('public/admin/js/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
    {{-- <script src="{{asset('public/js/sportsbet/withdraw.js')}}"></script> --}}
@stop
