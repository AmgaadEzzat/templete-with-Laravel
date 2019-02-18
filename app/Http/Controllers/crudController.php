<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use DB;
class crudController extends Controller
{
    //
    public function Smember(){
      $members=DB::table('members')->get();
        return view('members',compact('members'));
    }

    public function Amember(){
        return view('addmember');
    }

    public function Imember(Request $request){
        $member = new Member;
        $member->member_name = $request->member_name;
        $member->save();
        return back();
    }

    public function Dmember(Member $id) {
        $id->delete();
        return back();
    }

    public function Emember(Member $id){
        return view('edit',compact('id'));
    }

    public function Umember(Request $request, $id){
       // Member::where('id',$id)->update(array('member_name'=>$request->member_name));
        DB::table('members')->where('id',$id)->update(array('member_name'=>$request->member_name));
       //$id->update($request->all());
        return redirect('members');
    }
}
