<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsuranceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_insurance', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('image_url')->nullable();
            $table->string('email')->unique();
            $table->decimal('net_rate', 8, 3);
            $table->decimal('bipd', 8, 2);
            $table->decimal('tax', 8, 3);
            $table->decimal('other', 8, 2);
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
        Schema::dropIfExists('tbl_insurance');
    }
}
