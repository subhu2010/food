<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $users = User::with('userImages')->get();
        return view('admin.Customer.index', ['users' => $users]);
    }


    public function create()
    {
        abort(403);
    }


    public function store(Request $request)
    {
        abort(403);
    }


    public function show(User $customer)
    {
        return $customer;
    }


    public function edit(User $user)
    {
        abort(403);
    }

    public function update(Request $request, User $user)
    {
        abort(403);
    }


    public function destroy(User $customer)
    {
        $customer = User::with('userImages')->findOrFail($customer->id);
        if ($customer) {
            $user_images = $customer->userImages;
            $success = $customer->delete();
            if ($success) {
                if ($user_images != null) {
                    foreach ($user_images as $img) {
                        deleteImage($img->image_name, "User");
                    }
                }
                request()->session()->flash('error', "Customer Deleted Successfully !!!");
            } else request()->session()->flash('error', "Customer Failed To Delete !!!");
        } else request()->session()->flash('error', "Customer Not Found !!!");
        return redirect()->route('admin.customer.index');
    }
}
