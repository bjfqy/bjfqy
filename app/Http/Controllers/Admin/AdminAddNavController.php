<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Nav;

class AdminAddNavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        //return $request;
        $nav = new Nav;
        $nav->type= $request->type;

        $nav->nav_name = $request->nav_name;
        //判断是否为顶级目录
        if (is_null($request->pid)) {
            # code...
            $request->pid = 0;
        }

        if (is_null($request->link)) {
            # code...
            $request->link = 0;
        }
        $nav->link = $request->link;
        $nav->pid =$request->pid;
        $nav->save();
        
        return '添加成功';       
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
        $nav = new Nav::find

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
