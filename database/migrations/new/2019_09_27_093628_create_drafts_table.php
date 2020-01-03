<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDraftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drafts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('version_number', 100);
            $table->bigInteger('draft_type_id')->unsigned();
            $table->foreign('draft_cat_id')->references('id')->on('draft_categories')->onDelete('cascade');
            $table->string('assigned_to', 200);
            $table->string('draft_title');
            $table->string('file_type')->nullable();
            $table->longText('draft_details');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('drafts');
    }
}
