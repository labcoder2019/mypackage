<?php

namespace Labcoder2019\MyPackage\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Labcoder2019\MyPackage\Facades\MyPackage;

class MyPackageController extends Controller
{

    public function demo() {
        return MyPackage::welcome();
    }

}
