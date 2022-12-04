<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model {
    use HasFactory, SoftDeletes;

    protected $table = "profiles";

    protected $fillable = [
        "user_id", "first_name", "last_name", "phone_number", "age",
        "gender", "address", "buro", "curp", "rfc", "does_invoice", "occupation"
    ];

    protected $guarded = ["id"];

    /* Relaciones con base de datos */
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function payrolls() {
        return $this->hasMany(Payroll::class);
    }

    public function leases() {
        return $this->hasMany(Lease::class);
    }

    public function wireTransfers() {
        return $this->hasMany(WireTransfer::class);
    }


}
