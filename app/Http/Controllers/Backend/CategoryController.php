<?php

namespace App\Http\Controllers\Backend;

use App\category;
use http\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Categorycontroller extends BackendController
{
    public function show(Request $request)
    {
        if (!empty($request->search)){
            $criteria=$request->search;
            $data= DB::table('categories')->where('name','LIKE', '%'.$criteria.'%')->paginate(1);
            $this->data('categories',$data);
            $this->data('title', $this->setTitle('show-categories'));
            return view($this->pagePath . 'Categories.show-categories', $this->data);

        }

        else{
            // $adminData = Admin::paginate(1);
            $categories= DB::table('categories')->orderBy('id','asc')->paginate(1);
            $this->data('categories',$categories);
            $this->data('title', $this->setTitle('show categories'));
            return view($this->pagePath . 'Categories.show-categories', compact('categories'),$this->data);
        }

    }

    public function add(Request $request)
    {
        $this->data('title',$this->setTitle('add categories'));
        if ($request->isMethod('get')) {
            return view($this->pagePath . 'Categories.add-category',$this->data);
        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required|min:3|max:20',


            ]);
            $cat = new category();
            $cat->name = $request->name;


            /* if ($request->hasFile('upload')) {
                 $image = $request ->file('upload');
                 $ext = $image->getClientOriginalExtension();
                 $imageName = md5(microtime()) . '.' . $ext;
                 $fileUploadPath = public_path('backend/images/users/');
                 if (!$image->move($fileUploadPath, $imageName)) {
                     return redirect()->back()->with('error', 'Fail to add user');
                 }
                 $admin->image = $imageName;
             }*/
            if ($cat->save()) {
                return redirect()->route('show-categories')->with('success', 'Category is successfully added');

            }

        }
    }

    public function delete($id)
    {
        $cat = category::findOrFail($id);
        if($cat->delete()){
            return redirect()->route('show-category')->with('success', 'category has been deleted');
        }
    }

    public function status(Request $request)
    {
        if($request->isMethod('get')){
            return redirect()->back();
        }
        if($request->isMethod('post')){
            $id=$request->criteria;
            $cat=category::findOrFail($id);
            if(isset($_POST['active'])){
                $cat->status=0;
                $message='Status has been inactivated';

            }
            if(isset($_POST['inactive'])){
                $cat->status=1;
                $message='Status has been activated';

            }
            if($cat->update()){
                return redirect()->back()->with('success', $message);
            }
        }
    }

    public function edit()
    {
        echo "edit";
    }
}
