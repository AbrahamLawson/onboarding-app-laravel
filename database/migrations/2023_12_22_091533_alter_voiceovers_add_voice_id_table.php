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
        //Update de la table avec la methode table().
        Schema::table('voiceovers', function (Blueprint $table) {
            $table->bigInteger('voice_id')->unsigned()->nullable()->after('text');
            $table->foreign('voice_id')->references('id')->on('voices');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('voiceovers', function (Blueprint $table) {

            $table->dropForeign('voiceovers_voice_id_foreign');
            $table->dropColumn('voice_id');
        });
    }
};
