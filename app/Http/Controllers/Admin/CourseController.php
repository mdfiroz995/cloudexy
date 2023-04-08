<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Auth;
use DB;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('this is way of ');
        $course= Course::orderBy('id', 'DESC')->paginate(6);
        // dd($course);
        return view('course.index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('course.add_course');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'c_img' => 'required',
            'c_name' => 'required',
            'c_detail' => 'required',
            'c_price' => 'required',
            'c_status' => 'required',

            ]);
    
            $data = $request->all();

            if($request->file('c_img')){
              $file= $request->file('c_img');
              $filename= time().'_'.$file->getClientOriginalName();
              $file-> move(public_path('/courseimages'), $filename);
              $data['c_img']= $filename;
            }
            
            $data['created_by'] = Auth::user()->id;
            $Post = Course::create($data);

            return redirect()->back()->withSuccess('Course created !!!');
        }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = DB::table('courses')->where('id',$id)->first();

        return view('course.edit',['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            'c_img' => 'required',
            'c_name' => 'required',
            'c_detail' => 'required',
            'c_price' => 'required',
            'c_status' => 'required',
            ]);
        // dd($request);
        $course = Course::find($id);
          if($request->file('c_img')){
            $file= $request->file('c_img');
            $filename= time().'_'.$file->getClientOriginalName();
            $file-> move(public_path('courseimages'), $filename);
            $post['c_img']= $filename;
        }
        
        $course->c_name = $request->c_name;
        $course->c_detail = $request->c_detail;
        $course->c_price = $request->c_price;
        $course->c_status = $request->c_status;
        $course->save();

        return redirect()->back()->withSuccess('Post updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $test=Course::find($id);
        $test->delete();
        return redirect()->back()->withSuccess('Course has been deleted !!!');
    }
}
