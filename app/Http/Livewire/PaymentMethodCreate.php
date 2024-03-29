<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PaymentMethodCreate extends Component
{
    protected $listeners = ['paymentMethodCreate' => 'paymentMethodCreate'];

    public function render()
    {
        $this->emit('resetStripe');

        return view('livewire.payment-method-create', [
            'intent' => auth()->user()->createSetupIntent()
        ]);
    }

    public function paymentMethodCreate($paymentMethod)
    {
        auth()->user()->addPaymentMethod($paymentMethod);
        auth()->user()->updateDefaultPaymentMethod($paymentMethod);


        $this->emitTo('payment-method-list', 'render');
        $this->emitTo('subscriptions', 'render');
    }
}
