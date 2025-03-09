<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forms;
use App\Models\Products;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    //all Forms data
    public function index()
    {
        $orders = Forms::orderBy('id', 'desc')->paginate(10);
        return view('admin.pages.order.index', compact('orders'));
    }

    //view Forms data
    public function view($id)
    {
        $orders = Forms::find($id);

        //get product id
        $product_id = json_decode($orders->product_id);

        //get product details
        $products = $product_id;


        return view('admin.pages.order.view', compact('orders', 'products'));
    }

    public function profile()
    {
        $name = "Profile";
        $user = Auth::user();
        return view('admin.pages.profile', compact('name', 'user')); 
    }

        //proflile store
        public function profileStore(Request $request){
            $user = User::find(Auth::user()->id);
             
            if($request->has('password')){
                $request['password'] = bcrypt($request->password);
            }else{
                unset($request->password);
            }
            $user->update($request->all());
            // error or success redirect
            if ($user) {
                return redirect()->back()->with('success', 'Profile updated successfully');
            }
            return redirect()->back()->with('error', 'Profile not updated');
             
     
        }

    //delete Forms data
    public function delete($id)
    {
        $orders = Forms::find($id);
        $orders->delete();
        return redirect()->route('admin.order.orderHome')->with('success', 'Orders data deleted successfully!');
    }

    //settings
    public function settings()
    {
        return view('admin.pages.settings');
    }


    public function settingsStore(Request $request){
        
        unset($request['_token']);

        foreach($request->all() as $key => $value){ 
            if(empty($value)){
                continue;
            }
            update_option($key, $value);
        }
        return redirect()->back()->with('success', 'Settings updated successfully');
    }


}
