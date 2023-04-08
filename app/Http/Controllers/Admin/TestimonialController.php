<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    function __construct()
    {
        $this->middleware('role_or_permission:Testimonial access|Testimonial create|Testimonial edit|Testimonial delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Testimonial create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Testimonial edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Testimonial delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $test = Testimonial::all();
        return view('testimonial.index',['tests'=> $test]);
    }

    public function create()
    {
        return view('testimonial.new');
    }
    
    public function store(Request $request)
    {   
        $validated = $request->validate([
            'message' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'testimg' => 'required',
        ]);

        $data = $request->all();
        if($request->file('testimg')){
          $file= $request->file('testimg');
          $filename= time().'_'.$file->getClientOriginalName();
          $file-> move(public_path('/Testimonial_Images'), $filename);
          $data['testimg']= $filename;
        }
        
        $test = Testimonial::create($data);
        return redirect()->back()->withSuccess('Testimonial Created !!!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $test = Testimonial::find($id);
        return view('testimonial.edit', compact('test'));
    }

    public function update(Request $request, $id)
    {
        $test = Testimonial::find($id);
        if($request->file('testimg')){
        $file= $request->file('testimg');
        $filename= time().'_'.$file->getClientOriginalName();
        $file-> move(public_path('Testimonial_Images'), $filename);
        $test['testimg']= $filename;
        }
        
        $test->message = $request->message;
        $test->name = $request->name;
        $test->designation = $request->designation;
        $test->save();
        return redirect()->back()->withSuccess('Testimonial updated !!!');
    }

  
    public function destroy($id)
    {
        $test=Testimonial::find($id);
        $test->delete();
        return redirect()->back()->withSuccess('Testimonial deleted !!!');
    }
}
