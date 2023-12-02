<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static where(string $string, string $string1, string $id)
 */
class Category extends Model
{
  use HasFactory;

  protected $fillable = ['name'];

  /** Связь один ко многим (PK -> FK) **/
  public function products(): HasMany
  {
    return $this->hasMany(Product::class);
  }

}
