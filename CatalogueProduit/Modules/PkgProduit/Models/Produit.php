<?php

namespace Modules\PkgProduit\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Produit extends Model
{
  
    protected $table = 'produits';

    protected $fillable = [
       'name',
       'stock',
       'price',
    ];








}
