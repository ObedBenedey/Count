<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model {
    use HasFactory, SoftDeletes;

    protected $table = "cards";

    protected $fillable = [
        "profile_id", "bank_id", "type", "interest_day",
        "amount", "minimum", "cutting_tip"
    ];

    protected $guarded = ["id"];

    /* Relaciones con base de datos */
    public function profile() {
        return $this->belongsTo(Profile::class);
    }

    public function bank() {
        return $this->belongsTo(Bank::class);
    }
}
