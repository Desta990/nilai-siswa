<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::table('nilai', function (Blueprint $table) {
                $table->foreignId('created_by')->nullable()->after('grade_id')->constrained('users')->onDelete('set null');
            });
        }
    
        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::table('nilai', function (Blueprint $table) {
                $table->dropForeign(['created_by']);
                $table->dropColumn('created_by');
            });
        }
    
    
};
