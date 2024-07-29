<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\SliderService;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    protected $sliderService;
    public function __construct(SliderService $sliderService)
    {
        $this->sliderService = $sliderService;
    }
    public function index()
    {
        $sliders = $this->sliderService->getAll();
        return view('Admin.Sliders.slider', ['title' => 'Sliders list', 'sliders' => $sliders]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);
        if ($this->sliderService->storeSlider($request)) {
            return redirect()->back()->with('success', 'created slider sucessfully!');
        }
        return redirect()->back()->with('error', 'created slider failed!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = $this->sliderService->editSlider($id);
        if ($slider != false) {
            return response()->json([
                'error' => false,
                'slider' => $slider,
            ]);
        }
        return response()->json(['error' => true]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $check = $this->sliderService->updateSlider($id, $request);
        if ($check) {
            return redirect()->back()->with('success', 'updated slider sucessfully!');
        } elseif ($check == null) {
            return redirect()->back()->with('error', 'Who deleted it :))))');
        }
        return redirect()->back()->with('error', 'updated slider failed!');
    }
    public function delete($id)
    {
        $check = $this->sliderService->deleteSlider($id);
        if ($check) {
            return redirect()->back()->with('success', 'delete slider sucessfully!');
        } else if ($check == null) {
            return redirect()->back()->with('error', 'Who deleted it :))))');
        }
        return redirect()->back()->with('error', 'delete slider failed!');
    }
    public function status($value)
    {
        $sliders = $this->sliderService->statusSlider($value);
        if (count($sliders) > 0) {
            return response()->json([
                'error' => false,
                'sliders' => $sliders,
                'pagination' => $sliders->links()->toHtml(),
                'check' => 'slider'
            ]);
        }
        return response()->json(['error' => true, 'session' => session('error', 'no slider found')]);
    }
    public function search($search)
    {
        $sliders = $this->sliderService->searchSlider($search);
        if (count($sliders) > 0) {
            return response()->json([
                'error' => false,
                'sliders' => $sliders,
                'pagination' => $sliders->links()->toHtml(),
                'check' => 'slider'
            ]);
        }
        return response()->json(['error' => true, 'session' => session('error', 'no slider found')]);
    }
}
