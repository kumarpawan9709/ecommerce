<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Http\Requests\CategoryRequest;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('category.list',['categories'=>Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $cat_name=$request->cat_name;
        $destinationPath = public_path('/uploads/category/');
        $files = $request->file('img_file');
         
        $image = $files->getClientOriginalName();
        
        $name = time().'.'.$files->getClientOriginalExtension();
        $path = $request->file('img_file')->store('uploads/cat_image');
         
        $category = Category::updateOrCreate([
            'name' =>$cat_name,
            'img_path'=>$path,
            'status'=>'1'
        ]);
            
        return redirect('admin/category')->with('status', 'Category Addition was successful!');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {    
         $subcatdetail=Category::find($category->id)->subcategories;
          
        
        return view('subcategory.show',compact('subcatdetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    { 
       return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    { 
        $cat_name=$request->cat_name;
        $destinationPath = public_path('/uploads/category/');
        $files = $request->file('img_file');
         
        $image = $files->getClientOriginalName();
        
        $name = time().'.'.$files->getClientOriginalExtension();
        $path = $request->file('img_file')->store('uploads/cat_image');
        $category = Category::find($id)->update([
            'name' =>$cat_name,
            'img_path'=>$path,
            'status'=>'1'
        ]);
       
        
        return redirect('category')->with('status','Updation was successful.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
         $category->delete();
        return redirect('category')->with('status', 'Category was deleted!');
     }
}
