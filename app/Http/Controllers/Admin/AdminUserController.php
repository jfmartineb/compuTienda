<?php
namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Users - Online Store";
        $viewData["users"] = User::all();
        return view('admin.user.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        $newUser = new User();
        $newUser->setName($request->input('name'));
        $newUser->setEmail($request->input('email'));
        $newUser->setPassword($request->input('password'));
        $newUser->setRole($request->input('role'));
        $newUser->setBalance($request->input('balance'));
        $newUser->save();

        return back();
    }

    public function delete($id)
    {
        User::destroy($id);
        return back();
    }
}