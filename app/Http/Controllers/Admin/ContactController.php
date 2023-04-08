<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class ContactController extends Controller
{

    function __construct()
    {
        $this->middleware('role_or_permission:Contact access|Contact delete', ['only' => ['index']]);
        $this->middleware('role_or_permission:Contact delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $user= Contact::all();
        return view('setting.contact.index',['users'=>$user]);
    }

    public function destroy($id)
    {
        $user=Contact::find($id);
        $user->delete();
        return redirect()->back()->withSuccess('Contact Deleted !!');
    }
}
