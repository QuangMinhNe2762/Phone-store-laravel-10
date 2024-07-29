<?php

namespace App\Livewire\Admin\Brands;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class Index extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $id, $name, $slug, $logo, $status = 0, $category_id = -1;
    public $logo_edit;

    public $search;
    public function render()
    {
        $brands = Brand::orderBy('id', 'DESC');

        if ($this->status) {
            $brands = $this->findSearchStatus($brands);
        }
        $brands = $this->findSearchCategoryID($brands);
        if ($this->search) {
            $brands = $this->searctext($brands);
        }
        $brands = $brands->paginate(5);
        if (count($brands) == 0) {
            session()->flash('error', 'No results found');
        }
        $category_ids = Category::where('status', 0)->get();
        return view('livewire.admin.brands.index', ['brands' => $brands, 'category_ids' => $category_ids])->extends('Admin.Layouts.adminApp', ['title' => 'Brand list'])->section('content');
    }
    protected $messages = [
        'name.required' => 'Please enter name brand',
        'category_id.unique' => 'Category of brand already exists',
        'logo.required' => 'logo is required',
        'logo.image' => ' logo must be an image',
    ];
    public function storeBrand()
    {
        $data = $this->validate(
            [
                'name' => ['required',],
                'category_id' => 'required|numeric',
                'logo' => 'required|image',
                'status' => 'required|numeric|in:0,1'
            ]
        );
        if ($data) {
            try {
                $data = $this->moveFile($data);
                $data['slug'] = Str::slug($data['name']);
                Brand::create($data);
                session()->flash('success', 'Brand created successfully.');
                $this->resetInput();
                $this->cleanUp();
                return;
            } catch (\Throwable $th) {
                Log::info($th->getMessage());
            }
        }
        session()->flash('error', 'Brand created failed.');
    }
    //idea reset input
    public function resetInput()
    {
        $this->name = '';
        $this->slug = '';
        $this->category_id = -1;
        $this->status = 0;
        $this->logo = null;
    }
    //idea delete livewire-tmp
    public function cleanUp()
    {
        $files = Storage::files('livewire-tmp');
        foreach ($files as $file) {
            Storage::delete($file);
        }
    }
    //idea move file to public path
    public function moveFile($data)
    {

        if (isset($this->logo)) {
            //todo chuyển file vào thư mục
            $name = $this->logo->getClientOriginalName();
            $path = '/storage/' . 'uploads/' . date("Y/m/d") . '/Brand';
            //! vào config/filesystem.php tìm real_public
            $pathFull = $this->logo->storeAs($path, $name, 'real_public');
            $data['logo'] = $pathFull;
        }
        return $data;
    }
    //idea delete brand
    public function destroyBrand($id)
    {
        try {
            $brand = Brand::find($id);
            if ($brand) {
                Storage::disk('real_public')->delete($brand->logo);
                $brand->delete();
                session()->flash('success', 'Brand deleted successfully');
            }
        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            session()->flash('error', 'Brand deleted failed');
        }
    }
    //idea edit brand
    public function editBrand($id)
    {
        $brand = Brand::find($id);
        if ($brand) {
            $this->id = $brand->id;
            $this->name = $brand->name;
            $this->category_id = $brand->category_id;
            $this->status = $brand->status;
            $this->logo_edit = $brand->logo;
        }
    }
    //idea update brand
    public function updateBrand()
    {
        $data = $this->validate([
            'name' => 'required',
            'category_id' => 'required|numeric|min:0',
            'status' => 'required|numeric|in:0,1'
        ]);
        if ($data) {
            try {
                $Brand = Brand::find($this->id);
                if ($Brand) {
                    $data = $this->moveFile($data);
                    $data['slug'] = Str::slug($data['name']);
                    $Brand->update($data);
                    $this->cleanUp();
                    session()->flash('success', 'Brand updated successfully');
                    $this->resetInput();
                    return;
                }
            } catch (\Throwable $th) {
                Log::info($th->getMessage());
            }
        }
        session()->flash('error', 'Brand updated failed');
    }
    public function searchCategoryID($id)
    {
        $this->category_id = $id;
    }
    public function searchStatus($id)
    {
        $this->status = $id;
    }
    public function findSearchCategoryID($brands)
    {
        if ($this->category_id == 0 || $this->category_id > 0) {
            $brands = $brands->where('category_id', $this->category_id);
        }
        return $brands;
    }
    public function findSearchStatus($brands)
    {
        $brands = $brands->where('status', $this->status);
        return $brands;
    }
    public function searctext()
    {
        $brands = Brand::where('id', 'like', '%' . $this->search . '%')
            ->orWhere('name', 'like', '%' . $this->search . '%');
        return $brands;
    }
}
