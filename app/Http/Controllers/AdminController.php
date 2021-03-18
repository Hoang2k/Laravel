<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function index(){

        $products=product::paginate(15);
        return view('admin.index',[
            'product'=>$products
        ]);
    }
    public function getProductById($id ){
        $product=product::find($id);
        dd($product);
         return response()->json($product);

    }
    public function addProduct(Request $request){
        $product =new product();
        $product->name=$request->input('name');
        $product->price=$request->input('price');
      //  $product->images=$request->input('image');
         $r=$product->save();
         if(!$r)return back()->withErrors('error','Thêm Sản Phẩm Thất Bại');
         return back()->with('success','Thêm sản phẩm thành công');
    }
    public function deleteProduct($id){
         $product=product::find($id);
          // dd($product);
         $del=$product->delete();
          if($del) return back()->with('success','Xóa sản phẩm Thành Công');
    }

    public function getSearchProduct(Request $request){
        $product=product::where('name','like','%'.$request->search.'%')->orWhere('price',$request->search)->paginate(10);
     //   dd($product);
        return view('admin.search',[
            'product'=>$product
            
        ]);
         
        
    }

   
}
