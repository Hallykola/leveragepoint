<?php

namespace App\Http\Controllers;

use App\Models\Payments;
use App\Http\Requests\StorePaymentsRequest;
use App\Http\Requests\UpdatePaymentsRequest;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentsRequest $request)
    {
        //


        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        Payments::create([
            'user_id'=>Auth::user()->id,
            'paymentdate'=>request()->input('paymentdate')?? '',
            'paymenttype'=>request()->input('paymenttype')?? '',
            'amount'=>request()->input('amount')?? '',
            'currency'=>request()->input('currency')?? '',
            'paymentstatus'=> request()->input('paymentstatus')??'',
            'creditcardno'=> request()->input('creditcardno')??'',
            'cardtype'=>request()->input('cardtype')?? '',
            'expiration'=>request()->input('expiration')?? '',
            'security'=>request()->input('security')?? '',
            'billingaddress'=>request()->input('billingaddress')?? '',

            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payments  $payments
     * @return \Illuminate\Http\Response
     */
    public function show(Payments $payments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payments  $payments
     * @return \Illuminate\Http\Response
     */
    public function edit(Payments $payments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentsRequest  $request
     * @param  \App\Models\Payments  $payments
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentsRequest $request, Payments $payments)
    {
        //
        $payment = $payments;

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



       $payment->update([
            'user_id'=>Auth::user()->id,
            'paymentdate'=>request()->input('paymentdate')?? '',
            'paymenttype'=>request()->input('paymenttype')?? '',
            'amount'=>request()->input('amount')?? '',
            'currency'=>request()->input('currency')?? '',
            'paymentstatus'=> request()->input('paymentstatus')??'',
            'creditcardno'=> request()->input('creditcardno')??'',
            'cardtype'=>request()->input('cardtype')?? '',
            'expiration'=>request()->input('expiration')?? '',
            'security'=>request()->input('security')?? '',
            'billingaddress'=>request()->input('billingaddress')?? '',

            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payments  $payments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payments $payments)
    {
        //
    }
}
