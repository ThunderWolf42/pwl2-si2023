<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function get_supplier()
    {
        //get all supplier
        $sql = $this->select("suppliers.*");

        return $sql;
    }
}
