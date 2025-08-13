<?php

namespace App\Http\Controllers;

use App\TestClass;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index()
    {
        // إنشاء Object من الكلاس
        $obj = new TestClass();

        // استدعاء دالة من الكائن
        return $obj->sayHello();
    }
}
