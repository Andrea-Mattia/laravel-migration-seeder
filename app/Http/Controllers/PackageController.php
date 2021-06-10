<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class PackageController extends Controller
{
    public function index() {

        // Get all packages and paginating
        $packages = Package::paginate(5);

        return view('home', compact('packages'));
    }
}
