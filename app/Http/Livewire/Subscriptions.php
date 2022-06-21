<?php

namespace App\Http\Livewire;

use Laravel\Cashier\Exceptions\IncompletePayment;
use Livewire\Component;

class Subscriptions extends Component
{
    protected $listeners = ['render'];
    public $price, $coupon;
    public $name = "Course Stripe";

    public function mount($price)
    {
        $this->price = $price;

    }

    public function render()
    {
        return view('livewire.subscriptions');
    }

    public function newSubscription()
    {

        try {
            if ($this->coupon) {
                auth()->user()->newSubscription($this->name, $this->price)
                // ->trialDays(7)
                ->withCoupon($this->coupon)
                ->create();

            }else{
                auth()->user()->newSubscription($this->name, $this->price)
                // ->trialDays(7)
                ->create();
            }

            $this->emitTo('invoice', 'render');
            $this->emitTo('subscriptions', 'render');

        } catch (IncompletePayment $exception) {
            return redirect()->route(
                'cashier.payment',
                [$exception->payment->id, 'redirect' => route('billing.index')]
            );
        }
    }

    public function changePlan()
    {
        auth()->user()->subscription($this->name)->swap($this->price);
        $this->emitTo('invoice', 'render');
        $this->emitTo('subscriptions', 'render');
    }

    public function cancelSubscription()
    {
        auth()->user()->subscription($this->name)->cancel();
        $this->emitTo('subscriptions', 'render');
    }

    public function resumeSubscription()
    {
        auth()->user()->subscription($this->name)->resume();
        $this->emitTo('subscriptions', 'render');
    }
}
