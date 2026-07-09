<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nim')->nullable()->unique()->after('name');
            $table->string('program_studi')->nullable()->after('nim');
            $table->string('kelas')->nullable()->after('program_studi');
            $table->string('no_hp', 20)->nullable()->after('email');
            $table->string('status', 30)->default('Mahasiswa Aktif')->after('kelas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['nim', 'program_studi', 'kelas', 'no_hp', 'status']);
        });
    }
};
