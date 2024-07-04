<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.index',['name'=>'yusufcan']);
    }

    public function test($id,$name): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application //fonk tanımlama, $ değişken için,
    {
        return view('home.test',['id'=>$id,'name'=>$name]); // view ekrana çıktı için, []'li kısım ise url den değişkenlere değer atıyor,home.test ise home klasöründeki test dosyası için.


    }

    public function about()
    {
        return view('home.about');
    }

   /* public function test($id,$name)
    {
        echo "your id number : ",$id; echo "<br>your name : ",$name; // echo == printf, <br> == \n,

        for($i=0; $i < $id; $i++)
        {
            echo "<br> $i.ci $name ";

        }
    } */


}
