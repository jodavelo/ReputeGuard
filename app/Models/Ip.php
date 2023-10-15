<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ip extends Model
{
    use HasFactory;
    protected $table = 'ips';

    protected $fillable = ['address'];

    public function details() 
    {
        return $this->hasMany(IpDetail::class);
    }
}
