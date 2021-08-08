<div class="modal fade" id="aggTabataModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aggTabataModal">Editar Tabata</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-signin" method="post" action="../controlador/accion/act_guardarTabata.php">

                    <input name="nombreTabata" type="text" id="nombreTabata" class="form-control"
                        placeholder="Nombre para la tabata" autofocus>

                    <input name="tPreparacion" type="number" min="1" max="5" id="tPreparacion" class="form-control"
                        placeholder="Tiempo de preparacion" autofocus>

                    <input name="tActividad" type="number" min="1" max="60" id="tActividad" class="form-control"
                        placeholder="Tiempo de actividad">

                    <input name="tDescanso" type="number" min="1" max="60" id="tDescanso" class="form-control"
                        placeholder="Tiempo de descanso">

                    <input name="numSeries" type="number" value="8" readonly id="numSeries" class="form-control"
                        placeholder="Cantidad de series">

                    <input name="numRondas" type="number" min="1" max="20" id="numRondas" class="form-control"
                        placeholder="Cantidad de rondas">

                    <div class="checkbox mb-3">
                    </div>

                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        <h8>Guardar</h8>
                    </button>


                </form>
            </div>

        </div>
    </div>
</div>