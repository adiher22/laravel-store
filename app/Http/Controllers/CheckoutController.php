<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Cart;
use App\Transaction;
use App\TransactionDetail;

use Exception;

use Midtrans\Snap;
use Midtrans\Config;

class CheckoutController extends Controller
{
    public function process(Request $request){
        // Save data user
        $user = Auth::user();
        $user->update($request->except('total_price'));
        
        // Proses checkout
        $code = 'STORE-' . mt_rand(0000,99999);
        $cart = Cart::with(['product','user'])->where('users_id', Auth::user()->id)->get();

        // Transaction Create
        $transaction = Transaction::create([
            'users_id' => Auth::user()->id,
            'insurance_price' => 0,
            'shipping_price' => 0,
            'total_price' => $request->total_price,
            'transaction_status' => 'PENDING',
            'code' => $code,
            
        ]);

        // TransactionDetail Create
        foreach($cart as $cart){
            $trx = 'TRX-' . mt_rand(0000,99999);

            TransactionDetail::create([
                'transactions_id' => $transaction->id,
                'products_id' => $cart->product->id,
                'price' => $cart->product->price,
                'shipping_status' => 'PENDING',
                'resi' => '',
                'code' => $trx,
                
            ]);
        }

        // Menghapus dat cart
        Cart::where('users_id', Auth::user()->id)->delete();

        
        // Configurasi midtrans
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        // BUat array untuk di kirim ke midtrans
        $midtrans = [
            'transaction_details' => array(
                'order_id' => $code,
                'gross_amount' => (int) $request->total_price,

            ),
            'customer_details' => array(
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,

            ),
            'enabled_payments' => array(
                'gopay','permata_va','shopeepay','indomaret','bca_klikpay','bca_klikbca','bri_epay','echannel',
                'bca_va','bni_va','bri_va','akulaku','danamon_online','other_va','bank_transfer'
            ),
            'vtweb' => []


        ];

        try {
            // Get Snap Payment Page URL
            $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;
            
            // Redirect to Snap Payment Page
            return redirect($paymentUrl);
          }
          catch (Exception $e) {
            echo $e->getMessage();
          }
    }

    public function callback(Request $request){

    }
}
