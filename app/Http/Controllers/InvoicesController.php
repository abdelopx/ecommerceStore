<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use Illuminate\Support\Facades\Mail;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user,$products)
    {
        $customer = new Buyer([
            'name'          => $user->name,
            'custom_fields' => [
                'email' => $user->email,
                'shipping address'=> $user->shipping_address
            ],
        ]);

        $seller = new Party([
            'name'          => 'My Store PC',
            'phone'         => '05-22-55-77-88',
            'address'       => 'Casablanca, Morocco',
            'custom_fields' => [
                'note'        => 'A pc store that sells computers / computer parts',
            ],
        ]);

        $item = (new InvoiceItem())->title($products->description)->pricePerUnit($products->price);
        $invoice = Invoice::make()
            ->buyer($customer)
            ->discountByPercent($products->discount)
            ->taxRate(20)
            ->shipping(0.00)
            ->addItem($item)
            ->save('public');

            $to_name = $user->name;
            $to_email = $user->email;
            $data = array('name'=>$user->name, "body" => " Dear Customer, We hope that your are doing well, attached you will find your invoice for the requested product.
             Thank you !");
            Mail::send('emails', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Your invoice')->attach('invoice_Your invoice_00001.pdf');
            $message->from('mystorepcreplier@gmail.com','MyStorePc');
            });
            
        return view('Products.successOrder', compact('user'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
