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
        Schema::table('prices', function (Blueprint $table) {
            $table->after('amount', function (Blueprint $table) {
                $table->boolean('price_per_month');
                $table->string('weekdays');
                $table->string('hours');
                $table->string('or_hours')->nullable();
                $table->text('contains', 500)->nullable();
                $table->unsignedTinyInteger('color_id');
                $table->boolean('enabled')->default(1);
                $table->unsignedTinyInteger('position');
            });

            $table->dropColumn('slug');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prices', function (Blueprint $table) {
            $table->dropColumn(['price_per_month', 'weekdays', 'hours', 'or_hours', 'contains', 'color_id', 'enabled', 'position']);

            $table->string('slug')->after('title');
        });
    }
};
