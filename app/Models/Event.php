<?php

namespace App\Models;

use App\Models\Status;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = "events";

    protected $fillable = [
        'id',
        'user_id',
        'tipo',
        'accion',
        'nota',
        'metodo',
        'cantidad',
        'status',
        'cuentaBeneficiario',
        'bancoBeneficiario',
        'tipoCuenta',
        'telefonoBeneficiario'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function getConstatusAttribute()
    {
        
        $estado = $this->status ? $this->status : 1;
        return Status::find($estado)->type;
        
    }

    // public function hasStatus()
    // {
    //   return Status::find($this->status)->first();
    //   // return $this->hasMany('App\Models\Status');
    // }

    // public function notifications()
    // {
    //   return $this->hasMany('App\Models\Notification');
    // }

    // public function donations()
    // {
    //   return $this->hasMany('App\Models\Donation');
    // }

    // public function shareds()
    // {
    //   return $this->hasMany('App\Models\Shareds');
    // }

    // public function points()
    // {
    //   return $this->hasMany('App\Models\Point');
    // }

    // public function partners()
    // {
    //   return $this->hasMany('App\Models\Partner');
    // }

}
