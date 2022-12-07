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
    public function saveProfile($data) {
        $this->user_id = auth()->user()->id;
        $this->first_name = $data['first_name'];
        $this->last_name = $data['last_name'];
        $this->phone_number = $data['phone_number'];
        $this->age = $data['age']; 
        $this->gender = $data['gender'];    
        $this->address = $data['address'];  
        $this->buro = $data['buro']; 
        $this->curp = $data['curp'];    
        $this->rfc = $data['rfc'];
        $this->does_invoice = $data['does_invoice'];    
        $this->occupation = $data['occupation'];     
        $this->save();
        return 1;
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
