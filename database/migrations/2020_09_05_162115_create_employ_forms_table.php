<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employ_forms', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('identification');
            $table->string('birthday');
            $table->string('mobile_number');
            $table->enum('gender', ['male', 'female']);
            $table->enum('order_type', ['employ_order', 'volunteer_order']);
            $table->string('qualification');
            $table->string('specialization');
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
        Schema::dropIfExists('employ_forms');
    }
}
