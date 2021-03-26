<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\ProductVarient;
use App\Models\Product;

class ProductController extends Controller
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
        return view('product.pro_create',['subcategories'=>SubCategory::all()]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product_name=$request->product_name;
        $select_subcategory=$request->select_subcategory;
        $quantity=$request->quantity;
        $unit=$request->unit;
        $mrp_price=$request->mrp_price;
        $base_price=$request->base_price;
        $pro_description=$request->pro_description;
        $destinationPath = public_path('/uploads/category/');
        $files = $request->file('proimg_file');
          
        $image = $files->getClientOriginalName();
        
        $name = time().'.'.$files->getClientOriginalExtension();
        $path = $request->file('proimg_file')->store('uploads/product_image');
         
        $productid =Product::insertGetId([
            'product_name' =>$product_name,
            'product_image'=>$path,
            'status'=>'1',
            'sub_category_id'=>$select_subcategory
        ]);
        $productvarient =ProductVarient::insert([
            'product_id' =>$productid,
            'quantity'=>$quantity,
            'unit'=>$unit,
            'base_price'=>$base_price,
            'base_mrp'=>$mrp_price,
            'description'=>$pro_description,
            'status'=>'1',
        ]);
        
        return redirect()->route('subcategory.show', ['subcategory' => $select_subcategory])->with('status', 'Product Addition was successful!');   
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::where('id',$id)->with('product_varient')->get();
       
        $subcategories=SubCategory::all();
        return view('product.pro_edit',compact('product','subcategories'));
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
   
        $product=Product::find($id);
         $product->delete();
        return redirect()->route('subcategory.show', ['subcategory' => $id])->with('status', 'Product Deletion was successful!');   
 
    }
}
