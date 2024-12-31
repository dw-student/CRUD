<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
  


    public function index() {
        $users = DB::table('images')->paginate(5);
        return view('index' ,['data' => $users]);
    }

    

    

    public function create() {
        return view('create');
    }
 



    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'image' => 'required'

        ]);

        $file = $request->file('image')->store('images','public');
        $user = DB::table('images')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'file' => $file,
        ]);

        return redirect()->route('index');
    } 




    public function show(string $id) {
        $user = DB::table('images')->find($id);
        if($user){
            return view('show', compact('user'));
        }else{
            echo "show not working!";
        }
        // return view('show');
        //
    }



    public function edit(string $id) {
        $user = DB::table('images')->find($id);
        if($user){
            return  view('edit', compact('user'));

            // echo "edit function working";
        }else{
            echo "edit not working!";
        }
    }

  


    public function update(Request $request, string $id) {
        $file = $request->file('image')->store('images','public');
        $user = DB::table('images')->where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'file' => $file,
        ]);
        if($user){
            return redirect()->route('index');
            // echo "update function working";
        }else{
            echo "not working";
        }
    }






    public function destroy(string $id) {
        $user = DB::table('images')->where('id',$id)->delete($id);
        return redirect()->route('index');

    }
      
}