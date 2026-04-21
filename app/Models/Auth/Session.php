<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = 'sessions';

    public $timestamps = false; 

    protected $fillable = [
        'user_id',
        'session_token',
        'ip_address',
        'user_agent',
        'login_at',
        'logout_at',
        'expires_at',
        'created_at',
    ];

    protected $casts = [
        'login_at' => 'datetime',
        'logout_at' => 'datetime',
        'expires_at' => 'datetime',
        'created_at' => 'datetime',
    ];

    /*
    |----------------------------------------
    | RELATIONSHIP
    |----------------------------------------
    */

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
