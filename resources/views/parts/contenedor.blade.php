    <div class="row" >
        
        <div class="col-md-6">
            <h5 class="card-title placeholder-glow">
                <span class="placeholder col-6"></span>
            </h5>

            <p class="card-text placeholder-glow">
                <span class="placeholder col-7"></span>
                <span class="placeholder col-4"></span>
                <span class="placeholder col-4"></span>
                <span class="placeholder col-6"></span>
                <span class="placeholder col-8"></span>
            </p>
        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="peso" class="form-label">Peso</label>
                    <input type="text" class="form-control" id="peso" disabled>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="altura" class="form-label">Altura</label>
                    <input type="text" class="form-control" id="altura" disabled>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="presion" class="form-label">Presión</label>
                    <input type="text" class="form-control" id="presion" disabled>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="temperatura" class="form-label">Temperatura</label>
                    <input type="text" class="form-control" id="temperatura" disabled>
                </div>
            </div>

        </div>
        <div class="col-md-12 mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" rows="5" class="form-control" width="100%"></textarea>
        </div>
    </div>

    <hr />

    <div class="card">
        <div class="card-header">
            Medicamentos
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="medicamento" class="form-label">Medicamento</label>
                    <input type="text" class="form-control" id="medicamento" placeholder="Paracetamol">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="dosis" class="form-label">Dosis</label>
                    <input type="text" class="form-control" id="dosis" placeholder="1">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="hora" class="form-label">Hora</label>
                    <input type="text" class="form-control" id="hora" placeholder="Cada 8 horas">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="tiempo" class="form-label">Tiempo</label>
                    <input type="text" class="form-control" id="tiempo" placeholder="Durante una semana">
                </div>

                <div>
                    <button type="button" class="btn btn-success">Limpiar</button>
                    <button type="button" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </div>
    </div>

    <hr />
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Medicamento</th>
                <th scope="col">Dosis</th>
                <th scope="col">Hora</th>
                <th scope="col">Tiempo</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <th scope="row">1</th>
                <td>Paracetamol</td>
                <td>1</td>
                <td>Cada 6 horas</td>
                <td>Durante 5 días</td>
                <td>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Paracetamol</td>
                <td>1</td>
                <td>Cada 6 horas</td>
                <td>Durante 5 días</td>
                <td>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Paracetamol</td>
                <td>1</td>
                <td>Cada 6 horas</td>
                <td>Durante 5 días</td>
                <td>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
        </tbody>
    </table>
