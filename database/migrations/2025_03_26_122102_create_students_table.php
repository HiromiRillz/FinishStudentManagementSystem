<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grade')->nullable();
            $table->string('name');
            $table->string('address');
            $table->string('img_path')->nullable();
            $table->string('comment')->nullable();
            $table->timestamps();
        });

        DB::table('students')->insert(['id' => 1, 'grade' => 2, 'name' => '山田太郎', 'address' => '愛知県〇〇市〇〇町〇〇番地', 'comment' => '頑張って頑張って']);
        DB::table('students')->insert(['id' => 2, 'grade' => 1, 'name' => '鈴木一郎', 'address' => '愛知県〇〇市〇〇町〇〇番地', 'comment' => 'すごい']);
        DB::table('students')->insert(['id' => 3, 'grade' => 3, 'name' => '佐藤たける', 'address' => '愛知県〇〇市〇〇町〇〇番地','comment' => '頑張って頑張って']);
        DB::table('students')->insert(['id' => 4, 'grade' => 2, 'name' => '阿部信三', 'address' => '愛知県〇〇市〇〇町〇〇番地','comment' => '頑張って頑張って']);
        DB::table('students')->insert(['id' => 5, 'grade' => 3, 'name' => '山田次郎次郎', 'address' => '愛知県〇〇市〇〇町〇〇番地','comment' => '頑張って頑張って']);
        DB::table('students')->insert(['id' => 6, 'grade' => 2, 'name' => '滝瀬彩', 'address' => '愛知県〇〇市〇〇町〇〇番地','comment' => '頑張って頑張って']);
        DB::table('students')->insert(['id' => 7, 'grade' => 1, 'name' => '田口浩美', 'address' => '愛知県〇〇市〇〇町〇〇番地','comment' => '頑張って頑張って']);
        DB::table('students')->insert(['id' => 8, 'grade' => 2, 'name' => '半田タクヤ', 'address' => '愛知県〇〇市〇〇町〇〇番地','comment' => '頑張って頑張って']);
        DB::table('students')->insert(['id' => 9, 'grade' => 1, 'name' => '後藤佐助', 'address' => '愛知県〇〇市〇〇町〇〇番地','comment' => '頑張って頑張って']);
        DB::table('students')->insert(['id' => 10, 'grade' => 3, 'name' => '渦巻ナルト', 'address' => '愛知県〇〇市〇〇町〇〇番地','comment' => '頑張って頑張って']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
