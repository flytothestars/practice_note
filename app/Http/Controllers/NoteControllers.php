<?php

namespace App\Http\Controllers;

use App\Actions\Notes\StoreAction;
use App\Actions\Notes\UpdateAction;
use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use App\Models\Note;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\INotesRepository;

class NoteControllers extends Controller
{

    private $note;

    public function __construct(INotesRepository $note)
    {
        $this->note = $note;
    }

    public function index()
    {
        return view("clients.notes.index")->with(['notes' => $this->note->all()]);
    }

    public function store(StoreNoteRequest $request, StoreAction $store)
    {
        $store($request);
        return redirect()->back();
    }

    public function update(UpdateNoteRequest $request, UpdateAction $update)
    {
        $update($request);
        return redirect()->back();
    }

    public function delete($id)
    {
        $this->note->delete($id);
        return redirect()->back();
    }
}
