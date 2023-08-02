<div class="container">
  <?php
  include('header.php');
  ?>
  <div class="row mt-2">
    <div class="col-6 p-2">
      <div class="container header bg-white rounded p-2 shadow-sm">
        <div class="row">
          <div class="col-6 d-flex justify-content-center align-items-center flex-column border-end">
            <h6 class="fs-5">
              <i class='bx bx-credit-card-front'></i>
            </h6>
            <span class="fw-bold mb-1">14</span>
            <span class="subtitle-contratos">Facturaciones</span>
          </div>
          <div class="col-6 d-flex justify-content-center align-items-center flex-column border-end">
            <h6 class="fs-5">
              <i class='bx bxs-user-check'></i>
            </h6>
            <span class="fw-bold mb-1">25</span>
            <span class="subtitle-contratos">Total clientes</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 p-2">
      <div class="container header bg-white rounded p-2 shadow-sm">
        <div class="row">
          <div class="col-6 d-flex justify-content-center align-items-center flex-column border-end">
            <h6 class="fs-5">
              <i class='bx bx-task'></i>
            </h6>
            <span class="fw-bold mb-1">14</span>
            <span class="subtitle-contratos">Total servicios</span>
          </div>
          <div class="col-6 d-flex justify-content-center align-items-center flex-column">
            <button class="btn d-flex gap-2 align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class='bx bx-message-square-add'></i>
              <span class="subtitle-contratos">Agregar servicios</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-2">
    <div class="col-6 p-2">
      <div class="container header bg-white rounded p-2 shadow-sm">
        <div class="row">
          <div class="col px-5 pt-3">
            <span class="fw-semibold">Modificar paquete</span>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col px-5">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nombre del paquete</label>
              <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1"
                placeholder="Eje. paquete basico">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Horas establecidas</label>
              <input type="number" class="form-control form-control-sm" id="exampleFormControlInput1"
                placeholder="horas">
            </div>
            <div>
              <label for="exampleFormControlInput1" class="form-label">Precio total</label>
              <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1"
                placeholder="Precio total del paquete" disabled>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col px-5 py-3">
            <button type="button" class="btn btn-light w-100" data-bs-dismiss="modal">Guardar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 p-2">
      <div class="container header bg-white rounded p-4 shadow-sm">
        <div class="row">
          <span class="fw-semibold">
            Servicios acuales
          </span>
        </div>
        <div class="row mt-3">
          <div class="col overflow-auto table-scroll" style="height: 43.8vh;">
            <table class="table table-hover table-borderless">
              <thead class="table-light">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Accion</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-3">1</td>
                  <td class="py-3">Premier</td>
                  <td class="py-3">1,200 Lps</td>
                  <td class="py-3">
                    <button class="btn btn-danger btn-sm"><i class='bx bx-eraser'></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">1</td>
                  <td class="py-3">Premier</td>
                  <td class="py-3">1,200 Lps</td>
                  <td class="py-3">
                    <button class="btn btn-danger btn-sm"><i class='bx bx-eraser'></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">1</td>
                  <td class="py-3">Premier</td>
                  <td class="py-3">1,200 Lps</td>
                  <td class="py-3">
                    <button class="btn btn-danger btn-sm"><i class='bx bx-eraser'></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">1</td>
                  <td class="py-3">Premier</td>
                  <td class="py-3">1,200 Lps</td>
                  <td class="py-3">

                    <button class="btn btn-danger btn-sm"><i class='bx bx-eraser'></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col p-2">
      <div class="header col-12 bg-white rounded py-2 px-3 d-flex justify-content-center align-items-center">
        <footer class="footer text-center py-2">
          <span>&copy; 2023 - Todos los derechos reservados foraneos</span>
        </footer>
      </div>
    </div>
  </div>
</div>

<!-- Formulario del modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar servicio</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Servicio</label>
          <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Selecione una opcion</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Finalizar</button>
      </div>
    </div>
  </div>
</div>