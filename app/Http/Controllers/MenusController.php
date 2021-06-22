<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\Recursive;
use App\Components\helper;
use App\Models\Menus;

class MenusController extends Controller
{

	private $recursive,$helper,$menu;
	public function __construct(Recursive $recursive,helper $helper,Menus $menus){
		$this->recursive = $recursive;
		$this->helper = $helper;
		$this->menu = $menus;
	}

    public function index(){

    	$menus = $this->menu->paginate(5);

    	return view('admin/menus/index',compact('menus'));
    }



    public function createGet(){

    	$menu = new Menus();
    	$menus = $menu->get();
    	$menus = json_decode(json_encode($menus),true);
    	$htmlOption = $this->recursive->categoryRecursive($menus,0);

    	return view('admin/menus.add',compact('htmlOption'));
    }

    public function createPost(Request $request){
    	$this->menu->name = $request->name;
    	$this->menu->parent_id = $request->parent_id;
    	$this->menu->slug = str_slug($request->name);
    	$this->menu->save();

    	return redirect()->route('menus.index');

    }

    public function editGet(){

    }

    public function editPost(){

    }

    public function delete(){

    }
}
