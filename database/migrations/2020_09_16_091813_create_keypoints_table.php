<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeypointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keypoints', function (Blueprint $table) {
            $table->id();
            $table->integer('property_id');
            $table->string('bedroom')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('area')->nullable();
            $table->string('parking')->nullable();
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
        Schema::dropIfExists('keypoints');

        Schema::table('keypoints', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
