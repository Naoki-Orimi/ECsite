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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('user_id'); // 購入者
            $table
                ->string('status')
                ->comment('0: 未購入またはエラー, 1: 購入済み 未払い, 2: 購入済み 支払い済, 10: 発送待ち, 11: 発送中, 12: 発送済み');  // 今どういう注文になっているか

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
