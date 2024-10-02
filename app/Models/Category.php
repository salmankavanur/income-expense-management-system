<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Define the inverse relationship: Category has many Transactions.
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
