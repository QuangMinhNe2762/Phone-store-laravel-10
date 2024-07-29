<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Livewire\WithoutUrlPagination;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';
    use WithFileUploads;

    public $id, $name, $parent_id = -1, $search, $slug, $description, $image, $image_edit, $meta_title, $meta_keyword, $meta_description, $status = 0;
    public function render()
    {
        $categoriess = Category::orderBy('id', 'desc');
        if ($this->status) {
            $categoriess = $this->findSearchStatus($categoriess);
        }
        $categoriess = $this->findSearchParentID($categoriess);
        if ($this->search) {
            $categoriess = $this->searctext($categoriess);
        }
        $categoriess = $categoriess->paginate(5);
        if (count($categoriess) == 0) {
            session()->flash('error', 'No results found');
        }
        $parent_ids = Category::where('parent_id', 0)->orderBy('id', 'desc')->get();
        return view('livewire.admin.categories.index', ['categoriess' => $categoriess, 'parent_ids' => $parent_ids])->extends('Admin.Layouts.adminApp', ['title' => 'Category list'])->section('content');
    }
    protected $rules = [
        'name' => 'required|unique:categories',
        'description' => 'required',
        'parent_id' => 'required',
        'status' => 'required|numeric|in:0,1',
        'image' => 'required|image',
    ];
    protected $messages = [
        'name.required' => 'Please enter name category',
        'name.unique' => 'Name category already exists',
        'description.required' => 'Please enter description',
        'image.required' => 'Please add image category',
        'image.image' => 'Must be a image',
    ];
    //idea move file to public path
    public function moveFile($data)
    {

        if (isset($this->image)) {
            //todo chuyển file vào thư mục
            $name = $this->image->getClientOriginalName();
            $path = '/storage/' . 'uploads/' . date("Y/m/d") . '/Category';
            //! vào config/filesystem.php tìm real_public
            $pathFull = $this->image->storeAs($path, $name, 'real_public');
            $data['image'] = $pathFull;
        }
        return $data;
    }
    //idea reset input
    public function resetInput()
    {
        $this->name = '';
        $this->description = '';
        $this->parent_id = 0;
        $this->status = 0;
        $this->image = null;
    }
    //idea store category
    public function storeCategory()
    {
        $data = $this->validate();
        if ($data) {
            try {
                $data = $this->moveFile($data);
                $data['slug'] = Str::slug($data['name']);
                $data['meta_title'] = $data['name'];
                $data['meta_keyword'] = Str::slug($data['name']);
                $data['meta_description'] = substr($data['description'], 0, 20);
                Category::create($data);
                $this->cleanUp();
                session()->flash('success', 'Category created successfully');
                $this->resetInput();
                return;
            } catch (\Throwable $th) {
                Log::info($th->getMessage());
            }
        }
        session()->flash('error', 'Category created failed');
    }
    //idea delete category
    public function destroyCategory($id)
    {
        try {
            $category = Category::find($id);
            if ($category) {
                Storage::disk('real_public')->delete($category->image);
                $category->delete();
                session()->flash('success', 'Category deleted successfully');
            } else {
                session()->flash('error', 'Who deleted it :))))');
            }
        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            session()->flash('error', 'Category deleted failed');
        }
    }
    //idea delete livewire-tmp
    public function cleanUp()
    {
        $files = Storage::files('livewire-tmp');
        foreach ($files as $file) {
            Storage::delete($file);
        }
    }
    //idea edit category
    public function editCategory($id)
    {
        $category = Category::find($id);
        if ($category) {
            $this->id = $category->id;
            $this->name = $category->name;
            $this->description = $category->description;
            $this->parent_id = $category->parent_id;
            $this->status = $category->status;
            $this->image_edit = $category->image;
        } else {
            session()->flash('error', 'Who deleted it :))))');
        }
    }
    public function updateCategory()
    {
        $data = $this->validate([
            'name' => 'required|unique:categories,name,' . $this->id,
            'description' => 'required',
            'parent_id' => 'required',
            'status' => 'required|numeric|in:0,1',
        ]);
        if ($data) {
            try {
                $category = Category::find($this->id);
                if ($category) {
                    $data = $this->moveFile($data);
                    $data['slug'] = Str::slug($data['name']);
                    $data['meta_title'] = $data['name'];
                    $data['meta_keyword'] = Str::slug($data['name']);
                    $data['meta_description'] = substr($data['description'], 0, 20);
                    $category->update($data);
                    $this->cleanUp();
                    session()->flash('success', 'Category updated successfully');
                    $this->resetInput();
                    return;
                } else {
                    session()->flash('error', 'Who deleted it :))))');
                }
            } catch (\Throwable $th) {
                Log::info($th->getMessage());
            }
        }
        session()->flash('error', 'Category updated failed');
    }
    public function searchParentID($id)
    {
        $this->parent_id = $id;
    }
    public function searchStatus($id)
    {
        $this->status = $id;
    }
    public function findSearchParentID($categoriess)
    {
        if ($this->parent_id == 0 || $this->parent_id > 0) {
            $categoriess = $categoriess->where('parent_id', $this->parent_id);
        }
        return $categoriess;
    }
    public function findSearchStatus($categoriess)
    {
        $categoriess = $categoriess->where('status', $this->status);
        return $categoriess;
    }
    public function searctext()
    {
        $categoriess = Category::where('id', 'like', '%' . $this->search . '%')
            ->orWhere('name', 'like', '%' . $this->search . '%');
        return $categoriess;
    }
}
