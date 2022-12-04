<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lease extends Model {
    use HasFactory, SoftDeletes;

    protected $table = "leases";

    protected $fillable = [
        "profile_id", "payment_date", "rate",
        "opening", "cat"
    ];

    protected $guarded = ["id"];

    /* Relaciones con base de datos */
    public function profile() {
        return $this->belongsTo(Profile::class);
    }
}
