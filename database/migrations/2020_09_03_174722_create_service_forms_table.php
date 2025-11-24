<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_forms', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('identification');
            $table->string('mobile_number');
            $table->enum('gender', ['male', 'female']);
            $table->enum('service_type', ['sponsoring_an_orphan_student', 'sponsoring_a_needy_student', 'financial_aid']);
            $table->longText('address')->nullable();
            $table->longText('notes')->nullable();
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
        Schema::dropIfExists('service_forms');
    }
}
