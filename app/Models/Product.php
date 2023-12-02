<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static where(string $string, string $string1, string $id)
 */
class Product extends Model
{
  use HasFactory;

  protected $fillable = ['name', 'description', 'quantity', 'price', 'category_id'];

  /** Обратная связь один ко многим (FK -> PK) **/
  public function category(): BelongsTo
  {
    return $this->belongsTo(Category::class);
  }
}
