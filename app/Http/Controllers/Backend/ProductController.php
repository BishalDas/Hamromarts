<?php

namespace App\Http\Controllers\Backend;
use App\category;
use App\Http\Controllers\CategoryController;
use App\Models\Product;
//use App\Models\User;
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
            ('product_name', 'LIKE', '%' . $criteria . '%')
                ->get();
            $this->data('products', $data);
            $this->data('title', $this->setTitle('show users'));
            return view($this->pagePath . 'products.show-products', $this->data);

        } else {
            // $adminData = Admin::paginate(1);
            $products = DB::table('products')->orderBy('id', 'asc')->paginate(10);
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
                'product_name' => 'required|min:3|max:20',
                'product_title' => 'required|min:3|max:20|unique:admins,username',
                'uid' => 'required',
                'product_slug' => 'required',
                'product_posted_by' => 'required',
                // 'upload' => 'mimes:jpg,jpeg,png,gif|max:2048'
            ]);
            $products = new Product();
            $products->product_name = $request->product_name;
            $products->product_title = $request->product_title;
            $products->uid = $request->uid;
            $products->product_slug = $request->product_slug;
            $products->product_posted_by = $request->product_posted_by;
            /*if ($request->hasFile('upload')) {
                $image = $request ->file('upload');
                $ext = $image->getClientOriginalExtension();
                $imageName = md5(microtime()) . '.' . $ext;
                $fileUploadPath = public_path('backend/images/products/');
                if (!$image->move($fileUploadPath, $imageName)) {
                    return redirect()->back()->with('error', 'Fail to add user');
                }
                $product->image = $imageName;
            }*/
            if ($products->save()) {
                return redirect()->route('products')->with('success', 'Product is successfully added');

            }

        }
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