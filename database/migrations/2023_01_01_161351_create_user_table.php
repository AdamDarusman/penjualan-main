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
		Schema::create('users', function (Blueprint $table) {
			$table->id();
			$table->string('email');
			$table->timestamp('email_verified_at');
			$table->string('password');
			$table->enum('level',['Admin', 'Bendahara', 'Pemilik', 'Pelanggan']);
			$table->tinyInteger('aktif')->default(1);
			$table->string('remember_token')->default(1);
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
		Schema::dropIfExists('users');
	}
};
