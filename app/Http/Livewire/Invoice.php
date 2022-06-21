<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Invoice extends Component
{
    protected $listeners = ['render'];

    public function render()
    {
        $invoices = auth()->user()->invoices();
        return view('livewire.invoice', compact('invoices'));
    }
}
