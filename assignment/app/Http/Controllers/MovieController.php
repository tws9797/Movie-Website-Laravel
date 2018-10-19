<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Image;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MovieController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    //
    public function create(){
      $movie = new Movie();
      return view('movies.create',[
        'movie'=>$movie
      ]);
    }

    public function store(Request $request){
      $movie = new Movie();
      $movie->fill($request->except('image'));
      if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $path = public_path('uploads/movies/' . $filename);
        Image::make($image->getRealPath())->resize(300,300)->save($path);
        $movie->image='uploads/movies/'.$filename;
        $movie->save();
      }
      $movie->save();
      return redirect()->route('movie.index');
    }

    public function index(){
      if(request()->has('genre')){
        $movie = Movie::where('genre',request('genre'))->paginate(10);
      }
      else{
      $movies = Movie::orderBy('title','asc')->paginate(10);
      }
      return view('movies.index',[
        'movies' => $movies
      ]);
    }

    public function show($id){
      $movie = Movie::find($id);
      if(!$movie) throw new ModelNotFoundException;

     return view('movies.show',[
              'movie' => $movie
            ]);
    }

    public function edit($id){
      $movie = Movie::find($id);
      if(!$movie) throw new ModelNotFoundException;

      return view('movies.edit',[
        'movie' => $movie,
      ]);
    }

    public function update(Request $request, $id){
      $movie = Movie::find($id);
      $movie->fill($request->except('image'));
      if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $path = public_path('uploads/movies/' . $filename);
        Image::make($image->getRealPath())->resize(300,300)->save($path);
        $movie->image='uploads/movies/'.$filename;
        $movie->save();
      }
      $movie->save();
      return redirect()->route('movie.index');
    }

    public function destroy($id){
      $movie = Movie::find($id);
      $movie->delete();
      return redirect()->route('movie.index');
    }

    public function display(){
      $movies = Movie::orderBy('title','asc')->get();

      return view('display.home',[
        'movies' => $movies
      ]);
    }

    public function sortByAlpha(){
      $movies = Movie::orderBy('title','asc')->paginate(10);
      return view('movies.index',[
        'movies' => $movies
      ]);
    }

    public function sortByYear(){
      $movies = Movie::orderBy('year','asc')->paginate(10);
      return view('movies.index',[
        'movies' => $movies
      ]);
    }
  }
