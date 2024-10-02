<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',  // Assuming transactions are tied to categories
        'amount',
        'date',
        'description',
        'user_id',      // This is likely the missing field causing the error
    ];

    /**
     * Relationship to Category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relationship to User (if transactions are tied to users).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
