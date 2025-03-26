<?php

namespace Modules\PkgProduit\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Rule extends Model
{
  
    protected $table = 'rules';

   protected $fillable = [
       'label',
       'expression'
   ];








}
