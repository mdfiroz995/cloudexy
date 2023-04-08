<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customisation;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
// use App\Traits\UploadImage;


class CustomisationController extends Controller
{
    // use UploadImage;

    function __construct()
    {
        $this->middleware('role_or_permission:Customisation access|Customisation edit', ['only' => ['index']]);
        $this->middleware('role_or_permission:Customisation edit', ['only' => ['update']]);
    }

    public function index()
    {
        return view('setting.customisation.index');
    }

    public function update(Request $request, $id)
        {
            $validated = $request->validate([
                'phone' => 'nullable| min:12| max:14',
            ]);

            $theme = Customisation::find($id);

            if($request->file('headerlogo')){
                $file= $request->file('headerlogo');
                $filename= time().'_'.$file->getClientOriginalName();
                $file-> move(public_path('/logo'), $filename);
                $theme['headerlogo']= $filename;
              }

              if($request->file('footerlogo')){
                $file= $request->file('footerlogo');
                $filename= time().'_'.$file->getClientOriginalName();
                $file-> move(public_path('/logo'), $filename);
                $theme['footerlogo']= $filename;
              }

              if($request->file('adminlogo')){
                $file= $request->file('adminlogo');
                $filename= time().'_'.$file->getClientOriginalName();
                $file-> move(public_path('/logo'), $filename);
                $theme['adminlogo']= $filename;
              }

            $theme->email = $request->email;
            $theme->address = $request->address;
            $theme->copyright = $request->copyright;
            $theme->phoneno = $request->phoneno;
            $theme->facebook = $request->facebook;
            $theme->linkedin = $request->linkedin;
            $theme->instagram = $request->instagram;
            $theme->youtube = $request->youtube;
            $theme->creative_score = $request->creative_score;
            $theme->trackable_score = $request->trackable_score;
            $theme->guaranteed_score = $request->guaranteed_score;
            $theme->save();
            return redirect()->back()->withSuccess('Customisation Updated !!!');
    }


}
