<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Exception;
use Livewire\Component;

class ServicePay extends Component
{
    public $service;

    protected $listeners = ['singlePaymentMethodCreate'];

    public function mount(Service $service)
    {
        $this->service = $service;
    }

    public function render()
    {
        return view('livewire.service-pay');
    }

    public function singlePaymentMethodCreate($singlePaymentMethod)
    {
        try {

            auth()->user()->charge($this->service->price * 100, $singlePaymentMethod);
            $this->emit('resetStripe');

        } catch (Exception $e) {

            $this->emit('errorPayment');
        }
    }

}
