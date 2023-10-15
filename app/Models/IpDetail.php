<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IpDetail extends Model
{
    use HasFactory;
    protected $table = 'ip_details';

    protected $fillable = [
        'fraud_score', 'country_code', 'region', 'city', 'ISP', 'ASN', 
        'organization', 'is_crawler', 'timezone', 'mobile', 'host', 
        'proxy', 'vpn', 'tor', 'active_vpn', 'active_tor', 'recent_abuse',
        'bot_status', 'connection_type', 'abuse_velocity', 'zip_code', 
        'latitude', 'longitude', 'request_id'
    ];

    public function ip() 
    {
        return $this->belongsTo(Ip::class);
    }
}
