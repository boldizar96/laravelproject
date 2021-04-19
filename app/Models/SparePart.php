<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SparePart extends Model
{
    use HasFactory;

    public function Machines()
    {
        return $this->belongsToMany(Machine::class);
    }

    public function Stock()
    {
        return $this->belongsTo(Stock::class);
    }
}
