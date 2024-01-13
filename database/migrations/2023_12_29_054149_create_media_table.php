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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('domain')->unique();            
            $table->foreignId('user_id')->constrained();

            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->enum('renew', ['yes', 'no', 'pending'])->default('no');
            $table->string('renew_upto')->nullable();
            $table->string('dprotocol');
            $table->string('domain_nepali')->nullable();
            $table->string('name_server1')->nullable();
            $table->string('name_server2')->nullable();
            $table->string('server_type')->nullable();
            $table->string('registration_date')->nullable();
            $table->string('redirection')->nullable();
            $table->string('doi_registration_number')->nullable();
            $table->string('company')->nullable();
            $table->string('company_pan_vat_number')->nullable();
            $table->string('company_registration_number')->nullable();
            $table->string('company_contact')->unique();
            $table->string('company_email')->unique(); 

            $table->string('editor')->nullable();
            $table->string('editor_nepali')->nullable();
            $table->string('editor_gender')->nullable();
            $table->string('editor_citizen_number')->nullable();
            $table->string('editor_citizen_district')->nullable();
            $table->string('editor_contact')->nullable();
            $table->string('editor_email')->nullable();
            
            $table->string('director')->nullable();
            $table->string('director_nepali')->nullable();
            $table->string('director_gender')->nullable();
            $table->string('director_citizen_number')->nullable();
            $table->string('director_citizen_district')->nullable();
            $table->string('director_contact')->nullable();
            $table->string('director_email')->nullable();
            
            $table->string('province')->nullable();
            $table->string('district')->nullable();
            $table->string('municipality')->nullable();
            $table->string('ward')->nullable();
            $table->string('tole')->nullable();
            $table->string('language')->nullable();
            $table->string('fiscal_year')->nullable();
            $table->enum('bachlor_in_jmc', ['yes', 'no'])->nullable();
            $table->enum('is_reguar', ['yes', 'no'])->default('yes')->nullable();
            $table->enum('is_black_listed', ['yes', 'no'])->default('no')->nullable();
            $table->string('old_domain')->nullable();
            $table->string('domain_changed_date')->nullable();
            $table->string('old_company')->nullable();
            $table->string('company_changed_date')->nullable();
            $table->string('old_editor')->nullable();
            $table->string('editor_changed_date')->nullable();
            $table->string('link_youtube')->nullable();
            $table->string('link_facebook')->nullable();
            $table->string('link_twitter')->nullable();
            
            $table->string('application')->nullable();
            $table->string('black_listed_request_letter')->nullable();
            $table->string('company_registration_proof')->nullable();
            $table->string('decision')->nullable();
            $table->string('domain_detail')->nullable(); 
            $table->string('director_photo')->nullable(); 	
            $table->string('director_citizenship')->nullable(); 	
            $table->string('director_signature')->nullable(); 	
            $table->string('editor_photo')->nullable();
            $table->string('editor_citizenship')->nullable();
            $table->string('media_registration_proof')->nullable();
            $table->string('niyamawali')->nullable();	
            $table->string('pan_vat_proof')->nullable(); 
            $table->string('payment_voucher')->nullable();
            $table->string('prabandh_patra')->nullable(); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
