<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\UserController;


// Route::get('/user',[UserController::class,'getUser']);

// Route::get('/about-user',[UserController::class,'aboutUser']);

// Route::get('/user/{name}',[UserController::class,'getUserName']);
// Route::get("/",function(){
//     return "hello welcome to the home page";
// }); 

// Route::get('/', function () {
//     return view('welcome',[
//         'tasks'=>[
//             'Go to the market',
//             'Walk the dog',
//             'Watch a video tutorial',
//         ]
//     ]);
// }); 



// Route::get('/',function(){
//     $ideas = session()->get('ideas', []);

//     return view('ideas',[
//         'ideas'=>$ideas
//     ]);
// });

// Route::post('/ideas',function(){
//     //dd('Hello!');
//     // dd(request()->all());
//     $idea = request('idea');
//     session()->push('ideas',$idea);
//     return redirect('/'); //after submitting the form we want to redirect the user to the home page
// });



// Route::view('/','welcome',[
//     'greeting'=> "hello",
//     //'person'=>'harsha'
//     'person'=>request('person','world') //if u want to read data from the query string and second parameter is the default value if the value in the query string is empty
// ]);


// Route::get('/about',function(){
//     return view('about');
// });

// Route::get('/contact',function(){
//     return view('contact');
// });

//Route::view('/contact','contact');//other way of defining the route and rendering the respective ui


// Route::get('/',function(){
//     return view('home');
// });


// Route::get("/user-form",function(){
//     return view('user-form');
// });

// Route::post('/add-user',[UserController::class,'addUser']);

Route::view('user-form','user-form');

Route::post('/add-user',[UserController::class,'addUser']);