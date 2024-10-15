<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class crudcontroller extends Controller
{
    public function create(){
        return view('create');
    }
    public function pcreate(Request $req){
       $name=$req->name;
       $email=$req->email;
       $city=$req->city;
       $phone=$req->phone;
       $users = DB::table('crud')->insert(['name'=>$name,'email'=>$email,'city'=>$city,'phone'=>$phone]);
       echo"insert success";
    }
    public function read(){
        $data=DB::table('crud')->get();
        return view('read',['data'=>$data]);
    }
    public function update($id){
        $data=DB::table('crud')->where('id', $id)->first();
        // dd($data->name);
        return view('update',['data'=>$data]);
    }
    public function updatesave(Request $req,$id){
        $student = DB::table('crud')->find($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->city = $request->input('city');
        $student->phone = $request->input('phone');
        $student->update();
    //     $id=$req->id;
    //     $name=$req->name;
    //     $email=$req->email;
    //     $city=$req->city;
    //     $phone=$req->phone;
    //     dd($id);
    //     DB::table('crud')
    // ->where('id', $id)
    // ->update([
    //     'name' => $name,
    //     'email' => $email,
    //     'city'=> $city,
    //     'phone'=>$phone
    // ]);
    }
    public function delete($id){
        DB::table('crud')->where('id', $id)->delete();
        // dd($data->name);
        return redirect('read');
    }
}
