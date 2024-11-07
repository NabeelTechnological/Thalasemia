<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('website_statistics', function (Blueprint $table) {
        $table->id();  // Kolom ID otomatis
        $table->integer('views')->default(0);  // Kolom untuk menyimpan jumlah views
        $table->integer('button_clicks')->default(0);  // Kolom untuk menyimpan jumlah klik tombol
        $table->timestamps();  // Kolom created_at dan updated_at otomatis
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_statistics');
    }
};
