@extends('layouts.app')

@section('title', 'Registrar nuevo cliente')

@section('header', 'Registrar nuevo cliente')

@section('content')
<div class="row">
    <div class="col-md-12">
        <form method="GET" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required maxlength="100">
                    <div class="invalid-feedback">
                        Por favor ingrese el nombre.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required maxlength="100">
                    <div class="invalid-feedback">
                        Por favor ingrese el apellido.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="dni" class="form-label">DNI</label>
                    <input type="text" class="form-control" id="dni" name="dni" required maxlength="20">
                    <div class="invalid-feedback">
                        Por favor ingrese el DNI.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="cuil" class="form-label">CUIL</label>
                    <input type="text" class="form-control" id="cuil" name="cuil" required maxlength="20">
                    <div class="invalid-feedback">
                        Por favor ingrese el CUIL.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required maxlength="100">
                    <div class="invalid-feedback">
                        Por favor ingrese un email válido.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" id="telefono" name="telefono" required maxlength="20">
                    <div class="invalid-feedback">
                        Por favor ingrese un número de teléfono.
                    </div>
                </div>
                <div class="col-12">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" required maxlength="255">
                    <div class="invalid-feedback">
                        Por favor ingrese la dirección.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="provincia" class="form-label">Provincia</label>
                    <input type="text" class="form-control" id="provincia" name="provincia" required maxlength="100">
                    <div class="invalid-feedback">
                        Por favor ingrese la provincia.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="codigo_postal" class="form-label">Código Postal</label>
                    <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" required maxlength="10">
                    <div class="invalid-feedback">
                        Por favor ingrese el código postal.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="nacionalidad" class="form-label">Nacionalidad</label>
                    <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" required maxlength="50">
                    <div class="invalid-feedback">
                        Por favor ingrese la nacionalidad.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                    <div class="invalid-feedback">
                        Por favor ingrese la fecha de nacimiento.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="estado_civil" class="form-label">Estado Civil</label>
                    <select class="form-select" id="estado_civil" name="estado_civil" required>
                        <option value="">Seleccione...</option>
                        <option value="Soltero">Soltero</option>
                        <option value="Casado">Casado</option>
                        <option value="Divorciado">Divorciado</option>
                        <option value="Viudo">Viudo</option>
                        <option value="Unión de hecho">Unión de hecho</option>
                    </select>
                    <div class="invalid-feedback">
                        Por favor seleccione el estado civil.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="ocupacion" class="form-label">Ocupación</label>
                    <input type="text" class="form-control" id="ocupacion" name="ocupacion" required maxlength="100">
                    <div class="invalid-feedback">
                        Por favor ingrese la ocupación.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="ingresos_mensuales" class="form-label">Ingresos Mensuales</label>
                    <input type="number" class="form-control" id="ingresos_mensuales" name="ingresos_mensuales" required step="0.01" min="0">
                    <div class="invalid-feedback">
                        Por favor ingrese los ingresos mensuales.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="empresa_trabajo" class="form-label">Empresa de Trabajo</label>
                    <input type="text" class="form-control" id="empresa_trabajo" name="empresa_trabajo" maxlength="100">
                </div>
                <div class="col-12">
                    <label for="direccion_trabajo" class="form-label">Dirección de Trabajo</label>
                    <input type="text" class="form-control" id="direccion_trabajo" name="direccion_trabajo" maxlength="255">
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="es_garante" name="es_garante" value="1">
                        <label class="form-check-label" for="es_garante">
                            Es Garante
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="estado" class="form-label">Estado</label>
                    <select class="form-select" id="estado" name="estado" required>
                        <option value="Activo" selected>Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>
                    <div class="invalid-feedback">
                        Por favor seleccione el estado.
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <button class="btn btn-primary btn-lg" type="submit">Guardar</button>
        </form>
    </div>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
@endsection
