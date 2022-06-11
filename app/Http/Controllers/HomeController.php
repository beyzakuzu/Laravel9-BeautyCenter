<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function maincategorylist()
    {
     return Category::where('parent_id','=',0)->with('children')->get();

    }

    //
    public function index()
    {
        $page='home';
        $sliderdata=Service::limit(4)->get();
        $servicelist1=Service::limit(6)->get();
        return view('home.index',[
            'page'=>$page,
            'sliderdata'=>$sliderdata,
            'servicelist1'=>$servicelist1,
        ]);
     }

    public function service($id)
    {


        $data= Service::find($id);
        $images = DB::table('images')->where('service_id',$id)->get();

        return view('home.service',[
            'data'=>$data,
            'images'=>$images
        ]);
    }
    public function categoryservice($id)
    {
echo"dsdd";
exit();

        $data= Service::find($id);
        $images = DB::table('images')->where('service_id',$id)->get();

        return view('home.service',[
            'data'=>$data,
            'images'=>$images
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
