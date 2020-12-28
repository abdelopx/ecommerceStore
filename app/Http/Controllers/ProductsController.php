<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order_detail;
use App\Models\Order;
use App\Models\Invoice;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Controllers\InvoicesController;


class ProductsController extends Controller
{

    protected $InvoicesController;
    public function __construct(InvoicesController $InvoicesController)
    {
        $this->InvoicesController = $InvoicesController;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $products = Product::all();
        return view('Products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       $this->validate($request,[
            'productcode'=>'required',
            'description' =>'required',
            'indate' =>'required',
            'quantityonhand' =>'required',
            'price' =>'required',
            'discount' =>'required',
            'supplier'=>'required'
            ]);
        
    
        Product::create($request->all());
        return redirect('/products/create');
        
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
        $products = Product::findOrFail($id);
        return view('Products.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('Products.edit', compact('products'));
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
        $products = Product::findOrFail($id);
        $products->update($request->all());

        return redirect('/products');
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
        $product = Product::findOrFail($id);
        $result = $product->delete();
        if ($result == 1) {
            
            echo "The product with the code ". $product->productcode ." has been successfully deleted !";
        }
        else{
            echo "An error occured... Please try later.";
        }
    }
    public function addOrder($id) {
    
        $products = Product::findOrFail($id);
        $user = Auth::user();
        
        if ($products->quantityonhand == 0){
            return view('Products.errorStock');
        }
        else {
        DB::update('update products set quantityonhand = ? where productcode = ?', [$products->quantityonhand-1, $products->productcode]);
        }

        $order = Order::create([
            'user_id'=>$user->id,
            'order_date'=>Carbon::today()->toDateString(),
            'order_status'=>'T',
            'shipping_address'=>'Main gate'
        ]);
        //return $order->shipping_address;

        $order_details = Order_detail::create([
            'order_id'=> $order->order_id,
            'o_productcode'=> $products->productcode,
            'quantity' => 1,
            'unitprice'=> $products->price,
            'discount' => $products->discount
        ]);
            $response = $this->InvoicesController->index($user,$products);
            DB::insert('insert into invoices (invoicenumber, order_id, order_details_id, inv_format,productcode,date,quantity,unitprice,discount_rate,price) 
            values (?,?,?,?,?,?,?,?,?,?)', [$order->order_id,
            $order->order_id,
            $order_details->order_details_id,
            'PDF',
            $products->productcode,
            $order->order_date,
            1,
            $products->price,
            $products->discount,
            $products->price
            ]);
            return $response;
            //return view('Products.successOrder', compact('user','response'));
    }

    public function allProducts() {

        $products = DB::table('products')->paginate(8);
        return view('Products.list', compact('products'));

    }

    public function singleProduct($id) {

        $products = Product::findOrFail($id);
        $productsAll = DB::table('products')->where('description', '!=' , $products->description)->paginate(4);
        
        
        return view('Products.singleProduct',compact('products','productsAll'));

    }

    public function sendemail() {
    $to_name = 'Abdel';
    $to_email = 'abdoukop@gmail.com';
    $data = array('name'=>"Abdellah berni", "body" => "Test mail");
    Mail::send('emails', $data, function($message) use ($to_name, $to_email) {
    $message->to($to_email, $to_name)->subject('Artisans Web Testing Mail');
    $message->from('mystorepcreplier@gmail.com','MyStorePc');
    });
}
}