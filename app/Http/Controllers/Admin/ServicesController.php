<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    function __construct()
    {
        $this->middleware('role_or_permission:Service access|Service delete', ['only' => ['index']]);
        $this->middleware('role_or_permission:Service delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $users = Service::orderBy('id', 'DESC')->paginate(5);
        return view('setting.services.index',compact('users'));
    }

    public function destroy($id)
    {
        $user=Service::find($id);
        $user->delete();
        return redirect()->back()->withSuccess('Services Deleted !!');
    }
}

