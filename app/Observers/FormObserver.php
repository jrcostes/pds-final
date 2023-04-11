<?php

namespace App\Observers;

use App\C1answers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FormObserver
{
    /**
     * Handle the c1answers "created" event.
     *
     * @param  \App\C1answers  $c1answers
     * @return void
     */
    public function created(C1answers $c1answers)
    {
        $userid = Auth::id();
        DB::table('c1answers_user')->insert([
            'user_id' => $userid, 'c1answers_id' => $c1answers->id
        ]);

    }
}
