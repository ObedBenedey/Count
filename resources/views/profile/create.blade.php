@extends('layouts.master')

@section('title') Crear Usuario @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Submenu @endslot
        @slot('title') Usuarios @endslot
    @endcomponent
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Datos Generales del prestamista</h4>
                <p class="card-title-desc">Ingresa tus datos para continuar</p>

                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Nombre</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-search-input" class="col-md-2 col-form-label">Apellido</label>
                    <div class="col-md-10">
                        <input class="form-control" type="search" value="" id="example-search-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-tel-input" class="col-md-2 col-form-label">Telephone</label>
                    <div class="col-md-10">
                        <input class="form-control" type="tel" value="" placeholder="(614) 123-25-25" id="example-tel-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-number-input" class="col-md-2 col-form-label">Edad</label>
                    <div class="col-md-10">
                        <input class="form-control" type="number" value="" placeholder="Ingresa la edad" id="example-number-input">
                    </div>
                </div>
                
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Direccion</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-number-input" class="col-md-2 col-form-label">Record Buro</label>
                    <div class="col-md-10">
                        <input class="form-control" type="number" value="" placeholder="Ingresa el record" id="example-number-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-search-input" class="col-md-2 col-form-label">RFC</label>
                    <div class="col-md-10">
                        <input class="form-control" type="search" value="" id="example-search-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-search-input" class="col-md-2 col-form-label">Ocupacion</label>
                    <div class="col-md-10">
                        <input class="form-control" type="search" value="" id="example-search-input">
                    </div>
                </div>
                <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                                <input class="form-check-input" type="checkbox" id="SwitchCheckSizemd">
                                <label class="form-check-label" for="SwitchCheckSizemd">¿Factura?</label>
                            </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Genero</label>
                    <div class="col-md-10">
                        <select class="form-select">
                            <option>Seleccionar</option>
                            <option>Femenino</option>
                            <option>Masculino</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end col -->
</div>
    
@endsection
