<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\Exception\PartialFileException;

class Maintenance extends Model
{
    use HasFactory;

    public function repairMan()
    {
        return $this->belongsTo(User::class);
    }

    public function machine()
    {
        return $this->belongsTo(Machine::class);
    }

    public function part()
    {
        return $this->belongsTo(SparePart::class);
    }
}
