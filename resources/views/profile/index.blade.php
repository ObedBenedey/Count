@extends('layouts.master')

@section('title') Profile @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Submenu @endslot
        @slot('title') Usuarios @endslot
    @endcomponent

        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
              
                <a href="{{ route('profile.create') }}" style="float: right;" type="button" class="btn btn-secondary waves-effect waves-light">Agregar Usario</a>
                    <h4 class="card-title">Tabla de Ususarios</h4>
                    <p class="card-title-desc">En la siguiente tabla se encuentra los usuarios
                    </p>

                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Telefono</th>
                                    <th>Record</th>
                                    <th>fecha de ingreso</th>
                                    <th>Editar</th>

                                </tr>
                            </thead>
                            <tbody>
        @foreach($profile as $profiles)
            <tr>
                <td>{{$profiles->id}}</td>
                <td>{{$profiles->first_name}}</td>
                <td>{{$profiles->last_name}}</td>
                <td>{{$profiles->phone_number}}</td>
                <td>{{$profiles->buro}}</td>
                <td>{{$profiles->updated_at}}</td>
                <td><a href="{{ route('profile.edit',$profiles->id) }}" style="float: right;" type="button" class="btn btn-secondary waves-effect waves-light">Editar</a></td>
       
            </tr>
        @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
