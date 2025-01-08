<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile_edit()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $no_profile = User::where("id", "=", $user_id)->whereNull("address")->first();

        if ($no_profile) {
            $no_profile = User::where("id", "=", $user_id)->whereNull("address")->first();
            return view("setting_up_profile", compact('no_profile'));
        } else {
            $profile = User::where("id", "=", $user_id)->first();
            return view("setting_up_profile", compact('no_profile', 'profile'));
        }
    }

    public function profile_update(Request $request)
    {
        $update_item = $request->only(['name', 'postal_code', 'address', 'building']);
        User::find($request->id)->update($update_item);
        return redirect("/");
    }
}
