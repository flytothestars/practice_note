<?php

namespace App\Actions\Notes;
use App\Models\Note;

class UpdateAction
{

    public function __invoke($request)
    {
        Note::where('id',$request->id)->update([
            "text" => $request->text,
            "status" => $request->status,
        ]);
    }
}