<form action="{{route('notes.store')}}" method="post"> {{csrf_field()}} <div class="modal fade" id="createModal"
    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl modal-fullscreen-lg-down">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new note</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body d-block">
    <fieldset>
    <div class="form-group">
        <label for="id_kind_work_inst">Text</label>
        <input type="textarea" class="form-control  " id="text" name="text" placeholder="" value="">
        <p class="help-block"></p>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select id="status" name="status" class="form-control">
            <option value="0">Select status</option>
            <option value="0" >Не выполнено
            </option>
            <option value="1" >Выполнено
            </option>

        </select>
        <p class="help-block"></p>
    </div>
    </fieldset>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm float-right" data-bs-dismiss="modal">Отмена</button>
        <button type="submit" class="btn btn-success btn-sm float-right" data-bs-dismiss="modal">Добавить</button>
    </div>
    </div>
    </div>
    </div>
</form>