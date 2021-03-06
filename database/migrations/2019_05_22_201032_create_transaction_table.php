<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //執行資料庫異動
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            //交易編號
            $table->uuid('id');
            $table->primary('id');
            //使用者編號
            $table->integer('user_id');
            //商品編號
            $table->integer('merchandise_id');
            //當時購買單價
            $table->integer('price');
            //購買數量
            $table->integer('buy_count');
            //交易總價格
            $table->integer('total_price');
            //時間戳記
            $table->timestamps();

            //索引設定
            $table->index(['user_id'], 'user_transaction_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    //復原資料庫異動
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
