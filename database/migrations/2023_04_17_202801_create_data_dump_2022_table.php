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
        Schema::create('data_dump_2022', function (Blueprint $table) {
            // $table->id();
            $table->uuid('draft_uuid');
            $table->string('draft_time_string');
            $table->unsignedSmallInteger('clock');
            $table->uuid('tourn_entry_id');
            $table->unsignedTinyInteger('round');
            $table->string('player_name');
            $table->enum('position_name', ['QB', 'RB', 'WR', 'TE', 'FB']);
            $table->unsignedTinyInteger('bye_week');
            $table->decimal('projection_adp', 6, 2);
            $table->unsignedTinyInteger('pick_order');
            $table->unsignedTinyInteger('overall_pick_number');
            $table->unsignedTinyInteger('team_pick_number');
            $table->decimal('pick_points', 5, 2);
            $table->decimal('roster_points', 6, 2);
            $table->unsignedTinyInteger('playoff_team');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_dump_2022');
    }
};
