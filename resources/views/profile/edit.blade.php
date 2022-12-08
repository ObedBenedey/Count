@extends('layouts.master')

@section('title') editar Usuario @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Submenu @endslot
        @slot('title') Usuarios @endslot
    @endcomponent
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @include('profile.form')
            </div>
        </div>
    </div> <!-- end col -->
</div>
    
@endsection
