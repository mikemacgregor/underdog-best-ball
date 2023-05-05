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
        Schema::create('draft_picks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('entry_id');
            $table->uuid('tourn_entry_id');
            $table->unsignedMediumInteger('overall_pick_number');
            $table->unsignedTinyInteger('team_pick_number');
            $table->unsignedBigInteger('player_id');
            $table->string('player_name');
            $table->enum('position_name', ['QB', 'RB', 'WR', 'TE', 'FB']);
            $table->unsignedTinyInteger('bye_week');
            $table->decimal('projection_adp', 6, 2);
            $table->decimal('pick_points', 5, 2);
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
        Schema::dropIfExists('draft_picks');
    }
};
