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
        //migrationの際phoneカラムが追加されるように設定する。
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->unique()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //rollback時に削除されるようにdownメソッドに設定する。
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
        });
    }
};
