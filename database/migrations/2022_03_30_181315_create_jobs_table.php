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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('description');
            $table->text('type');
            $table->text('salary');
            $table->text("experience");
            $table->text('gender');
            $table->date('deadline_date');
            $table->text('country');
            $table->text('city');
            $table->text('address');
            $table->text('image');
            $table->foreignId('employe_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::table('jobs',function(Blueprint $table){
            $table->dropForeign('jobs_employe_id_foreign');
        });
        Schema::dropIfExists('jobs');
    }
};
