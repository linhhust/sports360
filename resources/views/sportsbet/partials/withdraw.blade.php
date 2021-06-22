<div class="modal fade" id="modalWithdraw" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true" style="padding-right: 15px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header custom-modal-header">
                <h5 class="modal-title method-name  text-white" id="exampleModalLabel">Withdraw Via  Payoneer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="withdraw">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label class="label-form"><strong>Your Address:</strong></label>
                        <div class="input-group">
                            <input type="text" class="input-control" name="address" placeholder="Your Address" required="" value="">
                        </div>
                    </div>
                    <div class="form-group group-radio">
                        <label class="radio-control label-form" for="check_btc">
                            <input class="radio_class" id="check_btc" name="type" required="" type="radio" value="BTC" />
                            <span class="radio-label">BTC</span>
                       	</label>
                        <label class="radio-control label-form" for="check_eth">
                            <input class="radio_class" id="check_eth" name="type" required="" type="radio" value="ETH" />
                            <span class="radio-label">ETH</span>
                        </label>
                        <label class="radio-control label-form" for="check_trx">
                            <input class="radio_class" id="check_trx" name="type" required="" type="radio" value="TRX" />
                        	<span class="radio-label">TRX</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="label-form"><strong>Enter Amount:</strong></label>
                        <div class="input-group">
                            <input id="amount" type="text" class="input-control" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" name="amount" placeholder="0.00" required="" value="">
                        </div>
                    </div>
                    <div class="form-element mt-2">
                        <button type="submit" class="btn btn-submit"><span>Withdraw</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>