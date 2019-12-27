<?php

namespace App\Http\Controllers\Backend;
use App\category;
use App\Http\Controllers\CategoryController;
use App\Models\Product;
//use App\Models\User;
use App\Models\Subcategory;
use App\Models\Subsubcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends AdminUserController
{
    public function index(Request $request)
    {
        if (!empty($request->search)) {
            $criteria = $request->search;
            $data = Product::where
            ('name', 'LIKE', '%' . $criteria . '%')
                ->get();
            $this->data('products', $data);
            $this->data('title', $this->setTitle('show products'));
            return view($this->pagePath . 'products.show-products', $this->data);

        } else {
            // $adminData = Admin::paginate(1);
            $products = DB::table('products')->orderBy('id', 'asc')->paginate(2);
            $this->data('products', $products);
            $this->data('title', $this->setTitle('show users'));
            return view($this->pagePath . 'products.show-products', compact('products'), $this->data);
        }
    }

    public function add(Request $request)
    {   $categories = Category::all()->pluck("name","id");
        $this->data('title', $this->setTitle('add-product'));
        if ($request->isMethod('get')) {
            return view($this->pagePath . 'products.add-products', $this->data)->with(compact('categories'));
        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                //dd('hh'),
                'name' => 'required|min:3|max:20',

                //  'product_title' => 'required|min:3|max:20|unique:admins,username',
//                'uid' => 'required',
//                'product_slug' => 'required',
//                'product_posted_by' => 'required',
                // 'upload' => 'mimes:jpg,jpeg,png,gif|max:2048'
            ]);
            $products = new Product();
            $products->name = $request->name;
            $products->category= $request->category;
            $products->subcategory= $request->subcategory;
            $products->subsubcategory= $request->subsubcategory;
            $products->price= $request->price;
            $products->description= $request->description;
            $products->phone= $request->phone;

            if ($request->hasFile('upload')) {
                $image = $request ->file('upload');
                $ext = $image->getClientOriginalExtension();
                $imageName = md5(microtime()) . '.' . $ext;
                $fileUploadPath = public_path('backend/images/products/');
                if (!$image->move($fileUploadPath, $imageName)) {
                    return redirect()->back()->with('error', 'Fail to add user');
                }
                $products->image = $imageName;
            }
            if ($products->save()) {
                return redirect()->route('show-products')->with('success', 'Product is successfully added');

            }

        }
    }

    public function details(Request $request){
        $criteria= $request->criteria;
        $products= Product::findOrFail($criteria);
        $this->data('products',$products);
        $this->data('title', $this->setTitle('Product details'));
        return view($this->pagePath . 'products.products-details', compact('products'),$this->data);
    }

    public function destroy($id)
    {
        $products = Product::findOrFail($id);
        if($this->deleteFile($id) && $products->delete()){
            return redirect()->route('products')->with('success', 'Product has been deleted');
        }
    }

    public function getSubCategoryList($id)
    {
        $subcategory_data= Subcategory::where('category_id',$id)->get();
        // $subcategory_data=DB::table('subcategories')->where('category_id',$id)->get();

        $output[]='<option>Select Subcategory</option>';

        foreach ($subcategory_data as $subcat)
        {
            $output[]='<option value='.$subcat->id.'>'.$subcat->name.'</option>';
        }
        return response()->json($output);
    }

    public function getSubsubCategoryList($id)
    {
        $subsubcategory_data= Subsubcategory::where('subcategory_id',$id)->get();
        // $subsubcategory_data=DB::table('subsubcategories')->where('subcategory_id',$id)->get();
        $output[]='<option>Select Subcategory</option>';
        foreach ($subsubcategory_data as $subsubcat)
        {
            $output[]='<option>'.$subsubcat->name.'</option>';
        }
        return response()->json($output);
    }

    public function edit($id){
        $categories = Category::all()->pluck("name","id");
        $products = Product::find($id);
        return view($this->pagePath . 'products.products-edit', compact('products','categories'),$this->data);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            // 'username' => 'required|min:3|max:20|unique:admins,username',
            //'email'=>'required|email|unique:admins,email',
        ]);
        $products = Product::findorFail($id);
        $products->name = $request->name;
        $products->category= $request->category;
        $products->subcategory= $request->subcategory;
        $products->subsubcategory= $request->subsubcategory;
        $products->price= $request->price;
        $products->description= $request->description;
        $products->phone= $request->phone;
        $products->save();
        // $adminData->update($request->all());
        return redirect()->route('show-products')->with('success','Products successfully updated');

    }
}