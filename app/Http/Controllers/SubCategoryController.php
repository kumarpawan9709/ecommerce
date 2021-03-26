<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('subcategory.sub_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        return view('subcategory.sub_create',['categories'=>Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcat_name=$request->subcat_name;
        $select_category=$request->select_category;
        $destinationPath = public_path('/uploads/category/');
        $files = $request->file('subimg_file');
          
        $image = $files->getClientOriginalName();
        
        $name = time().'.'.$files->getClientOriginalExtension();
        $path = $request->file('subimg_file')->store('uploads/subcat_image');
         
        $subcategory =SubCategory::updateOrCreate([
            'sub_name' =>$subcat_name,
            'img_path'=>$path,
            'status'=>'1',
            'category_id'=>$select_category
        ]);
        
        return redirect()->route('category.show', ['category' => $select_category])->with('status', 'SubCategory Addition was successful!');
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          
        $products=SubCategory::find($id)->products;
         
        return view('product.show',['products'=>$products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory=SubCategory::find($id);
        // dd($subcategory);
        return view('subcategory.subedit',compact('subcategory'));
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
        $subcat_name=$request->subcat_name;
        $select_category=$request->select_category;
        $destinationPath = public_path('/uploads/category/');
        $files = $request->file('subimg_file');
          
        $image = $files->getClientOriginalName();
        
        $name = time().'.'.$files->getClientOriginalExtension();
        $path = $request->file('subimg_file')->store('uploads/subcat_image');
        $subcategory = SubCategory::find($id)->update([
            'sub_name' =>$subcat_name,
            'img_path'=>$path,
            'status'=>'1',
            'category_id'=>$select_category
        ]);
         
        
        return redirect()->route('category.show', ['category' => $select_category])->with('status', 'SubCategory Updation was successful!');
       
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
        $subcategory=SubCategory::find($id);
        $subcategory->delete();
        return redirect()->route('category.show', ['category' => $subcategory->category_id])->with('status', 'SubCategory deletion was successful!');
        
    }
}
