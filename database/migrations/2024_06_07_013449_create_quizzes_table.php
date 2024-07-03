<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quizzes', function (Blueprint $table) {
			$table->id('quiz_id');
			$table->unsignedBigInteger('course_id');
			$table->string('title', 100);
			$table->timestamps();

			$table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('quizzes');
	}
}
