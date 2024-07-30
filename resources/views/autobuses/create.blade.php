@extends('layouts.myLayout')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Registrar Nuevo Autobus</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">
                    <strong>Buses</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <form class="m-t" role="form" action="{{ route('autobuses.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="placa" placeholder="Placa" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="marca" placeholder="Marca" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="modelo" placeholder="Modelo" required>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <select class="form-control m-b" name="estado">
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Registrar Autobus</button>
            </form>
        </div>
    </div>
@endsection
