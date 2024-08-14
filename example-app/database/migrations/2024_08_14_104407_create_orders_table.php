<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Khóa chính tự tăng
            $table->string('name');
            $table->string('email');
            $table->integer('quantity');
            $table->decimal('total_amount', 10, 2);
            $table->string('phone_number');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users'); // Giả sử có bảng users
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
        Schema::dropIfExists('orders');
    }
}

