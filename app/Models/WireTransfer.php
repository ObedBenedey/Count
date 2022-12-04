<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WireTransfer extends Model {
    use HasFactory, SoftDeletes;
    
    protected $table = "wire_transfers";

    protected $fillable = [
        "profile_id", "amount", "day", 
        "bill", "concept", "spei"
    ];

    protected $guarded = ["id"];

    /* Relaciones con base de datos */
    public function profile() {
        return $this->belongsTo(Profile::class);
    }
}
