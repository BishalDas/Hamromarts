<?php

namespace App\Http\Controllers\Backend;

use App\Models\Admin;
use App\Models\User;
use http\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminUserController extends BackendController
{
    public function index(Request $request)
    {
        if (!empty($request->search)){
            $criteria=$request->search;
            $data= Admin::where
            ('name','LIKE', '%'.$criteria.'%')
                ->orWhere('username','LIKE','%'.$criteria.'%')
                ->orWhere('email','LIKE','%'.$criteria.'%')
                ->paginate(1);
          $this->data('adminData',$data);
            $this->data('title', $this->setTitle('show users'));
           return view($this->pagePath . 'users.show-users', $this->data);

        }

        else{
            // $adminData = Admin::paginate(1);
            $adminData= DB::table('admins')->orderBy('id','asc')->paginate(1);
            $this->data('adminData',$adminData);
            $this->data('title', $this->setTitle('show users'));
            return view($this->pagePath . 'users.show-users', compact('adminData'),$this->data);
        }


    }

    public function add(Request $request)
    {
        $this->data('title',$this->setTitle('add users'));
        if ($request->isMethod('get')) {
            return view($this->pagePath . 'users.add-users',$this->data);
        }

        if ($request->isMethod('post')) {
        $this->validate($request, [
                'name' => 'required|min:3|max:20',
                'username' => 'required|min:3|max:20|unique:admins,username',
                'email'=>'required|email|unique:admins,email',
                'password'=> 'required',
                'password_confirmation' => 'required|same:password',
               'upload' => 'mimes:jpg,jpeg,png,gif|max:2048'
            ]);
            $admin = new Admin();
            $admin->name = $request->name;
            $admin->username = $request->username;
            $admin->email = $request->email;
            $admin->password = bcrypt($request->password);

            if ($request->hasFile('upload')) {
                $image = $request ->file('upload');
                $ext = $image->getClientOriginalExtension();
                $imageName = md5(microtime()) . '.' . $ext;
                $fileUploadPath = public_path('backend/images/users/');
                if (!$image->move($fileUploadPath, $imageName)) {
                    return redirect()->back()->with('error', 'Fail to add user');
                }
                $admin->image = $imageName;
            }
            if ($admin->save()) {
                return redirect()->route('admin-users')->with('success', 'User is successfully added');

            }

        }

    }

    public function deleteFile($id){
        $admin=Admin::findOrFail($id);
        $imageName=$admin->image;
        $filePath=public_path('backend/images/users/'.$imageName);
        if(file_exists($filePath)&& is_file($filePath)){
            return unlink($filePath);
        }
        return true;
    }


    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        if($this->deleteFile($id) && $admin->delete()){
            return redirect()->route('admin-users')->with('success', 'User has been deleted');
        }
    }
    public function search(Request $request){
        dd('test');
        $criteria=$request->criteria;
        $data= Admin::where
        ('name','LIKE', '%'.$criteria.'%')
            ->orWhere('username','LIKE','%'.$criteria.'%')
            ->orWhere('email','LIKE','%'.$criteria.'%')
            ->get();
        $output='<ul class="list-group">';
        foreach ($data as $admin){
            $output.="<a href='".route('users-details/').'/'.$admin->id."'><li class='list-group-item'>
               $admin->name</li>
                        </a>";
        }
        $output.='<ul>';
        echo $output;
    }

    public function details(Request $request){
        $criteria= $request->criteria;
        $adminData= Admin::findOrFail($criteria);
        $this->data('adminData',$adminData);
        $this->data('title', $this->setTitle('show users'));
        return view($this->pagePath . 'users.users-details', compact('adminData'),$this->data);
    }

    public function status(Request $request){
        if($request->isMethod('get')){
            return redirect()->back();
        }
        if($request->isMethod('post')){
            $id=$request->criteria;
            $admin=Admin::findOrFail($id);
            if(isset($_POST['active'])){
                $admin->status=0;
                $message='Status has been inactivated';

            }
            if(isset($_POST['inactive'])){
                $admin->status=1;
                $message='Status has been activated';

            }
            if($admin->update()){
                return redirect()->back()->with('success', $message);
            }
        }


    }
    public function user_type(Request $request){
        $id=$request->criteria;
        $admin=Admin::findOrFail($id);
        if(isset($_POST['super-admin'])){
            $admin->admin_type='admin';
            $message='User type changed into admin';
        }
        if(isset($_POST['admin'])){
            $admin->admin_type='super-admin';
            $message='User type changed into Super-admin';
        }
        if($admin->update()){
            return redirect()->back()->with('success', $message);
        }

    }

    public function edit($id){
        $adminData = Admin::find($id);
        return view($this->pagePath . 'users.admin-edit', compact('adminData'),$this->data);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            'username' => 'required|min:3|max:20|unique:admins,username',
            'email'=>'required|email|unique:admins,email',
        ]);
        $adminData = Admin::findorFail($id);
        $adminData->name = $request->input('name');
        $adminData->username = $request->input('username');
        $adminData->email = $request->input('email');
        $adminData->save();
       // $adminData->update($request->all());
        return redirect()->route('admin-users')->with('success','User successfully updated');

    }

}



