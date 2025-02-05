<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App; 

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories=Category::get();
        //dd($categories);
        return view('backoffice.profiles.admin.manage-products.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $language)
    {
        return view('backoffice.profiles.admin.manage-products.category-create' , compact('language'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $language)
    {
        //dd($request->id);
       $category=$category=Category::where('id',$request->id)->first();
       //dd($category);
        return view('backoffice.profiles.admin.manage-products.category-edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $language)
    {
        //dd($request->all());
         $category=Category::where('id',$request->id)->first();
         // dd($request->id);
      $category->update($request->all());
       return redirect()->route('admin-manage-categories', App::getLocale())->withSuccess('updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $language)
    {
       // dd($request->all());
         // dd($request->id);
        $category=Category::where('id',$request->id)->first();
       $category->delete();
       return redirect()->route('admin-manage-categories', App::getLocale())->withSuccess('deleted');
    }
}
