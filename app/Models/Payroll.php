<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payroll extends Model {
    use HasFactory, SoftDeletes;

    protected $table = "payrolls";

    protected $fillable = [
        "profile_id", "day", "amount",
        "domiciled", "debt"
    ];

    protected $guarded = ["id"];

    /* Relaciones con base de datos */
    public function profile() {
        return $this->belongsTo(Profile::class);
    }
}
