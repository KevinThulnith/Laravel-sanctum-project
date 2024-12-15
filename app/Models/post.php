<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class post extends Model
{
    use HasFactory;
    // !Tabel editable fields
    protected $fillable = ['title', 'body'];

    public function user()
    {
        // TODO: Add forieng-key relation
        return $this->belongsTo(User::class);
    }
}
