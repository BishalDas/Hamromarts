<?php

namespace App\Http\Controllers\Backend;
use App\subsubcategory;
use http\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class subsubcontroller extends BackendController
{
    public function index(Request $request)
    {
        if (!empty($request->search)){
            $criteria=$request->search;
            $data= subsubcategory::where
            ('sname','LIKE', '%'.$criteria.'%')

                ->paginate(1);
            $this->data('subdata',$data);
            $this->data('title', $this->setTitle('show subsubcategory'));
            return view($this->pagePath . 'subsubcat.showsubsub', $this->data);

        }

        else{
            // $adminData = Admin::paginate(1);
            $subdata= DB::table('subsubcategories')->orderBy('id','asc')->paginate(3);
            $this->data('subdata',$subdata);
            $this->data('title', $this->setTitle('show subsubcategory'));
            return view($this->pagePath . 'subsubcat.showsubsub', compact('subdata'),$this->data);
        }


    }

    public function add(Request $request)
    {
        $this->data('title',$this->setTitle('add subsubcategory'));
        if ($request->isMethod('get')) {
            return view($this->pagePath . 'subsubcat.addsubsub',$this->data);
        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'sname' => 'required|min:3|max:20',

            ]);
            $admin = new subsubcategory();
            $admin->sname = $request->sname;


            /*  if ($request->hasFile('upload')) {
                  $image = $request ->file('upload');
                  $ext = $image->getClientOriginalExtension();
                  $imageName = md5(microtime()) . '.' . $ext;
                  $fileUploadPath = public_path('backend/images/users/');
                  if (!$image->move($fileUploadPath, $imageName)) {
                      return redirect()->back()->with('error', 'Fail to add user');
                  }
                  $admin->image = $imageName;
              }*/
            if ($admin->save()) {
                return redirect()->route('show-subsub')->with('success', 'Sub Sub Category is successfully added');

            }

        }

    }

    public function delete($id)
    {
        $admin = subsubcategory::findOrFail($id);
        if($admin->delete()){
            return redirect()->route('show-subsub')->with('success', 'Subsub category has been deleted');
        }
    }
}
