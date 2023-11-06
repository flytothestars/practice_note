<form action="{{route('notes.update')}}" method="post"> {{csrf_field()}} <div class="modal fade"
    id="editModal{{$note->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl modal-fullscreen-lg-down">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body d-block">
    <fieldset>

    <div class="form-group">
    <input type="hidden" name="id" value="{{ $note->id }}" />
    <label for="text">Text</label>
    <input type="text" class="form-control  " id="text" name="text" placeholder="" @if(isset($note))
        value="{{ $note->text }}" @endif>
    <p class="help-block"></p>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select id="status" name="status" class="form-control">
            <option value="0" @if(isset($note) && $note->status == 0) selected @endif>Не выполнено
            </option>
            <option value="1" @if(isset($note) && $note->status == 1) selected @endif>Выполнено
            </option>

        </select>
        <p class="help-block"></p>
    </div>
    </fieldset>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm float-right" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success btn-sm float-right" data-bs-dismiss="modal">Save</button>
    </div>
    </div>
    </div>
    </div>
</form>