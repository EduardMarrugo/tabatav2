<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title display-5 fw-bold" id="editarModalLabel">Editar Tabata</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-signin" method="post" action="../controlador/accion/act_editarTabatas.php">
                    <label for="idTabata" class="sr-only">idTabata</label>
                    <input name="idTabata" type="number" required id="idTabata" readonly class="form-control" autofocus>

                    <label for="nombreTabata" class="sr-only mt-2">nombreTabata</label>
                    <input name="nombreTabata" type="text" required id="nombreTabata" class="form-control "
                        placeholder="Nombre para la tabata" autofocus>

                    <label for="tPreparacion" class="sr-only mt-2">tPreparacion</label>
                    <input name="tPreparacion" type="number" required min="1" max="5" id="tPreparacion" class="form-control "
                        placeholder="Tiempo de preparacion" autofocus>

                    <label for="tActividad" class="sr-only mt-2">tActividad</label>
                    <input name="tActividad" type="number" required min="1" max="60" id="tActividad" class="form-control "
                        placeholder="Tiempo de actividad">

                    <label for="tDescanso" class="sr-only mt-2">tDescanso</label>
                    <input name="tDescanso" min="1" max="60" required type="number" id="tDescanso" class="form-control "
                        placeholder="Tiempo de descanso">

                    <label for="numSeries" class="sr-only mt-2">numSeries</label>
                    <input name="numSeries" value="4" readonly required type="number" id="numSeries" class="form-control "
                        placeholder="Cantidad de series">

                    <label for="numRondas" class="sr-only mt-2">numRondas</label>
                    <input name="numRondas" type="number" required min="1" max="20" id="numRondas" class="form-control "
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