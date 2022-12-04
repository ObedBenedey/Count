@extends('layouts.master')

@section('title') Bancos @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Submenu @endslot
        @slot('title') Bancos @endslot
    @endcomponent

    

@endsection
