<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassifiedRequest;
use App\Commands\StoreClassifiedCommand;

use App\Http\Requests\UpdateClassifiedRequest;
use App\Commands\UpdateClassifiedCommand;

use App\Commands\DestroyClassifiedCommand;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Classified;
use Auth;
use DB;

class ClassifiedsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('auth', ['except' => ['index', 'show', 'search']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classifieds = Classified::all();
        return view('index', compact('classifieds'));
    }
    
    public function search(){
        $searchString = \Input::get('searchString');
        
        $classifieds = DB::table('classifieds')->where('title', 'LIKE', '%' . $searchString. '%')->get();
        return view('index', compact('classifieds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassifiedRequest $request)
    {
        $title = $request->input('title');
        $category_id = $request->input('category_id');
        $description = $request->input('description');
        $price = $request->input('price');
        $condition = $request->input('condition');
        $main_image = $request->file('main_image');
        $location = $request->input('location');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $owner_id = Auth::user()->id;
        //$owner_id = '1';
        
        // Check if image uploaded
        if($main_image){
            $main_image_filename = $main_image->getClientOriginalName();
            $main_image->move(public_path('images'), $main_image_filename);
        } else {
            $main_image_filename = 'noimage.jpg';
        }
        
        // Create Command
        $command = new StoreClassifiedCommand($title, $category_id, $description, $main_image_filename, $price, $condition, $location, $email, $phone, $owner_id);
        $this->dispatch($command);
        
        return \Redirect::route('classifieds.index')
                ->with('message', 'Listing Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classified = Classified::find($id);
        return view('show', compact('classified'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classified = Classified::find($id);
        return view('edit', compact('classified'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassifiedRequest $request, $id)
    {
        $title = $request->input('title');
        $category_id = $request->input('category_id');
        $description = $request->input('description');
        $price = $request->input('price');
        $condition = $request->input('condition');
        $main_image = $request->file('main_image');
        $location = $request->input('location');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $owner_id = 1;
        
        $current_image_filename = Classified::find($id)->main_image;
        
        // Check if image uploaded
        if($main_image){
            $main_image_filename = $main_image->getClientOriginalName();
            $main_image->move(public_path('images'), $main_image_filename);
        } else {
            $main_image_filename = $current_image_filename;
        }
        
        // Update Command
        $command = new UpdateClassifiedCommand($id, $title, $category_id, $description, $main_image_filename, $price, $condition, $location, $email, $phone, $owner_id);
        $this->dispatch($command);
        
        return \Redirect::route('classifieds.index')
                ->with('message', 'Listing Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $command = new DestroyClassifiedCommand($id);
        $this->dispatch($command);
        
        return \Redirect::route('classifieds.index')
                ->with('message', 'Listing Removed');
    }
}
