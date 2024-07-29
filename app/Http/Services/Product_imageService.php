<?php

namespace App\Http\Services;

use App\Models\Product_image;
use Illuminate\Support\Facades\Log;

class Product_imageService
{
    //idea move file for update 1 image
    public function moveFile($file)
    {
        if ($file) {
            //todo chuyển file vào thư mục
            $name = $file->getClientOriginalName();
            $path = '/storage/' . 'uploads/' . date("Y/m/d") . '/Product';
            $file->move(\public_path($path), $name);
            $pathFull = 'storage/' . 'uploads/' . date("Y/m/d") . '/Product/' . $name;
            return $pathFull;
        }
    }
    //idea update product image by id
    public function update($id, $image)
    {
        try {
            $validateData = Product_image::find($id);
            if ($validateData) {
                $image_path = self::moveFile($image);
                $validateData->image = $image_path;
                $validateData->save();
            }
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return false;
        }
        return true;
    }
    //idea delete product image by id
    public function delete($id)
    {
        try {
            $validateData = Product_image::find($id);
            if ($validateData) {
                $validateData->delete();
            }
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return false;
        }
        return true;
    }
}
