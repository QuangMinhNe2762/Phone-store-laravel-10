<?php

namespace App\Livewire\Admin\Colors;

use App\Models\Color;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $id, $name, $status = 0;
    public $code = "#000000";

    public $search;
    public function render()
    {
        $colors = Color::orderBy('id', 'DESC');
        if ($this->status) {
            $colors = $this->findSearchStatus($colors);
        }
        if ($this->search) {
            $colors = $this->searctext($colors);
        }
        $colors = $colors->paginate(5);
        if (count($colors) == 0) {
            session()->flash('error', 'No results found');
        }
        return view('livewire.admin.colors.index', ['colors' => $colors])->extends('Admin.Layouts.adminApp', ['title' => 'color list'])->section('content');
    }
    public function rules()
    {
        return [
            'name' => 'required|unique:colors,name,' . $this->id,
            'code' => 'required|unique:colors,code,' . $this->id,
            'status' => 'required|numeric|in:0,1'
        ];
    }
    //idea reset input
    public function resetInput()
    {
        $this->name = '';
        $this->code = '#000000';
        $this->status = 0;
    }
    //idea store color
    public function storeColor()
    {
        $data = $this->validate();
        if ($data) {
            try {
                Color::create($data);
                session()->flash('success', 'Color created successfully');
                $this->resetInput();
                return;
            } catch (\Throwable $th) {
                Log::info($th->getMessage());
            }
        }
        session()->flash('error', 'Color created failed');
    }
    //idea delete color
    public function destroyColor($id)
    {
        try {
            $color = Color::find($id);
            if ($color) {
                $color->delete();
                session()->flash('success', 'Color deleted successfully');
            } else {
                session()->flash('error', 'Who deleted it :))))');
            }
        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            session()->flash('error', 'Color deleted failed');
        }
    }
    //idea edit color
    public function editColor($id)
    {
        $color = Color::find($id);
        if ($color) {
            $this->id =  $color->id;
            $this->name =  $color->name;
            $this->code =  $color->code;
            $this->status = $color->status;
        }
    }
    //idea update color
    public function updateColor()
    {
        $data = $this->validate();
        if ($data) {
            try {
                $Color = Color::find($this->id);
                if ($Color) {
                    $Color->update($data);
                    session()->flash('success', 'Color updated successfully');
                    $this->resetInput();
                    return;
                } else {
                    session()->flash('error', 'Who deleted it :))))');
                }
            } catch (\Throwable $th) {
                Log::info($th->getMessage());
            }
        }
        session()->flash('error', 'Color updated failed');
    }
    public function searchStatus($id)
    {
        $this->status = $id;
    }
    public function findSearchStatus($colors)
    {
        $colors = $colors->where('status', $this->status);
        return $colors;
    }
    public function searctext()
    {
        $colors = Color::where('id', 'like', '%' . $this->search . '%')
            ->orWhere('name', 'like', '%' . $this->search . '%')->orWhere('code', 'like', '%' . $this->search . '%');
        return $colors;
    }
}
