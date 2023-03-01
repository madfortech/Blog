<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Schema::table('posts', function (Blueprint $table) {
        //     $table->unsignedBigInteger('post_id')->nullable();
        //     $table->foreign('post_id', 'post__id_fk_6685127')->references('id')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // Schema::dropIfExists('posts');
    }
};
