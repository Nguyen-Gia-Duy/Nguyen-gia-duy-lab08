<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NgdKhoaController extends Controller
{
    //doc du kieu tu bang khoa
    public function ngdGetallKhoa()
    {
        $ngdkhoas=DB::select("Select*from ngdkhoa");
        return view('ngdKhoa.ngdList',['ngdkhoas'=>$ngdkhoas]);
    }
    //Chi tiet khoa
    public function ngdGetkhoa($makh)
    {
        $khoa= DB::select("Select*from ngdkhoa where ngdmak=?",[$makh])[0];
        return view('ngdKhoa.ngdDetail',['khoa'=>$khoa]);
    }
    #edit
    public function ngdEdit($makh)
    {
    $khoa= DB::select("Select*from ngdkhoa where ngdmak=?",[$makh])[0];
    return view('ngdKhoa.ngdEdit',['khoa'=>$khoa]);
    }
    #editsubmit
    public function ngdEditSubmit($makh, Request $request)
    {
   $makh=$request ->input('ngdmak');
   $tenkh=$request ->input('ngdtenk');
   DB::update("UPDATE ngdkhoa SET ngdtenk= ? WHERE ngdmak=?",[$tenkh,$makh]);
   return redirect('/khoas');
}
}