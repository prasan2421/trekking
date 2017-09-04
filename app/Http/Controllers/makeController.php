<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\regestration;

class makeController extends Controller
{
   public function submit(Request $request){
      $this->validate($request,[
         'fname' => 'required',
         'lname' => 'required'

      ]);
      $regester = new regestration;
      $regester->fname = $request->input('fname');
      $regester->lname = $request->input('lname');
      $regester->uname = $request->input('uname');
      $regester->email = $request->input('email');
      $regester->pwd = $request->input('pwd');
      $regester->rpwd = $request->input('rpwd');
      $regester->save();
      return redirect('/index')->with('status','Message Sent');
   }

   public function return(Request $request){
      $this->validate($request,[
          'fname' => 'required',
          'lname' => 'required'

      ]);
      $regester = new regestration;
      $regester->fname = $request->input('fname');
      $regester->lname = $request->input('lname');
      $regester->uname = $request->input('uname');
      $regester->email = $request->input('email');
      $regester->pwd = $request->input('pwd');
      $regester->rpwd = $request->input('rpwd');
      $regester->save();
      return redirect('/index')->with('status','Message Sent');
   }
}
