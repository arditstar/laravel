<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\companie;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $companies = companie::orderBy('name','desc')->paginate(10);
        return view('pages.companiespage.companies')->with('companies', $companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.companiespage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'website' =>'required',
            'cover_image' =>'image|nullable|max:1999',
        ]);

        if($request->hasFile('cover_image')){
            //geting filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //gettin just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET JUST EXT
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //filename to store 
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // uploading the image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
         } else {
             $fileNameToStore = 'noimage.jpg';
         }

        $companie = new companie;
        $companie->name = $request->input('name');
        $companie->email = $request->input('email');
        $companie->website = $request->input('website');
        $companie->cover_image = $fileNameToStore;
        $companie->user_id = auth()->user()->id;
        $companie->save();

        return redirect('/companies')->with('success', 'companie created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $companie = companie::find($id);
        return view('pages.companiespage.show')->with('companie', $companie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companie = companie::find($id);
        return view('pages.companiespage.edit')->with('companie', $companie);
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'website' =>'required',
            'cover_image' =>'image|nullable|max:1999',
        ]);
        
        if($request->hasFile('cover_image')){
            //geting filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //gettin just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET JUST EXT
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //filename to store 
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // uploading the image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
         }

        
        $companie = companie::find($id);
        $companie->name = $request->input('name');
        $companie->email = $request->input('email');
        $companie->website = $request->input('website');
        if($request->hasFile('cover_image')){
            $companie->cover_image = $fileNameToStore;
        }
        $companie->save();

        return redirect('/companies')->with('success', 'companie Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $companie = companie::find($id);
 
        if($companie->cover_image != 'noimage.jpg'){
            //delete photo
            Storage::delete('public/cover_images/'.$companie->cover_image);
        }

        $companie->delete();
        return redirect('/companies')->with('success', 'Companie Removed');
    }
}
