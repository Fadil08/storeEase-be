<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_name');
            $table->string('vendor_email')->unique();
            $table->string('vendor_password');
            $table->string('vendor_phone');
            $table->string('detail_alamat_vendor')->nullable();
            $table->string('kabupaten_vendor')->nullable();
            $table->string('kecamatan_vendor')->nullable();
            $table->string('kelurahan_vendor')->nullable();
            $table->string('link_facebook_vendor')->nullable();
            $table->string('link_instagram_vendo')->nullable();
            $table->string('provinsi_vendor')->nullable();
            $table->string('vendor_category_service_id')->nullable();
            $table->string('link_websait_vendor')->nullable();
            $table->string('link_websait_vendor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
