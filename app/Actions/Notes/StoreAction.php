<?php

namespace App\Actions\Notes;
use App\Models\Note;

class StoreAction
{

    public function __invoke($request)
    {
        Note::create([
            "user_id" => \Auth::user()->id,
            "text" => $request->text,
            "status" => $request->status,
        ]);
    }
}