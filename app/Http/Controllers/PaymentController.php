<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function show(){
        return view('payment');
    }

    public function process(Request $request){
         $validated = $request->validate([
        'card_name'    => 'required|string|max:255',
        'card_number'  => 'required|digits_between:13,19',
        'expiry'       => 'required|regex:/^(0[1-9]|1[0-2])\/\d{2}$/',
        'cvv'          => 'required|digits:3',
        ]);


        Payment::create([
            'name' => $validated['card_name'],
            'amount' => 'required|numeric|min:0'
        ]);

        return redirect()->route('payment.show')->with('success', 'Payment processed successfully.');
    }
}
