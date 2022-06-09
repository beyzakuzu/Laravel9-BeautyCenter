<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $sliderdata=Service::limit(4)->get();
        $servicelist1=Service::limit(6)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata,
            'servicelist1'=>$servicelist1,
        ]);
     }



    public function test()
    {
        return view('home.test');
    }

    public function param($id,$number)
    {
        //echo "Parameter 1:",$id;
        //echo "<br>Parameter 2:",$number;
        //echo "<br>Sum Parameters:", $id+$number;
        return view('home.test2',
            [
                'id' => $id,
                'number' => $number

            ]);
    }
    public function save(Request $request)
    {
        echo "Save Function<br>";
        echo "Name:",$_REQUEST["fname"];
        echo "Last Name:",$_REQUEST["lname"];
        return view('home.test2',
            [
                'fname' => $_REQUEST["fname"],
                'lname' => $_REQUEST["lname"]

            ]);
    }
}
