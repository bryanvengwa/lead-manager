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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("lead_type")->default('agent_based');
            $table->enum('status',['accepted','denied','call back','pending','survey booked','survey conducted','installed',''])->default('pending');
            $table->string('first_name');
//            $table->foreignId('benefit_id');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('postal_code');
            $table->Integer('contact_number_1');
            $table->Integer('contact_number_2')->nullable();
            $table->string('email_address');
            $table->date('date_of_birth');
            $table->enum('energy_rating',['E','A','F','G','no EPC'])->nullable();
            $table->enum('boiler_type',['non condensing boiler','back boiler','condensing boiler','combination boiler'])->nullable();
            $table->integer('boiler_years')->nullable();
            $table->string('boiler_model')->nullable();
            $table->enum('heating_timer',['yes','no'])->nullable();
            $table->enum('room_thermostat',['yes','no'])->nullable();
            $table->enum('radiator-dials',['yes','no'])->nullable();
            $table->enum('radiator_availability',['yes','no'] )->nullable();
            $table->enum('secondary_heating',['yes','no','wood or log burners','electric heater'])->default('no')->nullable();
            $table->enum('property_type',['detached','semi_detached','terraced','bungalow','flat'])->nullable();
            $table->date('build_year')->nullable();
            $table->integer('number_of_bedrooms')->nullable();
            $table->boolean('habitable_rooms_unheated')->nullable();
            $table->string('habitable_rooms_unheated_notes')->nullable();
            $table->boolean('extensions_on_property')->nullable();
            $table->string('extensions_on_property_notes')->nullable();
            $table->date('extension_built_date')->nullable();
            $table->boolean('rooms_in_the_roof_or_loft_space')->nullable();
            $table->date('RIR_built_date')->nullable();
            $table->enum('floor_type',['concrete floor','suspended wooden floorboards','both'])->nullable();
            $table->enum('property_wall_type',['cavity walls and they have been filled','solid brick', 'no cavity'])->nullable();
            $table->string('property_wall_type_notes')->nullable();
            $table->boolean('any_insulation_installed')->nullable();
            $table->string('wall_insulation_notes')->nullable();
            $table->enum('loft_insulation_thickness',['above','below','middle'])->nullable();
            $table->enum('glaze_type',['fully double glazed','partially double glazed'])->nullable();
            $table->boolean('solar_or_ASHP')->nullable();
            $table->boolean('income_based_job_seekers_allowance')->nullable();
            $table->boolean('income_related_employment')->nullable();
            $table->boolean('income_support')->nullable();
            $table->boolean('pension_credit')->nullable();
            $table->boolean('working_tax_credit')->nullable();
            $table->boolean('child_tax_credit')->nullable();
            $table->boolean('universal_credit')->nullable();
            $table->boolean('housing_benefit')->nullable();
            $table->boolean('child_benefit_where')->nullable();
            $table->boolean('thermostat_Attachment')->nullable();
            $table->dateTime('call_back_time')->nullable();
            $table->string('rating_notes')->nullable();
            $table->enum('heating_times' , ['yes' ,'no'])->nullable();
            $table->string('password')->nullable();
            $table->uuid('submission_ID')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};

