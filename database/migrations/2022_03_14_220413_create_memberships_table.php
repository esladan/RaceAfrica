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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->string('sur_name')->nullable();
            $table->string('other_names')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('cr')->nullable();
            $table->string('csr')->nullable();
            $table->string('uni')->nullable();
            $table->string('wi')->nullable();
            $table->string('are')->nullable();
            $table->string('how')->nullable();
            $table->string('howt')->nullable();
            $table->string('do')->nullable();
            $table->text('ex')->nullable();
            $table->string('please')->nullable();
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
        Schema::dropIfExists('memberships');
    }
};
