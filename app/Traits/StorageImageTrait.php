<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait StorageImageTrait{

    public function storageUploadFile($request,$fileName,$fileFolder){

        if($request->hasFile($fileName)){
            $fileNameOrigin = $request->file($fileName)->getClientOriginalName();
            $fileNameHash = str_random(3) . time() . $fileNameOrigin;
            $path = $request->file($fileName)->storeAs(
                'public/' . $fileFolder . '/' . auth()->id() , $fileNameHash
            );
    
            $dataUploadFile = [
                'name' => $fileNameOrigin,
                'path' => Storage::url($path),
            ];
            return $dataUploadFile;
        }
        return null;
        
    }
}