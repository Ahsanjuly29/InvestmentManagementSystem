<?php

namespace App\Http\Controllers\Investment;

use App\Http\Controllers\Controller;
use App\Models\Investment\Lender;
use Illuminate\Http\Request;

class LenderController extends Controller
{
    public function x()
    {
        // echo "LenderController";
    }
}

$x = new Lender(10);
// echo '<pre>';
// print_r($x->x());


$y = new Lender(50);
// echo '<pre>';
// print_r($y->x());
