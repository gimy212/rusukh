<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('mini_title');
            $table->string('slider_title');
            $table->text('slider_content');
            $table->string('serv_title1');
            $table->text('serve_content1');
            $table->string('serv_title2');
            $table->text('serve_content2');
            $table->string('serv_title3');
            $table->text('serve_content3');
            $table->string('serv_title4');
            $table->text('serve_content4');
            $table->string('prod_title');
            $table->string('prod_bio');
            $table->text('prod_desc');
            $table->string('provide');
            $table->string('prov_title1');
            $table->text('prov_desc1');
            $table->string('prov_title2');
            $table->text('prov_desc2');
            $table->string('prov_title3');
            $table->text('prov_desc3');
            $table->string('crt_title1');
            $table->string('crt_count1');
            $table->string('crt_title2');
            $table->string('crt_count2');
            $table->string('crt_title3');
            $table->string('crt_count3');
            $table->string('crt_title4');
            $table->string('crt_count4');
            $table->string('message_title');
            $table->text('message_content');
            $table->string('message_author');
            $table->string('partener');
            $table->string('part_title');
            $table->text('part_content');
            $table->string('choose');
            $table->string('cho_title1');
            $table->text('cho_content1');
            $table->string('cho_title2');
            $table->text('cho_content2');
            $table->string('review_name');
            $table->text('review_content');
            $table->text('quota_content');
            $table->text('footer_bio');
            $table->string('email');
            $table->string('number');
            $table->string('address');

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
        Schema::dropIfExists('contents');
    }
}
