<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "hello";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "hello elegankco przeszlismy";
        return view('pages.contact');
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
    /**
     * The function getting form posted (POST) and showing this to us ;) 
     * Its be a little test and checking method to understand something 
     * @param Request $request
     * @return type the function getting form (post) and showing on the site
     */
    
    public function to_test_function (Request $request) {
        
        if(Input::get('first_name')!=null && Input::get("last_name")!=null){
       $input_first_name= Input::get("first_name");
       $input_last_name = Input::get("last_name");
       
       echo "Witamy na naszej stronie " .$input_first_name; 
       echo "<br> Dawno nie gościliśmy nikogo o takim nazwisku :".$input_last_name;
        }
       echo "<br>connect from ->page.contact ". "i id ";
        return view('pages.contact', compact('input_last_name', 'input_first_name'));
    }
}
