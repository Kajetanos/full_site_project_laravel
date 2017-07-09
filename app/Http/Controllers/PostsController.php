<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Country;
use App\Post;
use App\User;
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
//        echo "hello elegankco przeszlismy";
//        return view('pages.contact');
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
       $title= Input::get("first_name");
       $content = Input::get("last_name");
       $to_save_records = \App\Post::updateOrCreate(['title'=>$title] , 
               [
                   'title'=>$title,
                   'content'=> $content,
               ]);
//               var_dump($to_save_records);
        }
       echo "<br>connect from ->page.contact ". "i id ";
        return view('pages.contact', compact('title', 'content'));
    }
    /**
     * Funkcja otrzymuje z requesta zmienne i po ich indeksie szuka według id odpowiedniego rekordu. 
     * Pierwszy Input jest do Modelu POst 
     * Drugi Input jest do modelu User
     * @param Request $request
     * @return type
     */
    public function find_by_id (Request $request ) {
         $id = Input::get('id');
         $post = \App\Post::where('id',$id)->orderBy('id', 'desc')->take(1)->get();
         $id_user = Input::get('user_with_post');
         $user = User::where('id', $id_user)->orderBy('id')->take(1)->get();
//            $user_many_post = User::find(1);
//            foreach($user->posts as $post_user)
//            {
//                echo $post_user->title."<br>";
//            }
         return view('pages.next_door',compact('post', 'user' ) );
    }
    public function delete_by_id(Request $request) {
        $id = Input::get('id');
        $to_delete = \App\Post::find($id)->delete();
    }
    public function user() {
       $user_post = User::find(1)->post;       
        return $user_post;
    }
    /**
     * Funkcja przekazuje w compact-cie Usera z jednym postem(OneToOne) i Post z userem (przekazuje relacje). 
     * @return type
     */
    public function relations(){
        //relation OneToOne
        echo "Widok z kontrolera<br>".$post_from_user= User::find(1)->post ;
        echo  "<br>Widok z kontrolera<br>".$user_from_post= Post::find(1)->user;
        //relation oneToMany  <-----
        
        //relation ManyToMany
//        $user_roles = User::find(1)->roles;
        
        $user_roles_to_loop = User::find(5);
        foreach ($user_roles_to_loop->roles as $roles_user ){
            echo "<br>Rola Usera o id 5 to = " .$roles_user->name;
        }    
        return view('pages.user', compact('post_from_user','user_from_post', 'roles_user'));
    }
    public function example_relations_with_country(){
        
        $countrys = Country::find(1); 
//        foreach ($countrys->posts as $country){
//           $country_with_post= $country->title;
//            return $country_with_post;
//        }
        $country_with_post=$countrys->posts;
        return view('pages.country',compact('country_with_post'));
    }
    
    /**
     * Funkcja pokazuje polymorficzną relacje czyli w tym przypadku jeden post ma dwie fotki.
     * @return type
     */
    public function polymorphic_relation(){
        $user = User::find(1);
        $post = Post::find(2);
       
        foreach($user->photos as $photo){
            echo $photo;
            echo "<br>".$photo->imageable_id;
            echo "<br>".$photo->path;
            echo "<br>".$photo->imageable_type;
            
        }
        foreach($post->photos as $photo_post){
            echo "<br>".$photo_post;
            echo "<br>".$photo_post->imageable_id;
            echo "<br>".$photo_post->path;
            echo "<br>".$photo_post->imageable_type;
            
        }
        return view('pages.polymoprhic', compact(''));
    }
   
}
