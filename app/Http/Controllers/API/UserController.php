<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    public function store(Request $request)
    {
        abort(404);
    }

    public function show(User $user)
    {
        return $user;
    }

    public function edit(User $user)
    {
        return $user;
    }

    public function update(Request $request, User $user)
    {
        $data = $this->userValidation($request, $user->id);
        $success = $user->update($data);
        if ($success) {
            if ($request->profile_photo) {
                UserImage::create([
                    'image_name' => uploadImage($request->profile_photo, "User", 350, 350),
                    'image_type' => 'cover',
                    'user_id' => $user->id
                ]);
            }
            if ($request->cover_photo) {
                UserImage::create([
                    'image_name' => uploadImage($request->cover_photo, "User", 350, 350),
                    'image_type' => 'cover',
                    'user_id' => $user->id
                ]);
            }
            return $user;
        } else false;
    }

    public function destroy(User $user)
    {
        abort(404);
    }

    public function userValidation(Request $request, $id = '')
    {
        // TODO: Profile and Cover photo use on one to manu table
        return $this->validate($request, [
            'name' => 'sometimes|nullable|string|max:50',
            'contact_number' => 'required|string|regex:/(?:\+977[- ])?\d{2}-?\d{7,8}/',
            'email' => 'sometimes|email|unique:users,email,' . $id,
            'address' => 'sometimes|nullable|string|max:191',
            'profile_photo' => 'sometimes|nullable|image|max:5000',
            'cover_photo' => 'sometimes|nullable|image|max:5000',
            'bio' => 'sometimes|nullable|string',
        ]);
    }
}
