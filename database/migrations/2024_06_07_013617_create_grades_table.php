    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateGradesTable extends Migration
    {
        public function up()
        {
            Schema::create('grades', function (Blueprint $table) {
                $table->id('grade_id');
                $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('user_id')->on('users');
                $table->unsignedBigInteger('quiz_id');
                $table->foreign('quiz_id')->references('quiz_id')->on('quizzes');
                $table->integer('score');
                $table->timestamp('graded_at')->useCurrent();
            });
        }

        public function down()
        {
            Schema::dropIfExists('grades');
        }
    }
