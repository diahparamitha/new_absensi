<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
  use HasFactory;
  protected $table = "campus";
  protected $guarded = [];

  public function supervisor()
  {
    return $this->hasMany(Supervisors::class);
  }
}
