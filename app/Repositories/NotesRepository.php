<?php

namespace App\Repositories;
use App\Models\Note;
use App\Repositories\Interfaces\INotesRepository;

class NotesRepository implements INotesRepository
{
    public function all()
    {
        return Note::where('user_id', \Auth::user()->id)->sortable()->paginate(5);
    }

    public function delete($id)
    {
        \DB::table("notes")->where('id', $id)->delete();
    }
}