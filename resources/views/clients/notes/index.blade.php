@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container-fluid mt--7">
                <div class="card min-height-500"> <div class="card-header"> <div class="row">
                @if(session('message'))
                    <div class="col-md-12">
                        <div class="my-4 alert alert-{{ session('success') ? 'success' : 'danger' }} alert-temporary">{{
                        session('message') }}</div>
                    </div>
                @endif
                <div class="col-md-4">
                <h1>Notes</h1>
            </div>
            <div class="col-md-8">
                <button class="handle-click btn btn-primary float-right" data-bs-toggle="modal"
                    data-bs-target="#createModal">New note</button>
            </div>
        </div>
    </div>
    <div class="card-body" style="padding: 0.5rem;">
        <div class="container-fluid mt-3">
            <div class="row py-3">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <th>Text</th>
                                <th>@sortablelink('status', 'Status')</th>
                                <th>@sortablelink('created_at','Created')</th>
                                <td>Actions</td>
                            </thead>
                            <tbody>
                                @foreach($notes as $note)
                                <tr>
                                <td>{{ $note->text }}</td>
                                @if($note->status)
                                <td>Выполнено</td>
                                @else
                                <td>Не выполнено</td>
                                @endif 
                                <td>{{ $note->created_at}}</td>
                                <td>
                                <form class="" action="{{route('notes.delete', $note->id)}}"
                                    method="post"> {{csrf_field()}} <a href="#" class="handle-click" data-bs-toggle="modal"
                                    data-bs-target="#editModal{{$note->id}}"> <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" onclick="this.closest('form').submit();return false;"
                                    class="handle-click m-2" data-type="confirm" title="Удалить" data-title="Удаление"
                                    data-message="Вы уверены, что хотите удалить?" data-cancel-text="Нет"
                                    data-confirm-text="Да, удалить" data-url="#">
                                    <i class="fa fa-trash"></i>
                                    </a>
                                </form>
                                </td>

                                @include('clients.notes.edit')
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                {{$notes->links('vendor.pagination.default')}}
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>

</div>
</div>
</div>
@include('clients.notes.create')
@csrf
@endsection