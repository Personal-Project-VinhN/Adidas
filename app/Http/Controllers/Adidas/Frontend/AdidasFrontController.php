<?php

namespace App\Http\Controllers\Adidas\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AdidasFrontController extends Controller
{
    public function index () {
        return view ("Adidas.frontend.index");
    }
    public function checkout () {
        return view ("Adidas.frontend.checkout");
    }
    public function login () {
        return view ("Adidas.frontend.login");
    }
    public function register () {
        return view ("Adidas.frontend.register");
    }
    public function shop () {
        return view ("Adidas.frontend.shop");
    }
    public function single () {
        return view ("Adidas.frontend.single");
    }
}
