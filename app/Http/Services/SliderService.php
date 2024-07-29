<?php

namespace App\Http\Services;

use App\Models\Slider;
use Illuminate\Support\Facades\Log;

class SliderService
{
    public function getAll()
    {
        return Slider::orderby('id', 'desc')->paginate(5);
    }
    //idea update slider
    public function updateSlider($id, $request)
    {
        try {
            $slider = Slider::find($id);
            if ($slider) {
                $this->moveFile($request);
                $slider->fill($request->input());
                $slider->save();
                return true;
            } else {
                return null;
            }
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return false;
        }
    }
    //idea get slider edited
    public function editSlider($id)
    {
        return Slider::find($id);
    }
    //idea delete slider
    public function deleteSlider($id)
    {
        try {
            $slider = Slider::find($id);
            if ($slider) {
                $slider->delete();
                return true;
            } else {
                return null;
            }
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return false;
        }
    }
    //idea move file
    public function moveFile($request)
    {
        if ($request->hasFile('image')) {
            //todo chuyển file vào thư mục
            $name = $request->file('image')->getClientOriginalName();
            $path = '/storage/' . 'uploads/' . date("Y/m/d") . '/Sliders/';
            $request->file('image')->move(\public_path($path), $name);
            $pathFull = $path . $name;
            $request['image'] = $pathFull;
        }
    }
    //idea store slider
    public function storeSlider($request)
    {
        try {
            $this->moveFile($request);
            Slider::create($request->input());
            return true;
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return false;
        }
    }
    //* FE
    public function showVisibleSliders()
    {
        return Slider::where('status', 0)->limit(4)->get();
    }
    public function showliders()
    {
        return Slider::find([9, 10]);
    }
    public function statusSlider($value)
    {
        if ($value == -1) {
            return Slider::orderby('id', 'desc')->paginate(5);
        }
        $sliders = Slider::where('status', $value)->orderby('id', 'desc')->paginate(5);
        return $sliders;
    }
    public function searchSlider($search)
    {
        if ($search == 'all') {
            return Slider::orderby('id', 'desc')->paginate(5);
        }
        $sliders = Slider::where('id', 'like', '%' . $search . '%')->orWhere('title', 'like', '%' . $search . '%')->orderby('id', 'desc')->paginate(5);
        return $sliders;
    }
}
