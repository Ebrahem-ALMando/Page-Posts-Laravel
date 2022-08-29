<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categorycontroller extends Controller
{

    public function index()
    {
        $category=category::all();
         return  view('Category.index',[
             'categorys'=>$category
             ]);
    }


    public function create()
    {
          return view('Category.create');
    }


    public function store(Request $request)
    {
//      return $request->post();
    $request->validate([
       'name'=>'required|min:3',
        'slug'=>'required|min:3'

    ]);
    category::create($request->post());
    return  redirect()->route('Category.index')->with('success','Added Success');
    }

    public function show(category $category)
    {
        return view('Posts.index',[
            'posts'=>$category->posts
        ]);    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {

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
