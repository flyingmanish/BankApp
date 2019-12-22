<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin_user;

class AdminController extends Controller
{
    public function index()
    {
        return view("Admin.index");
    }
    public function stored(Request $request){
    	// dd($request->all());
    	$data= new admin_user();
    	// $data->u_id=$request->  ;
    	$data->mobile=$request->mobile_no;
    	$data->alternate_mobile=$request->alternate_no;
    	$data->email=$request->email;
    	$data->alternate_email=$request->alternate_email;
    	$data->aadhar_card=$request->aadhar_card;
    	$data->pan_card=$request->pan_card;
    	$data->gender=$request->gender;
    	$data->state=$request->state;
    	$data->city=$request->city;
    	$data->pincode=$request->pincode;
    	$data->correspondence_address=$request->correspondence_address;
    	$data->permanent_address=$request->permanent_address;
    	$data->image=$request->photo_path;
    	$data->sing=$request->signature_path;
    	$data->save();
    }
    public function saveImage(Request $request) {
                // dd($_FILES['image_upload']['name']);

                $image_name =$_FILES['image_upload']['name'];

                if ($_FILES['image_upload']['tmp_name']) {
                    $unique_id = uniqid();
                    $target_dir = "assets/imgs/";
                    $target_file = $target_dir .$unique_id. basename($image_name);
                    move_uploaded_file($_FILES["image_upload"]["tmp_name"], $target_file);
                    $uploaded_successfully = True;
                    return view('image_upload', compact('uploaded_successfully'));
                }
                else {
                    // dd("baher gel");
                }
                return view('image_upload');
            }
}
