<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Components\Recursive;

class CategoryController extends Controller
{
    private $htmlSelect;
    private $category;
	public function __contructor(){
		$this->category = new Category;
		$this->htmlSelect = '';
	}

	function objectToArray($data){
		return json_decode(json_encode($data), True);
	}
	function printArray($data){
		echo "<pre>";
		var_dump($data);
	}

	public function index(){

		$category = new Category;
		$categories = $category->paginate(5);
		// $categories = $this->objectToArray($categories);

		return view('admin/category/index',compact('categories'));
	}
	

    public function create(){
    	
    	// $categories = $this->category->all();
    	// $categories = $this->category->get();
    	$htmlOption = $this->getCategories();

    	return view('admin/category/add',compact('htmlOption'));
    }

    public function store(Request $request){
    	$category = new Category;
    	$category->name = $request->name;
    	$category->parent_id = $request->parentId;
    	$category->slug = str_slug($request->name);
    	$category->save();

    	return redirect()->route('categories.index');
    }

    public function delete(Request $request){			
    		echo 'da vo day';
    		echo $request->id;
    }

    function getCategories($parent_id=0){
    	$categories = Category::all();
		$categories = json_decode(json_encode($categories),True);
		$Recursive = new Recursive();
		$htmlOption = $Recursive->categoryRecursive($categories,0,$parent_id);	
		return $htmlOption;
    }
    public function edit(Request $request){
    	$categories = new Category;
    	$category = $categories->where('id',$request->id)->first();
    	
    	$htmlOption = $this->getCategories($category->parent_id);
    	return view('admin/category/edit',compact('htmlOption','category'));

    }

    public function editPost(Request $request){

    	$categories = new Category;
    	$category = $categories->where('id',$request->id)->first();
    	$category->name =  $request->name;
    	$category->parent_id = $request->parentId;
    	$category->slug = str_slug($request->name);
    	$category->save();
    	return redirect()->route('categories.index');
    }

    public function delete_($id){
    	$categories = new Category;
    	$categories->find($id)->delete();
    	return redirect()->route('categories.index');
    }
}
