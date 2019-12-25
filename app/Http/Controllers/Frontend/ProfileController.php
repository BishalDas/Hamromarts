<?php

namespace App\Http\Controllers\Frontend;

use App\category;
use App\Http\Controllers\Auth\AuthController;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProfileController extends FrontendController
{
    public function index(){
        return view($this->pagePath . 'user_dashboard.user_dashboard', $this->data);
    }

    public function myprofile(){
        return view($this->pagePath .'user_dashboard.profile',$this->data);
    }

    public function myprofiledetail(){
        return view($this->pagePath .'user_dashboard.details',$this->data);
    }

    public function mydetail(){
        return view($this->pagePath .'user_dashboard.details',$this->data);
    }


   /* public function changepassword(){
        return view($this->pagePath .'user_dashboard.change_password',$this->data);
    }*/

    public function logout(Request $request){
        AuthController::guard('web')->logout();
        return redirect()->intended(route('index'));
    }

    public function myproduct(Request $request){
        $products = Product::get();
        $this->data('title',$this->setTitle('my Product'));
        return view($this->pagePath .'user_dashboard.myproduct',$this->data)->with(compact(['products']));
    }
    /*public function create()
    {
        $categories = Category::all()->pluck("cat_name","id"); // or Category::all();
        $this->data('title',$this->setTitle('ADD Product'));
        return view($this->pagePath . 'user_dashboard.user_dashboard', $this->data)->with(compact('categories'));
        //return view('product.create', compact('categories'));
    }*/

   /* public function category()
    {
        $categories = DB::table("categories")->pluck("cat_name","id");
        return view('frontend.pages.user_dashboard.add-product',compact('categories'));
    }*/
    public function getcategory(Request $request){
        $categories = Category::all()->pluck("name","id");
        $this->data('title',$this->setTitle('add product'));
        if ($request->isMethod('get')) {
            return view($this->pagePath . 'user_dashboard.add-product',$this->data)->with(compact('categories'));
        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'product_name' => 'required',
                //'category' => 'required',
                //'price' => 'required',
                //'phone'=> 'required'
            ]);
            /*$product = new Product();
            $product->product_name = $request->product_name;
            $product->category = $request->category;
            $product->subcategory= $request->subcategory;
            $product->subsubcategory= $request->subsubcategory;
            $product->price= $request->price;
            $product->description= $request->description;
            $product->phone= $request->phone;*/

            Product::create($request->all());
            return redirect()->route('user_dashboard');
        }
    }


    public function getSubCategoryList($id)
    {
        $subcategory_data=DB::table('subcategories')->where('category_id',$id)->get();

        $output[]='<option>Select Subcategory</option>';

        foreach ($subcategory_data as $subcat)
        {
            $output[]='<option value='.$subcat->id.'>'.$subcat->name.'</option>';
        }
        return response()->json($output);
    }

    public function getSubsubCategoryList($id)
    {

        $subsubcategory_data=DB::table('subsubcategories')->where('subcategory_id',$id)->get();
        $output[]='<option>Select Subcategory</option>';
        foreach ($subsubcategory_data as $subsubcat)
        {
            $output[]='<option>'.$subsubcat->name.'</option>';
        }

        return response()->json($output);
    }

}
