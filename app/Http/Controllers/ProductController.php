<?php

namespace App\Http\Controllers;

use Auth;
use App\Product; 
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {

        $this->middleware('auth');
    }
    public function index()
    {
        $products = Product::all();
        //dd($products);

        return view('products.news', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
          'title'=>'required|min:6',
          'description'=>'required|min:6',
          'price'=>'required|min:3'
     ]);

       $slug = uniqid();

      $product = new Product;

      $photoName = time(). '.'.$request->fileupload->getClientOriginalExtension();

      $request->fileupload->move(public_path('storage/images'), $photoName);

      //$path= $request->file('fileupload')->store('images');

      $product->title = $request->title;
      $product->description = $request->description;
      $product->price = $request->price;
      $product->path = $photoName;
      $product->slug = $slug;
      $product->save();

    
      

      return redirect()->route('products.create')->with('status', 'Your product has been successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     /*
        $products = Product::whereSlug($slug)->firstorFail();

        return view('products.index', compact('products'));
    */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $product = Product::find($id);

       return view('products.edit', compact('product'));
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
         $this->validate($request, [
          'title'=>'required|min:6',
          'description'=>'required|min:6',
          'price'=>'required|min:3'
     ]);
        

         $product = Product::find($id);
         $product->title= $request->title;
         $product->price= $request->price;
         $product->description= $request->description;
         $product->path= $request->path;

         $product->save();

          return redirect('products')->with('status', 'The product has been updated successfully' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::findorFail($id)->delete();
    

         return redirect('products')->with('status', 'The product has been deleted successfully');
    }
}
