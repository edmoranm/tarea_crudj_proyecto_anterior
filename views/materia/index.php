<?php include_once '../../includes/header.php' ?>
<div class="container">
<h1 class="text-center title-custom">Formulario de Materias</h1>
    <div class="row justify-content-center mb-3">
        <form class="col-lg-8 border bg-light p-3">
            <input type="hidden" name="mat_id" id="mat_id">
            <div class="row mb-3 ">
                <div class="col">
                    <label for="mat_nombre">Nombre de la Materia</label>
                    <input type="text" name="mat_nombre" id="mat_nombre" class="form-control" required>
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
            <h2 class="text-center title-custom">Listado de Materias</h2>
            <table class="table table-bordered table-hover" id="tablaMaterias">
                <thead>
                    <tr class="title-custom">
                        <th>No.</th>
                        <th>Nombre</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4">No hay materias disponibles</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script defer src="/tarea_crudj_proyecto_anterior/src/js/funciones.js"></script>
<script defer src="/tarea_crudj_proyecto_anterior/src/js/materia/index.js"></script>
<?php include_once '../../includes/footer.php' ?>

   