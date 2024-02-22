<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
//            $table->smallInteger('type')->nullable(false)->default(1)->comment("1 - textfield | 2 - textarea | 3 - checkbox | 4 - select | 5 - integer | 6 - decimal | 7 - currency | 8 - percentage | 9 - color | 10 - range | 11 - json_array");
//            $table->string('group')->nullable();
//            $table->string('name');
//            $table->string('slug')->index();
//            $table->text('options')->nullable();
//            $table->text('value')->nullable();
//            $table->smallInteger('order')->nullable(false)->default(0);
//            $table->boolean('validate_cc');
//            $table->boolean('validate_address');
            $table->boolean('require_cc_vote_create');
            $table->boolean('require_address_vote_create');
            $table->boolean('allow_change_lang');
            $table->string('map_lat');
            $table->string('map_lng');
            $table->string('email_cm')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->string('website_cm')->nullable();
            $table->string('telephone_cm')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
