<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listings', function (Blueprint $table) {
            $table->unsignedTinyInteger('beds');
            $table->unsignedTinyInteger('baths');
            $table->unsignedSmallInteger('area');

            $table->tinyText('city');
            $table->tinyText('code');
            $table->tinyText('street');
            $table->tinyText('street_nr');

            $table->unsignedInteger('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('listings', function (Blueprint $table) {
        // $table->dropColumn('beds');
        // $table->dropColumn('baths');
        // $table->dropColumn('area');

        // $table->dropColumn('code');
        // $table->dropColumn('street');
        // $table->dropColumn('street_nr');

        // $table->dropColumn('price');
        // });
        Schema::dropColumn('listings', ['beds', 'baths', 'area', 'city', 'code', 'street', 'street_nr', 'price']);
    }
};
