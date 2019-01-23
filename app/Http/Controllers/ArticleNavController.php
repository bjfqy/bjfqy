<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\ArtNav;

class ArticleNavController extends Controller
{
    //
    public function index()
    {
    	# code...
    	//导航添加列表
    	$artnav = new ArtNav;
    	//dd($artnav->all());
    	//return $artnav->all();
    	return view('articlenav')->with('artnav',$artnav->all());

    }
   	public function add(Request $req)
   	{
   		# code...
   		$artnav = new ArtNav;
   		$artnav->pid= $req->pid;
   		$artnav->nav_name= $req->nav_name;
   		$artnav->introduce=$req->introduce;
   		$artnav->utime=now();
   		$artnav->save();
   		return '添加成功';


   	}

}
