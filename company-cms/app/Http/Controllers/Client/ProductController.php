<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Method untuk menampilkan halaman Custom Software Development
    public function customSoftware()
    {
        return view('client.products.custom-software');
    }

    // Method untuk menampilkan halaman Integrated Monitoring Solutions
    public function monitoringSolutions()
    {
        return view('client.products.monitoring-solutions');
    }

    // Method untuk menampilkan halaman Enterprise Digital Solutions
    public function digitalSolutions()
    {
        return view('client.products.digital-solutions');
    }

    // Method untuk menampilkan halaman Infrastructure & Managed Services
    public function infrastructureServices()
    {
        return view('client.products.infrastructure-services');
    }
}