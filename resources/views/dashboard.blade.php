@extends('layouts.app')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('content')
<div class="row mb-3">
    <div class="col-md-4">
        <button class="btn btn-custom w-100 py-3">
            <i class="bi bi-box-arrow-in-right me-2"></i> Abrir caja
        </button>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-3">
        <div class="card card-custom">
            <div class="card-body">
                <h5 class="card-title">Préstamos activos</h5>
                <p class="card-text display-4">20</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card card-custom">
            <div class="card-body">
                <h5 class="card-title">Clientes registrados</h5>
                <p class="card-text display-4">20</p>
            </div>
        </div>
    </div>
</div>
@endsection
