<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
  protected $table = 'supplier';
  protected $fillable = [
            'company_name',
            'contact_name',
            'address',
            'city',
            'region',
            'postal_code',
            'country',
            'phone',
            'email',
            'website',
            'vat_number',
          ];
}
