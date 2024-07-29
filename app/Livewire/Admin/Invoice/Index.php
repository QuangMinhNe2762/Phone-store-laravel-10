<?php

namespace App\Livewire\Admin\Invoice;

use App\Models\Oder;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = "";
    public function render()
    {
        $invoices = $this->showAllInvoice();
        if ($this->search) {
            $invoices = $this->searchText();
        }
        $invoices = $invoices->paginate(5);
        if (count($invoices) == 0) {
            session()->flash('error', 'No results found');
        }
        return view('livewire.admin.invoice.index', ['invoices' => $invoices])->extends('Admin.Layouts.adminApp', ['title' => 'invoice list'])->section('content');
    }
    public function showAllInvoice()
    {
        return Oder::whereColumn('id', 'order_id')->orderby('id', 'desc');
    }
    public function searchText()
    {
        $invoices = Oder::where('order_id', 'like', '%' . $this->search . '%')->orWhere('Name', 'like', '%' . $this->search . '%')
            ->orWhere('Phone', 'like', '%' . $this->search . '%')->orWhere('created_at', 'like', '%' . $this->search . '%')
            ->orWhere('Email', 'like', '%' . $this->search . '%');
        return $invoices;
    }
}
