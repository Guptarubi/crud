<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Validator;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('insert');
    }
    
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
        
            'name'=>'required|min:2',
            'email'=>'required|email',
            'mobile'=>'required|numeric|digits:10',
            'password'=>'required',
             'DOB'=>'required',
            'profile_image'=>'required'
            
            );

        $niceNames = array(
            'name' =>'Name',
            'email' => 'Email',
            'mobile'=>'mobile',
            'password'=>'password',
             'DOB'=>'DOB',
            'profile_image'=>'Profile Image'
        );

        

        $validator = Validator::make($request->all(),$rules);
        $validator->setAttributeNames($niceNames);


        if($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }


        $post=new Employee;
        $post->Name=$request->get('name');
        $post->Email=$request->get('email');
        $post->Mobile_No=$request->get('mobile');
        $post->password=$request->get('password');
        $post->DOB=$request->get('DOB');
        if($request->hasfile('profile_image'))
        {
            $file= $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename= time().'.'.$extention;
            $file->move('upload/', $filename);
            $post->profile_image = $filename;

        }
        $post->save();

        return redirect()->back()->with("<h1>Data send successfuly....</h1>");

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $post, Request $request)
    {
        $search = $request->search;
        // dd($search);
        if($search != ""){
            $posts= Employee::where('name','=',$search)->get();
            
        }
        else
        {
           $posts=Employee::all(); 
        }
       
        return view('show',['posts'=>$posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $post,$id)
    {
       $posts=Employee::find($id);
       return view('edit',['posts'=>$posts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $post, $id)
    {
        $posts=Employee::find($id);
        $posts->Name=$request->get('name');
        $posts->Email=$request->get('email');
        $posts->Mobile_No=$request->get('mobile');
        $posts->password=$request->get('password');
        $posts->DOB=$request->get('DOB');
        $posts->profile_image=$request->get('profile_image');

        $posts->save();
        return redirect('show');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $post,$id)
    {
       $post=Employee::find($id);
       $post->delete();
       return redirect('show');
    }

  public function register(Request $request)
   {

    
    
  }
  function status_update($id)
  {
      //get product status with the help of product ID
      $post = Employee::find($id);
  
      //Check user status
      if($post->Status == '1'){
        $post->Status = '0';
        $post->update();
      }else{
        $post->Status = '1';
        $post->update();

      }    
      return redirect()->back();
    }
}
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
                
            

