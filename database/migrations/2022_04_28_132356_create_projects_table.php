<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\PseudoTypes\False_;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id('project_id');
            // main page
            $table->string('main_page_bg')->nullable(false);
            $table->string('project_name')->nullable(false)->unique();
            $table->string('read_more_link')->nullable();
            $table->string('present_link')->nullable();
            $table->string('gamepedia_link')->nullable();
            $table->string('merchstore_link')->nullable();
            // first page
            $table->string('first_page_bg')->nullable(false);
            $table->string('trailer_link')->nullable();
            $table->string('description', 8000)->nullable();
            // second page
            $table->string('second_page_bg')->nullable(false);
            // third page
            $table->string('third_page_bg')->nullable(false);
            $table->string('modding_editor_link')->nullable();
            $table->string('documentation_link')->nullable();
            // fourth page
            $table->string('fourth_page_bg')->nullable(false);

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
        Schema::dropIfExists('projects');
    }
};
