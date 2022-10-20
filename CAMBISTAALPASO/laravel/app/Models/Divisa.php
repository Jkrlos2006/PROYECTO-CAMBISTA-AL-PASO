<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Divisa extends Model
{
      protected $table = 'divisas';
      protected $primaryKey = 'id';
      public $incrementing = true;
      protected $keyType = 'integer';
}