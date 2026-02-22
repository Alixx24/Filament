<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['phone', 'email', 'title','user_id','description'];
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
