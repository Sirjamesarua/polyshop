<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


    //use App\Http\Controllers\ReviewsController;


class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
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
            'name'=>['required', 'string', 'max:255'],
            'price'=>'required',
            'category'=>'required',
            'description'=>'required',
            'image1'=>'required',
            'image2'=>'required',
            'image3'=>'required',
        ]);

            $product = new Product;
            $product->name=$request->input('name');
            $product->description=$request->input('description');
            $product->price=$request->input('price');

            $image1=$request->file('image1');
            $image2=$request->file('image2');
            $image3=$request->file('image3');

                //get file name with extension
                $filenameWithExt1=$image1->getClientOriginalName();
                $filenameWithExt2=$image2->getClientOriginalName();
                $filenameWithExt3=$image3->getClientOriginalName();

                //get just file name
                $filename1=pathinfo($filenameWithExt1,PATHINFO_FILENAME);
                $filename2=pathinfo($filenameWithExt2,PATHINFO_FILENAME);
                $filename3=pathinfo($filenameWithExt3,PATHINFO_FILENAME);

                //get just ext
                $extension1=$image1->getClientOriginalExtension();
                $extension2=$image2->getClientOriginalExtension();
                $extension3=$image3->getClientOriginalExtension();

                //filename to store in database
                $fileNameToStore1=$filename1.'_'.time().'.'.$extension1;
                $fileNameToStore2=$filename2.'_'.time().'.'.$extension2;
                $fileNameToStore3=$filename3.'_'.time().'.'.$extension2;

                if(preg_match('/\s/', $fileNameToStore1)){
                     $fileNameToStore1= preg_replace('/\s/', 
                        '_',$fileNameToStore1);
                }

                if(preg_match('/\s/', $fileNameToStore2)){
                     $fileNameToStore2= preg_replace('/\s/', 
                        '_',$fileNameToStore2);
                }

                if(preg_match('/\s/', $fileNameToStore3)){
                     $fileNameToStore3= preg_replace('/\s/', 
                        '_',$fileNameToStore3);
                }

                //upload image
                $path1=$image1->storeAs('public/product',$fileNameToStore1);
                $path2=$image2->storeAs('public/product',$fileNameToStore2);
                $path3=$image3->storeAs('public/product',$fileNameToStore3);

            $product->image1=$fileNameToStore1;
            $product->image2=$fileNameToStore2;
            $product->image3=$fileNameToStore3;


            $product->category=$request->input('category');
            $product->seller_id=auth()->user()->id;
            //$product->seller_id='1';

            //DELETE IMAGE IF DATA IS MISSING IN DATABASE
            if(!isset($product->category,$product->image1,$product->image2)){
                    $post_imagepath=public_path().'\storage\product\\'.$filenameWithExt1;
                    unlink($post_imagepath); 
                    $post_imagepath2=public_path().'\storage\product\\'.$filenameWithExt2;
                    unlink($post_imagepath2); 
                    $post_imagepath3=public_path().'\storage\product\\'.$filenameWithExt3;
                    unlink($post_imagepath3); 
                
            } 

            
        $product->save();

            //return 143;
            //REDIRECTING
        return redirect('/')->with('success','post created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reviews= DB::table('reviews')->where('Post_id',$id)->get();
        //$seller_id= DB::table('product')->where('Post_id',$id)->get();

        //$reviews=Reviews::find($id)->get();
        $product=Product::find($id);
        $seller_id=$product->seller_id;
        $user= DB::table('users')->where('id',$seller_id)->first();

        //RELATED PRODUCT
        $relatedproducts=Product::query()->where('name','LIKE',"%{$product->name}%")->orWhere('description','LIKE',"%{$product->description}%")->orWhere('category',$product->category)->get();
        //$relatedcatecorys=

        return view('products.show')->with('reviews',$reviews)->with('product',$product)->with('user',$user)->with('relatedproducts',$relatedproducts);

        //$product=Product::find($id);
        //return view('products.show')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$product=Product::find('$id');
        $product=DB::table('product')->where('id',$id)->first();
        return view('products.edit')->with('product',$product);
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
        
        
        $this->validate($request,[
            'name'=>['required', 'string', 'max:255'],
            'price'=>'required',
            'category'=>'required',
            'description'=>'required',
            'image1'=>'required',
            'image2'=>'required',
            'image3'=>'required',
        ]);

            $product = Product::find($id);
            $product->name=$request->input('name');
            $product->description=$request->input('description');
            $product->price=$request->input('price');

            $image1=$request->file('image1');
            $image2=$request->file('image2');
            $image3=$request->file('image3');

                //get file name with extension
                $filenameWithExt1=$image1->getClientOriginalName();
                $filenameWithExt2=$image2->getClientOriginalName();
                $filenameWithExt3=$image3->getClientOriginalName();

                //get just file name
                $filename1=pathinfo($filenameWithExt1,PATHINFO_FILENAME);
                $filename2=pathinfo($filenameWithExt2,PATHINFO_FILENAME);
                $filename3=pathinfo($filenameWithExt3,PATHINFO_FILENAME);

                //get just ext
                $extension1=$image1->getClientOriginalExtension();
                $extension2=$image2->getClientOriginalExtension();
                $extension3=$image3->getClientOriginalExtension();

                //filename to store in database
                $fileNameToStore1=$filename1.'_'.time().'.'.$extension1;
                $fileNameToStore2=$filename2.'_'.time().'.'.$extension2;
                $fileNameToStore3=$filename3.'_'.time().'.'.$extension2;

                if(preg_match('/\s/', $fileNameToStore1)){
                     $fileNameToStore1= preg_replace('/\s/', 
                        '_',$fileNameToStore1);
                }

                if(preg_match('/\s/', $fileNameToStore2)){
                     $fileNameToStore2= preg_replace('/\s/', 
                        '_',$fileNameToStore2);
                }

                if(preg_match('/\s/', $fileNameToStore3)){
                     $fileNameToStore3= preg_replace('/\s/', 
                        '_',$fileNameToStore3);
                }

                //upload image
                $path1=$image1->storeAs('public/product',$fileNameToStore1);
                $path2=$image2->storeAs('public/product',$fileNameToStore2);
                $path3=$image3->storeAs('public/product',$fileNameToStore3);

            $product->image1=$fileNameToStore1;
            $product->image2=$fileNameToStore2;
            $product->image3=$fileNameToStore3;


            $product->category=$request->input('category');
            $product->seller_id=auth()->user()->id;
            //$product->seller_id='1';

            //DELETE IMAGE IF DATA IS MISSING IN DATABASE
            if(!isset($product->category,$product->image1,$product->image2)){
                    $post_imagepath=public_path().'\storage\product\\'.$filenameWithExt1;
                    unlink($post_imagepath); 
                    $post_imagepath2=public_path().'\storage\product\\'.$filenameWithExt2;
                    unlink($post_imagepath2); 
                    $post_imagepath3=public_path().'\storage\product\\'.$filenameWithExt3;
                    unlink($post_imagepath3); 
                
            } 

            
        $product->save();

            //return 143;
            //REDIRECTING
        return redirect('/')->with('success','post created');
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
        Storage::delete('public/storage/product/'.$product->image1);
        Storage::delete('public/storage/product/'.$product->image2);
        Storage::delete('public/storage/product/'.$product->image3);
        $product->delete();

        return back();
    }
}
