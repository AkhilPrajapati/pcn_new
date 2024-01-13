<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('renews', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('media_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('fiscal_year');
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->string('renewed_on')->nullable();
            $table->string('renewed_by')->nullable();
            $table->string('remark')->nullable();
            $table->string('rejection_reason')->nullable();

            $table->string('application');
            $table->string('audit_report');
            $table->string('company_renewal');
            $table->string('minute');
            $table->string('payment_voucher');
            $table->string('tax_clearance');
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
