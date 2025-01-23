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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company_code')->unique();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('logo')->nullable(); 
            $table->string('website')->nullable();
            $table->string('industry')->nullable();
            $table->integer('employee_count')->nullable();
            $table->decimal('annual_revenue')->nullable();
            $table->string('registration_number')->unique()->nullable();
            $table->string('tax_id')->unique()->nullable();
            $table->text('description')->nullable();
            $table->date('founded_date')->nullable();
            $table->string('slug')->unique()->after('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
