<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {

        $services = Service::paginate(9);

        return view('welcome', compact('services'));
    }

    public function pay(Service $service)
    {
        return view('services.pay', compact('service'));
    }
}
