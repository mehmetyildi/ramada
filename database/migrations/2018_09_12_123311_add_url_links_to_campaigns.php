<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUrlLinksToCampaigns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::table('campaigns', function($table){
            $table->string('url_en')->nullable();
            $table->string('url_tr')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('campaigns', function($table){
            $table->dropColumn('url_en')->nullable();
            $table->dropColumn('url_tr')->nullable();
        });
    }
}
