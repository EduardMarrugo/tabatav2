<div class="modal fade" id="AgregarModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="AgregarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title display-5 fw-bold" id="AgregarModalLabel">Agregar Tabata</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="form-signin" method="post" action="../controlador/accion/act_guardarTabata.php">
                    <label for="nombreTabataG">Nombre Tabata</label>
                    <input name="nombreTabataG" type="text" required id="nombreTabataG" class="form-control"
                        placeholder="Nombre para la tabata" autofocus>

                        <label for="tPreparacionG" class="mt-2">Tiempo Preparacion</label>
                    <input name="tPreparacionG" type="number" min="1" required max="5" id="tPreparacionG"
                        class="form-control" placeholder="Tiempo de preparacion" autofocus>

                        <label for="tActividadG" class="mt-2">Tiempo Actividad</label>
                    <input name="tActividadG" type="number" min="1" required max="60" id="tActividadG"
                        class="form-control" placeholder="Tiempo de actividad">

                        <label for="tDescansoG" class="mt-2">Tiempo Descanso</label>
                    <input name="tDescansoG" type="number" min="1" required max="60" id="tDescansoG" class="form-control"
                        placeholder="Tiempo de descanso">

                        <label for="numSeriesG" class="mt-2">Numero de Series</label>
                    <input name="numSeriesG" type="number" value="4" required readonly id="numSeriesG"
                        class="form-control" placeholder="Cantidad de series">

                        <label for="numRondasG" class="mt-2">Numero de Rondas</label>
                    <input name="numRondasG" type="number" required min="1" max="20" id="numRondasG" class="form-control"
                        placeholder="Cantidad de rondas">

                    <div class="checkbox mb-3">
                    </div>

                    <button class="btn btn-lg btn-primary" type="submit">
                        Guardar
                    </button>
                    <button type="button" class="btn btn-lg btn-secondary btn-block" data-bs-dismiss="modal">
                        Close
                    </button>



                </form>
            </div>

        </div>
    </div>
</div>