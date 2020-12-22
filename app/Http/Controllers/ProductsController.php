<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order_detail;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function addOrder($id)
    {
        $products = Product::findOrFail($id);
        $user = Auth::user();

        $order = Order::create([
            'order_id' => 2,
            'user_id'=>$user->id,
            'order_date'=>'2020/12/20',
            'order_status'=>'T',
            'shipping_address'=>$user->shipping_address
        ]);


        //return $order->shipping_address;

        $order_details = Order_detail::create([
            'order_id'=> $order->order_id,
            'order_details_id'=>2,
            'o_productcode'=> $products->productcode,
            'quantity' => 1,
            'unitprice'=> $products->price,
            'discount' => $products->discount
        ]);

        return $products->all();

        
    }
}
