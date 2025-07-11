<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('murid', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nis')->unique();
            $table->string('kelas')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    
    public function down(): void
    {
        Schema::dropIfExists('murid');
    }
};
