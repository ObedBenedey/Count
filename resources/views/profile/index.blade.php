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
                                    <th>Edad</th>
                                    <th>Genero</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-id="1">
                                    <td data-field="id" style="width: 80px">1</td>
                                    <td data-field="name">David McHenry</td>
                                    <td data-field="age">24</td>
                                    <td data-field="gender">Male</td>
                                    <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr data-id="2">
                                    <td data-field="id">2</td>
                                    <td data-field="name">Frank Kirk</td>
                                    <td data-field="age">22</td>
                                    <td data-field="gender">Male</td>
                                    <td>
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr data-id="3">
                                    <td data-field="id">3</td>
                                    <td data-field="name">Rafael Morales</td>
                                    <td data-field="age">26</td>
                                    <td data-field="gender">Male</td>
                                    <td>
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr data-id="4">
                                    <td data-field="id">4</td>
                                    <td data-field="name">Mark Ellison</td>
                                    <td data-field="age">32</td>
                                    <td data-field="gender">Male</td>
                                    <td>
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr data-id="5">
                                    <td data-field="id">5</td>
                                    <td data-field="name">Minnie Walter</td>
                                    <td data-field="age">27</td>
                                    <td data-field="gender">Female</td>
                                    <td>
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
@section('script')
    <!-- Table Editable plugin -->
    <script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/table-editable.int.js') }}"></script>
@endsection
