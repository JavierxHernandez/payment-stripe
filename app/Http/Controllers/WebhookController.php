<?php

namespace App\Http\Controllers;

use Laravel\Cashier\Http\Controllers\WebhookController as CashierController;

class WebhookController extends CashierController
{
    public function customerSubscriptionCreated($payload)
    {
        # Enviar correo...
    }
}
