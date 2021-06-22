<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menus;
use App\Models\Category;
use App\Models\Product;
use App\Components\Recursive;
use App\Traits\StorageImageTrait;
use Illuminate\Support\Facades\Storage;



class AdminProductController extends Controller
{
    //
	use StorageImageTrait;

    private $recursive,$category,$product;
	public function __construct(Recursive $recursive,Category $category,Product $product){
		$this->recursive = $recursive;
		$this->category = $category;
		$this->product = $product;
	}

    public function index(){
    	return view('admin.products.index');
    }

    public function createGet(){
    	$menu = $this->category->get();
    	$menu = json_decode(json_encode($menu),true);
    	$htmlOption = $this->recursive->categoryRecursive($menu,0);

    	return view('admin.products.add',compact('htmlOption'));
    }

    public function createPost(Request $request){
		
		$products = new Product;
		$products->name =  $request->name;
		$products->price = $request->price;
		$products->category_id =  $request->category_parent;
		$products->content =  $request->contents;
		$products->user_id = auth()->id();
		$dataUploadFile = $this->storageUploadFile($request,'feature_image','product');
		if($dataUploadFile){
			$products->feature_image = $dataUploadFile['name'];
			$products->feature_image_path = $dataUploadFile['path'];
		}
		$products->save();
		dd($products);


        // return $dataUploadFile;
    }
}
