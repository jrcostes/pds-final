<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class CreateFormTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user = Auth::id();
        DB::unprepared(" CREATE TRIGGER tr_User_Form AFTER INSERT ON `c1answers` FOR EACH ROW
        BEGIN
            INSERT INTO c1answers_user (`user_id`, `c1answers_id`)
            VALUES ('$user', NEW.id);
        END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_trigger');
    }
}
