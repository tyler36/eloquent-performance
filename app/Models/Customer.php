<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'sales_rep_id');
    }


    /**
     * Summary of scopeVisibleTo
     * @param Builder $query
     * @param User $user
     * @return Builder
     */
    public function scopeVisibleTo($query, User $user)
    {
        if ($user->is_owner) {
            return;
        }

        $query->where('sales_rep_id', $user->id);
    }
}
