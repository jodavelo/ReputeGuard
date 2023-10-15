<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ip_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ip_id');
            $table->foreign('ip_id')->references('id')->on('ips')->onDelete('cascade');
            
            // Campos nulables basados en la versión gratuita del JSON
            $table->boolean('success')->nullable();
            $table->string('message')->nullable();
            $table->integer('fraud_score')->nullable();
            $table->string('country_code')->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('ISP')->nullable();
            $table->integer('ASN')->nullable();
            $table->string('organization')->nullable();
            $table->boolean('is_crawler')->nullable();
            $table->string('timezone')->nullable();
            $table->boolean('mobile')->nullable();
            $table->string('host')->nullable();
            $table->boolean('proxy')->nullable();
            $table->boolean('vpn')->nullable();
            $table->boolean('tor')->nullable();
            $table->boolean('active_vpn')->nullable();
            $table->boolean('active_tor')->nullable();
            $table->boolean('recent_abuse')->nullable();
            $table->boolean('bot_status')->nullable();
            $table->string('connection_type')->nullable();
            $table->string('abuse_velocity')->nullable();
            $table->string('zip_code')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('request_id')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ip_details');
    }
}
