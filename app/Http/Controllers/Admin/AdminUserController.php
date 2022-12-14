<?php

namespace App\Http\Controllers\Admin;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class AdminUserController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Admin Page - Users - Online Store';
        $viewData['users'] = User::all();

        return view('admin.user.index')->with('viewData', $viewData);
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

    public function edit($id)
    {
        $viewData = [];
        $viewData['title'] = 'Admin Page - Edit Users - Online Store';
        $viewData['user'] = User::findOrFail($id);

        return view('admin.user.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->setName($request->input('name'));
        $user->setEmail($request->input('email'));
        $user->setPassword($request->input('password'));
        $user->setRole($request->input('role'));
        $user->setBalance($request->input('balance'));
        $user->save();

        return redirect()->route('admin.user.index');
    }

    public function exportDocument(Request $request)
    {
        $export = $request->input('export');
        $exportInterface = app(Export::class, ['export', $export]);
        $exportInterface->export($request);

        return back();
    }

    public function pdf()
    {
        $user = User::all();
        $data = compact('user');
        $pdf = Pdf::loadView('admin.user.pdf', $data);

        return $pdf->stream();
    }

    public function excel()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
