<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sujet extends Model
{
   use SoftDeletes;
  protected $dates = ['deleted_at'];
  public $timestamps = false;
  protected $table = 'sujets';
  protected $primaryKey = 'id_sujet';
  protected $fillable = ['libelle_sujet','id_categorie'];
}
