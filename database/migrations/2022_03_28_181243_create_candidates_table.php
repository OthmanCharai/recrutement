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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->text('first_name');
            $table->text('last_name');
            $table->text('driver_licence');
            $table->date('birthday');
            $table->text('Country');
            $table->text('city');
            $table->text('phone');
            $table->text('description');
            $table->text('address');
            $table->text('image');
            $table->text('language');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::table('candidates',function(Blueprint $table){
            $table->dropForeign('candidates_user_id_foreign');
        });
        Schema::dropIfExists('candidates');
    }
};
