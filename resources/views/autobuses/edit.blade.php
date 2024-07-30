@extends('layouts.myLayout')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Editar Autobus</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">
                    <strong>Buses</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <form class="m-t" action="{{ route('autobuses.update',["autobus"=>$bus->id] ) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" >
                @csrf
                @method('PUT')
                <div class="form-group">
                    <input type="text" class="form-control" value="{{ $bus->placa }}" name="placa" placeholder="Placa">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{ $bus->marca }}" name="marca" placeholder="Marca">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="{{ $bus->modelo }}" name="modelo" placeholder="Modelo">
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <span>valor actual: {{ $bus->estado }}</span>
                        <select class="form-control m-b" name="estado">
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Guardar Cambios</button>
            </form>
        </div>
    </div>
@endsection
