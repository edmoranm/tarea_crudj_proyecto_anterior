<?php include_once '../../includes/header.php' ?>
<div class="container">
<h1 class="text-center title-custom">Formulario de Alumnos</h1>
    <div class="row justify-content-center mb-3">
        <form class="col-lg-8 border bg-light p-3">
            <input type="hidden" name="alum_id" id="alum_id">
            <div class="row mb-3 ">
                <div class="col">
                    <label for="alum_nombre">Nombre del alumno</label>
                    <input type="text" name="alum_nombre" id="alum_nombre" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="alum_apellido">Apellido del Alumno</label>
                    <input type="text" name="alum_apellido" id="alum_apellido" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="alum_grado">Grado del Alumno</label>
                    <input type="text" name="alum_grado" id="alum_grado" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="alum_arma">Arma del Alumno</label>
                    <input type="text" name="alum_arma" id="alum_arma" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="alum_nacionalidad">Nacionalidad del Alumno</label>
                    <input type="text" name="alum_nacionalidad" id="alum_nacionalidad" class="form-control" required>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col">
                    <button type="submit" id="btnGuardar" class="btn btn-primary w-100">Guardar</button>
                </div>
                <div class="col">
                    <button type="button" id="btnBuscar" class="btn btn-info w-100">Buscar</button>
                </div>
                <div class="col">
                    <button type="button" id="btnModificar" class="btn btn-warning w-100">Modificar</button>
                </div>
                <div class="col">
                    <button type="button" id="btnCancelar" class="btn btn-secondary w-100">Cancelar</button>
                </div>
                <div class="col">
                    <button type="reset" id="btnLimpiar" class="btn btn-secondary w-100">Limpiar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="row justify-content-center ">
        <div class="col-lg-8 table-responsive">
            <h2 class="text-center title-custom">Listado de Alumnos</h2>
            <table class="table table-bordered table-hover" id="tablaAlumnos">
                <thead>
                    <tr class="title-custom">
                        <th>No.</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Grado</th>
                        <th>Arma</th>
                        <th>Nacionalidad</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="8">No hay alumnos disponibles</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script defer src="/tarea_crudj_proyecto_anterior/src/js/funciones.js"></script>
<script defer src="/tarea_crudj_proyecto_anterior/src/js/alumnos/index.js"></script>
<?php include_once '../../includes/footer.php' ?>

   