<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // if($file=$request->file('file')){
        //     $name =$file->getClientOriginalName();
        //     return $name;
        // }

        // $profile_image_name = "";
        // $profile_image_path = "";
        // if($request->hasFile('image')){

        //     foreach ($request->file('image') as $image){
        //         // print_r($image->toArray());



        //     $profile_image_name = $image->getClientOriginalName();
        //     // print_r( $profile_image_name);
        //     $extension = \File::extension($profile_image_name);
        //     $profile_image_name = Str::random(32) . '.'.$extension;
        //     $profile_image_path = '/storage/profile_images/'.$profile_image_name;
        //     $image->storeAs('profile_images',$profile_image_name,'public');
        //     }
        // }

        
        $this->validate($request,[
            
                'email' => 'required',
                'username' => 'required | max: 10',
                'password' => 'required | min:5',
                'confirm_password' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'mobile_no' => 'required',
            
            ]);
        
            
            
        $user = new post();
        if($file = $request->file('file')){
                $name = $file->getClientOriginalName();
                if($file->move('images',$name)){
                $user->file = $name;
                $user->save();
                };
            }
       
        $data = $request->input();
        $user->email = $data['email'];
        $user->username = $data['username'];
        $user->password = $data['password'];
        $user->confirm_password = $data['confirm_password'];
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->gender = $data['gender'];
        $user->birthday = $data['birthday'];
        $user->marital_status = $data['marital_status'];
        $user->position = $data['position'];
        $user->about = $data['about'];
        $user->mobile_no = $data['mobile_no'];
        $user->website = $data['website'];
        $user->facebook = $data['facebook'];
        $user->twitter = $data['twitter'];
        $user->save();

        return redirect('/form');
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
        $data = post::find($id);
        return view('layout.edit',compact('data'));
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
        $user = $request->input();
        $data = post::find($id);
        $data->email = $user['email'];
        $data->username = $user['username'];
        $data->password = $user['password'];
        $data->confirm_password = $user['confirm_password'];
        $data->first_name = $user['first_name'];
        $data->last_name = $user['last_name'];
        $data->gender = $user['gender'];
        $data->birthday = $user['birthday'];
        $data->marital_status = $user['marital_status'];
        $data->position = $user['position'];
        $data->about = $user['about'];
        $data->mobile_no = $user['mobile_no'];
        $data->website = $user['website'];
        $data->facebook = $user['facebook'];
        $data->twitter = $user['twitter'];
        $data->save();

        return redirect('/list');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = post::find($id);
        $data->delete();
        return redirect('/list');
    }

    public function display(){

        $members = post::paginate(5);
        return view('layout.list',compact('members'));
    }

    public function showTable(){
        $members = post::all();
        return view('layout.table',compact('members'));
    }

}
