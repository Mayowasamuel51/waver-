<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orderlist;
use App\Models\lister;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB;
class sheetCheet extends Controller
{

    public function index(){
        return view('sheet.sheet_1');
        
    }
    public function perfrom(){
        // $cars = orderlist::where('buyer_name','Mayowa ')->exists();
    //    $cars =  orderlist::join('listers','listers.buyer_name','orderlists.buyer_name')
    //    ->join('orderlists','orderlist.buyer_name','orderlist.buyer_name')
        $cars= orderlist::leftjoin('listers','orderlists.buyer_name','listers.buyer_name')->orderBy('orderlists.buyer_name')->min('orderlists.car_price');
    //    ->get();

    //    $getcars = orderlist::max('car_price');

        return  $cars."<br>";
        // return $getcars;
     





    }























    // public function blog_com(Request $request){
    //     content::create([
    //         'author'=>$request->input('author'),
    //         'reviews'=>$request->input('reviews'),
    //         'content'=>$request->input('content'),
    //         'year'=>$request->input('year'),
    //         // 'commnet'=>$request->input('c')
    //     ]);





    // }

    // public function showData(){
    //     $content = content::all();
    //     return view('sheet.sheet2',compact('content'));
    // }

    // public function findauthor($id){
    //    $finder = content::find($id);
    //  echo $finder;
    // }















    //
}
