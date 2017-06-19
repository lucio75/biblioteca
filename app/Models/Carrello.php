<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrello extends Model
{
    public function ePieno()
    {
        $prodottiCarrello = 0;

        If($prodottiCarrello > 0)
        {
            return true;
        }
        return false;
    }
}
