

    {{-- Heredar la plantilla 1 --}}
    @extends('layouts.plantilla1')

    @section('titulo', 'Clientes')

    {{-- Dividir el contenido por secciones --}}
    @section('contenido')
        {{-- Inicia tarjetaCliente --}}

        <div class="container mt-5 col-md-8">
            <div class="card text-justify font-monospace">
                <div class="card-header fs-5 text-primary"> Marlen Gonzalez Zamudio</div>
                <div class="card-body">
                    <h5 class="fw-bold"> glezmae6@gmail.com</h5>
                    <h5 class="fw-medium">4191119257</h5>
                    <p class="card-text fw-lighter"></p>
                </div>

                <div class="card-footer text-muted">
                    <button type="submit" class="btn btn-warnining btn-sm">Actualizar </button>
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar </button>
                </div>

            </div>

        </div>
        {{-- Finaliza tarjetaCliente --}}
        @endsection
