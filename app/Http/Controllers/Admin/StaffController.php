<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{

    public function __construct() {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $staffs = Staff::all();
        return view('admin.Staff.index', ['staffs' => $staffs]);
    }

    public function create()
    {
        return view('admin.Staff.create');
    }

    public function store(Request $request)
    {
        $request->all();
        $data = $this->staffValidation($request);
        $data['password'] = Hash::make($request->password);
        if ($request->image) {
            $data['image'] = uploadImage($request->image, "Staff", 250, 250);
        }
        $success = Staff::create($data);
        $success ? $request->session()->flash('success', 'New Staff Created !!!') : $request->session()->flash('error', 'Failed to create new staff !!!');
        return redirect()->route('admin.staff.index');
    }

    public function show(Staff $staff)
    {
        //
    }

    public function edit(Staff $staff)
    {
        return view('admin.Staff.create', ['staff' => $staff]);
    }

    public function update(Request $request, Staff $staff)
    {
        $data = $this->staffValidation($request, 'update', $staff->id);
        if ($request->image) {
            deleteImage($staff->image, "Staff");
            $data['image'] = uploadImage($request->image, "Staff", 250, 250);
        }
        $success = $staff->update($data);
        $success ? $request->session()->flash('success', 'Staff Information Updated !!!') : $request->session()->flash('error', 'Failed to update staff !!!');
        return redirect()->route('admin.staff.index');
    }

    public function destroy(Staff $staff)
    {
        if ($staff) {
            $staff_image = $staff->image;
            $success = $staff->delete();
            if ($success) {
                deleteImage($staff_image, "Staff");
                request()->session()->flash('success', 'Staff Information Deleted !!!');
            } else request()->session()->flash('error', 'Failed to delete staff !!!');
        } else request()->session()->flash('error', 'Staff Not Found !!!');
        return redirect()->route('admin.staff.index');
    }

    public function staffValidation(Request $request, $option = 'add', $id = '')
    {
        return $this->validate($request, [
            'name' => 'required|string',
            'password' => ($option == 'add' ? 'required' : 'sometimes') . '|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[@!$#%]).*$/|confirmed|min:6',
            'contact_number' => 'required|string|regex:/(?:\+977[- ])?\d{2}-?\d{7,8}/',
            'address' => 'required|string',
            'email' => 'required|email|unique:staffs,email,'.$id,
            'image' => ($option == 'add' ? 'required' : 'sometimes') . '|image|max:5000'
        ]);
    }
}
