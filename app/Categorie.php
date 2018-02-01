<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorie extends Model
{
  use SoftDeletes;
  protected $dates = ['deleted_at'];
  public $timestamps = false;
  protected $table = 'categories';
  protected $primaryKey = 'id_categorie';
  protected $fillable = ['libelle_categorie'];
}
