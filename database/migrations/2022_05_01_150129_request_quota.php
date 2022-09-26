<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RequestQuota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_quota', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('file');
            $table->string('state');
            $table->string('company_name');
            $table->string('consultant');
            $table->string('project_name');
            $table->string('tax')->nullable();
            $table->string('registration')->nullable();
            $table->string('type');
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
