@extends('layouts.admin')

@section('content-admin')

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Ver Detalle</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Detalle de Categoria</li>
            <li class="breadcrumb-item active">Ver Detalle</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content-->
  <div class="content">
    <div class="container-fluid">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Informacion del Detalle</h3>
          <div class="card-tools">
          <a class="btn btn-secondary btn-sm" href="{{ route('detalle-categorias.index') }}">
            <i class="fa fa-fw"><i class="bi bi-arrow-left"></i></i> Regresar
          </a>
          </div>
        </div>
        <div class="card-body bg-white">
            <form>
                @csrf

                <div class="row">
                    <div class="input-group col-5">
                    
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas"><i class="bi bi-layout-text-window-reverse"></i></span>
                            </div>
                        </div>
                        
                        <input type="text" class="form-control" value="{{ $detalleCategoria->categoria->nom_categoria }}" 
                            placeholder="Nombre de la Categoria" disabled>
                        
                    </div>

                    <div class="input-group col-3">
                    
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas"><i class="bi bi-bag-check-fill"></i></span>
                            </div>
                        </div>
                        
                        <input type="text" class="form-control" value="{{ $detalleCategoria->producto->nom_producto }}" 
                            placeholder="Nombre del Producto" disabled>
                        
                    </div>

                </div>

            </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection
