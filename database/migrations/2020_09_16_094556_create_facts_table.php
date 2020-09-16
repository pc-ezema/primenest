<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facts', function (Blueprint $table) {
            $table->id();
            $table->integer('property_id');
            $table->string('livingroom')->nullable();
            $table->string('garage')->nullable();
            $table->string('bedroom')->nullable();
            $table->string('bathroom')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facts');

        Schema::table('amenities', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
