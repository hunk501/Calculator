<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInsuranceType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_insurance_type', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('insurance_id_fk');
            $table->string('insurance_type');
            $table->decimal('net_rate', 8, 2);
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
        Schema::dropIfExists('tbl_insurance_type');
    }
}
