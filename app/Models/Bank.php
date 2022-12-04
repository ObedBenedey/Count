<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model {
    use HasFactory, SoftDeletes;

    protected $table = "banks";

    protected $fillable = ["name"];

    protected $guarded = ["id"];

    /* Relaciones con base de datos */
    public function cards() {
        return $this->hasMany(Card::class);
    }
}
