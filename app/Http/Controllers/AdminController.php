<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin_user;

use App\user;
use Hash;


class AdminController extends Controller
{
    public function index()
    {
        return view("Admin.index");
    }
    public function stored(Request $request){
    	// dd($request->all());



        $this->validate($request,[
            'full_name'=> 'required',
            'email'=> 'required|email',
            'alternate_email'=> 'email',
            'mobile_no'=> 'required|numeric|digits:10',
            'alternate_mobile'=> 'numeric|digits:10',
            'permanante_address'=> 'required',
            'correspondence_address'=> 'required',
            'password'=> 'required|min:6',
            'aadhar_card'=> 'required|digits:12',
            'pan_card'=> 'required',
            'gender'=> 'required',
            'state'=> 'required',
            'city'=> 'required',
            'pin_code'=> 'required',
            'confirm_pwd'=> 'required|same:password|min:6',
            'image'=> 'required',
            'sing'=> 'required',
        ]);
         // dd("khali ala");

        $user = new user();
        $user->name = $request->full_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = 1;
        $user->remember_token = $request->_token;
        $user->save();

        $uid = $user->id;
        // dd($uid);


    	$data= new admin_user();
    	$data->u_id=$uid ;
    	$data->mobile=$request->mobile_no;
    	$data->alternate_mobile=$request->alternate_no;
    	$data->email=$request->email;
    	$data->alternate_email=$request->alternate_email;
    	$data->aadhar_card=$request->aadhar_card;
    	$data->pan_card=$request->pan_card;
    	$data->gender=$request->gender;
    	$data->state=$request->state;
    	$data->city=$request->city;
    	$data->pincode=$request->pin_code;
    	$data->correspondence_address=$request->correspondence_address;
        $data->permanent_address=$request->permanante_address;

        


        $image_name =$_FILES['image']['name'];
        // dd($image_name);

        if ($_FILES['image']['tmp_name']) {
            $unique_id = uniqid();
            $target_dir = "assets/images/admin/profile_pic/";
            $target_file = $target_dir .$unique_id. basename($image_name);
            $data->photo_path= $target_file;

            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
            $uploaded_successfully = True;
        }



        $image_name1 =$_FILES['sing']['name'];
        // dd($image_name);

        if ($_FILES['sing']['tmp_name']) {
            $unique_id = uniqid();
            $target_dir = "assets/images/admin/signature/";
            $target_file = $target_dir .$unique_id. basename($image_name1);
            $data->signature_path= $target_file;

            move_uploaded_file($_FILES["sing"]["tmp_name"], $target_file);
            $uploaded_successfully = True;
        }



    	$data->save();
    }
    public function saveImage(Request $request) {
                // dd($_FILES['image_upload']['name']);

                $image_name =$_FILES['image']['name'];

                if ($_FILES['image']['tmp_name']) {
                    $unique_id = uniqid();
                    $target_dir = "assets/images/admin/profile_pic";
                    $target_file = $target_dir .$unique_id. basename($image_name);
                    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                    $uploaded_successfully = True;





                    return view('image_upload', compact('uploaded_successfully'));
                }
                else {
                    // dd("baher gel");
                }
                return view('image_upload');
            }
}
