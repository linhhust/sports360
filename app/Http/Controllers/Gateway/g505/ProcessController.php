<?php

namespace App\Http\Controllers\Gateway\g505;

use App\Deposit;
use App\GeneralSettings;
use App\Http\Controllers\Controller;
use CoinGate\CoinGate;
use CoinGate\Merchant\Order;
use App\Http\Controllers\Gateway\PaymentController;

class ProcessController extends Controller
{
    /*
     * Coingate Gateway 505
     */

    public static function process($deposit)
    {
        require_once('coingate-php/init.php');
        $coingateAcc = json_decode($deposit->gateway_currency()->parameter);
        CoinGate::config(array(
            'environment' => 'live', // sandbox OR live
            'auth_token' => $coingateAcc->api_key
        ));

        $basic =  GeneralSettings::first();

        $post_params = array(
            'order_id' => $deposit->trx,
            'price_amount' => round($deposit->final_amo,2),
            'price_currency' => $deposit->method_currency,
            'receive_currency' => $deposit->method_currency,
            'callback_url' => route('g505'),
            'cancel_url' => route('payment'),
            'success_url' => route('payment'),
            'title' => 'Payment to ' . $basic->sitename,
            'token' => $deposit->trx
        );

        $order = Order::create($post_params);
        if ($order) {
            $send['redirect'] = true;
            $send['redirect_url'] = $order->payment_url;
        } else {
            $send['error'] = true;
            $send['message'] = 'Unexpected Error! Please Try Again';
        }
        $send['view'] = '';
        return json_encode($send);
    }

    public function ipn()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $validIp = curlContent('https://api.coingate.com/v2/ips-v4');
        if (strpos($validIp, $ip) !== false) {
            $data = Deposit::where('trx', $_POST['token'])->orderBy('id', 'DESC')->first();
            if ($_POST['status'] == 'paid' && $_POST['price_amount'] == round($data->final_amo,2) && $data->status == '0') {
                PaymentController::userDataUpdate($data->trx);
            }
        }
    }
}
