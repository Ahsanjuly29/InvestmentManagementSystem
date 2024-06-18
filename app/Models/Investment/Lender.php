<?php

namespace App\Models\Investment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lender extends Model
{
    use HasFactory;

    public $x;
    function __construct($x) {
        $this->x = (int) $x;

        echo '<br><br><br><br><br><pre>';
        print_r($this);
        echo '<br><br><br><br><br></pre>';


    }

    public function x()
    {
        // echo "testX </br>" . $this->x;
    }


}
