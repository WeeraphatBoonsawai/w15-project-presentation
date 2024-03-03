<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('members_name');
            $table->string('members_nickname');
            $table->string('members_greet');
            $table->text('members_title');
            $table->string('members_debutdate');
            $table->text('members_profile');
            $table->text('members_personality');
            $table->string('members_img_icon');
            $table->string('members_img_costume');
            $table->string('members_img_costume2');
            $table->string('members_img_artwork');
            $table->string('members_img_concept');
            $table->string('members_introduction_video');
            $table->string('members_name_Illustrator');
            $table->string('members_youtube');
            $table->string('members_youtube_name');
            $table->unsignedBigInteger('generation_id');
            $table->unsignedBigInteger('affiliation_id');
            $table->unsignedBigInteger('gender_id');
            $table->string('ch');
            $table->timestamps();

            $table->foreign('generation_id')->references('id')->on('generation');
            $table->foreign('affiliation_id')->references('id')->on('affiliation');
            $table->foreign('gender_id')->references('id')->on('gender');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
