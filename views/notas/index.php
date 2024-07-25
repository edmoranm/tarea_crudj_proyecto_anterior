<?php
require_once '../../models/alumnos.php';
require_once '../../models/materia.php';

$error = ''; 

try {
    $alumno = new alumno();
    $materia = new materia();
    $alumnos = $alumno->buscar();
    $materias = $materia->buscar();
} catch (PDOException $e) {
    $error = $e->getMessage();
    $alumnos = [];
    $materias = [];
} catch (Exception $e2){
    $error = $e2->getMessage();
    $alumnos = [];
    $materias = [];
}
?>

<?php include_once '../../includes/header.php' ?>
<div class="container">
<h1 class="text-center title-custom">Formulario de ingreso de calificaciones</h1>
    <div class="row justify-content-center mb-3">
        <form class="col-lg-8 border bg-light p-3">
            <input type="hidden" name="not_id" id="not_id">
            <div class="row mb-3 ">
                <div class="col">
                    <h1>Seleccione el Alumno</h1>
                    <select name="not_alumno" id="not_alumno" class="form-control">
                        <option value="">SELECCIONE...</option>
                        <?php foreach ($alumnos as $key => $alumno) : ?>
                            <option value="<?= htmlspecialchars($alumno['alum_id']) ?>"><?= htmlspecialchars($alumno['alum_nombre'] . ' ' . $alumno['not_materia']) ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <h2>Detalle de Materias</h2>
            <div class="row mb-3">
                <div class="col">
                    <label for="not_materia">Seleccione la Materia</label>
                    <select name="not_materia" id="not_materias" class="form-control">
                        <option value="">SELECCIONE...</option>
                        <?php foreach ($materias as $key => $materia) : ?>
                            <option value="<?= htmlspecialchars($materia['mat_id']) ?>"><?= htmlspecialchars($materia['mat_nombre']) ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="not_puntos">Punteo</label>
                    <input type="text" name="not_puntos" id="not_puntos" class="form-control" required>
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
                        <th>Alumno</th>
                        <th>Materia</th>
                        <th>Punteo</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="8">No hay notas disponibles</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script defer src="/tarea_crudj_proyecto_anterior/src/js/funciones.js"></script>
<script defer src="/tarea_crudj_proyecto_anterior/src/js/notas/index.js"></script>
<?php include_once '../../includes/footer.php' ?>

   