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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('province');
            $table->text('contact_message');
            // Add other inquiry-related fields as needed
            $table->timestamps();
        });

    /*    Schema::table('inquiries', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });*/
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
