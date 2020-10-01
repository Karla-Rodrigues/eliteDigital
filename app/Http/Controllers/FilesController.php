<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Files;
use DB;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = Files::orderBy('id', 'desc')->paginate(5);
        return view('files')->with('files', $files);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $files = Files::find($id);
        return view('fileDisplay')->with('files', $files);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
