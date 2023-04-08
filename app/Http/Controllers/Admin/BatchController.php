<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Batch_Info;
use DB;



class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batch= Batch_Info::orderBy('id', 'DESC')->paginate(6);
        return view('batch.index',compact('batch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('batch.batch');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
                'batch_name' => 'required',
                'batch_detail' => 'required',
                'from_batch' => 'required',
                'to_batch' => 'required',
                'status' => 'required',
                ]);
            
            $data = $request->all();

            $Post = Batch_Info::create($data);

            return redirect()->back()->withSuccess('Batch Information created !!!');
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
        $batch = DB::table('batch_info')->where('id',$id)->first();

        return view('batch.edit',['batch' => $batch]);
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
        $request->validate([
            'batch_name' => 'required',
            'batch_detail' => 'required',
            'from_batch' => 'required',
            'to_batch' => 'required',
            'status' => 'required',
            ]);

        $batch = Batch_Info::find($id);

        $batch->batch_name = $request->batch_name;
        $batch->batch_detail = $request->batch_detail;
        $batch->from_batch = $request->from_batch;
        $batch->to_batch = $request->to_batch;
        $batch->status = $request->status;
        $batch->save();

        return redirect()->back()->withSuccess('Batch Information updated !!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $batch=Batch_Info::find($id);
        $batch->delete();
        return redirect()->back()->withSuccess('Batch Information has been deleted !!!');
    }

    public function reg()
    {
        $regsiter=DB::Table('frontusers')->get();
        // dd($regsiter);
        return view('batch.reg',['regsiter' => $regsiter]);
    }
}
