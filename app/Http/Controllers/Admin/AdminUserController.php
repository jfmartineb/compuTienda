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
}