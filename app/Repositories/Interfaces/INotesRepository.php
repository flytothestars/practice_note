<?php

namespace App\Repositories\Interfaces;

interface INotesRepository
{
    public function all();
    public function delete($id);
}