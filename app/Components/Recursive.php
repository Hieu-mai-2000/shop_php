<?php

namespace App\Components;

class Recursive{

	private $htmlSelect ='';
	public function __contructor(){

	}

	public function categoryRecursive($categories,$id=0,$parent_id=0,$text=''){

		foreach ($categories as $value) { 
			if($value['parent_id'] == $id){
				$this->htmlSelect .= "<option ". (($parent_id && ($parent_id == $id))?'selected':'') ." value=". $value['id'] .">" .$text. $value['name'] .'</option>';
				$this->categoryRecursive($categories,$value['id'],$parent_id,$text .'--');
			}
		}

		return $this->htmlSelect;
	}
}

