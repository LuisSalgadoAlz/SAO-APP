<div class="container">
  <?php
  include('header.php');
  ?>
  <div class="row mt-2">
    <div class="col-12 p-2">
      <div class="container header bg-white rounded p-2 shadow-sm">
        <div class="row">
          <div class="col-4 d-flex justify-content-center align-items-center flex-column border-end">
            <h6 class="fs-5">
              <i class='bx bx-briefcase'></i>
            </h6>
            <span class="fw-bold mb-1">14</span>
            <span class="subtitle-contratos">Total paquetes</span>
          </div>
          <div class="col-4 d-flex justify-content-center align-items-center flex-column border-end">
            <h6 class="fs-5">
              <i class='bx bx-phone-outgoing'></i>
            </h6>
            <span class="fw-bold mb-1">25</span>
            <span class="subtitle-contratos">Total visitas</span>
          </div>
          <div class="col-4 d-flex justify-content-center align-items-center flex-column">
            <button class="btn d-flex gap-2 align-items-center agregar-paquete" data-bs-toggle="modal"
              data-bs-target="#exampleModal">
              <i class='bx bx-message-square-add'></i>
              <span class="subtitle-contratos">Nuevo paquete</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-2">
    <div class="col-4 p-2">
      <div class="header bg-white rounded p-4 shadow-sm">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <span class="fw-semibold">
                Estado de los paquetes
              </span>
            </div>
            <div class="col-12">
              <hr>
            </div>
          </div>
          <div class="row">
            <div class="col-12 mb-3">
              <!-- Grafico -->
              <canvas id="graph-packages"></canvas>
            </div>
          </div>
          <div class="row">
            <div class="col-12 d-flex justify-content-between">
              <div class="d-flex justify-content-center flex-column align-items-center">
                <span class="fw-bold">180</span>
                <span class="text-secondary">Completos</span>
              </div>
              <div class="d-flex justify-content-center flex-column align-items-center">
                <span class="fw-bold">180</span>
                <span class="text-secondary">Completos</span>
              </div>
              <div class="d-flex justify-content-center flex-column align-items-center">
                <span class="fw-bold fs-6">180</span>
                <span class="text-secondary">Completos</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-8 p-2">
      <div class="header d-f bg-white rounded p-4 shadow-sm">
        <div class="container">
          <div class="row mb-3">
            <div class="col-4">
              <span class="fw-semibold">
                Estado de los paquetes
              </span>
            </div>
            <div class="col-8 d-flex">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" aria-label="Sizing example input"
                  aria-describedby="inputGroup-sizing-sm">
                <button type="button" class="btn btn-secondary">
                  <i class='bx bx-search'></i>
                </button>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 overflow-auto table-scroll" style="max-height: 395px;">
              <table class="table table-hover bordered">
                <thead class="table-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Contrato</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Accion</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-3">1</td>
                    <td class="py-3">Ebay</td>
                    <td class="py-3">Paquete basico</td>
                    <td class="py-3">
                      <span class="bg-success-subtle text-emphasis-success rounded px-1">Finalizado</span>
                    </td>
                    <td class="py-3">
                      <a href="./contratosdetalles.php" class="btn btn-warning btn-sm"><i class='bx bx-edit'></i></a>
                      <button class="btn btn-danger btn-sm"><i class='bx bx-eraser'></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-3">2</td>
                    <td class="py-3">Amazon</td>
                    <td class="py-3">Paquete premium</td>
                    <td class="py-3">
                      <span class="bg-warning-subtle text-emphasis-warning rounded px-1">Pendiente</span>
                    </td>
                    <td class="py-3">
                      <button class="btn btn-warning btn-sm"><i class='bx bx-edit'></i></button>
                      <button class="btn btn-danger btn-sm"><i class='bx bx-eraser'></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-3">3</td>
                    <td class="py-3">Microsoft</td>
                    <td class="py-3">Contrato anual</td>
                    <td class="py-3">
                      <span class="bg-primary-subtle text-emphasis-primary rounded px-1">En progreso</span>
                    </td>
                    <td class="py-3">
                      <button class="btn btn-warning btn-sm"><i class='bx bx-edit'></i></button>
                      <button class="btn btn-danger btn-sm"><i class='bx bx-eraser'></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-3">4</td>
                    <td class="py-3">Google</td>
                    <td class="py-3">Paquete básico</td>
                    <td class="py-3">
                      <span class="bg-danger-subtle text-emphasis-danger rounded px-1">Cancelado</span>
                    </td>
                    <td class="py-3">
                      <button class="btn btn-warning btn-sm"><i class='bx bx-edit'></i></button>
                      <button class="btn btn-danger btn-sm"><i class='bx bx-eraser'></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-3">5</td>
                    <td class="py-3">Google</td>
                    <td class="py-3">Paquete básico</td>
                    <td class="py-3">
                      <span class="bg-danger-subtle text-emphasis-danger rounded px-1">Cancelado</span>
                    </td>
                    <td class="py-3">
                      <button class="btn btn-warning btn-sm"><i class='bx bx-edit'></i></button>
                      <button class="btn btn-danger btn-sm"><i class='bx bx-eraser'></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-3">6</td>
                    <td class="py-3">Google</td>
                    <td class="py-3">Paquete básico</td>
                    <td class="py-3">
                      <span class="bg-danger-subtle text-emphasis-danger rounded px-1">Cancelado</span>
                    </td>
                    <td class="py-3">
                      <button class="btn btn-warning btn-sm"><i class='bx bx-edit'></i></button>
                      <button class="btn btn-danger btn-sm"><i class='bx bx-eraser'></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-3">7</td>
                    <td class="py-3">Google</td>
                    <td class="py-3">Paquete básico</td>
                    <td class="py-3">
                      <span class="bg-danger-subtle text-emphasis-danger rounded px-1">Cancelado</span>
                    </td>
                    <td class="py-3">
                      <button class="btn btn-warning btn-sm"><i class='bx bx-edit'></i></button>
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
  </div>
</div>

<!-- Formulario del modal -->
<form id="agregarNuevoPaquete">
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Creacion - Contrato de paquete</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Cliente</label>
            <div class="d-flex gap-1 mb-2">
              <input type="text" class="form-control form-control-sm cliente-paquete" id="searchCliente"
                placeholder="Juan Perez" name="cliente">
              <button class="btn btn-secondary btn-sm "><i class='bx bx-message-square-add'></i></button>
            </div>
            <div class="d-flex gap-1 mb-2">
              <select class="form-select form-select-sm combo-cliente" aria-label=".form-select-sm example"
                name="combo-cliente">
                <option selected>Selecione una opcion</option>
              </select>
              <button class="btn btn-secondary btn-sm "><i class='bx bx-book-bookmark'></i></i></button>
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Paquete</label>
            <select class="form-select form-select-sm combo-opcion-paquete" aria-label=".form-select-sm example"
              name="paquete">
              <option selected>Selecione una opcion</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tecnico a asignar</label>
            <select class="form-select form-select-sm combo-tecnico-asignar" aria-label=".form-select-sm example"
              name="tecnico">
              <option selected>Selecione una opcion</option>
            </select>
          </div>
          <div class="mb-3 row">
            <div class="col">
              <label for="exampleFormControlInput1" class="form-label">Fecha inicio</label>
              <input type="date" class="form-control form-control-sm fecha-inicio" id="exampleFormControlInput1"
                name="fechaInicio">
            </div>
            <div class="col">
              <label for="exampleFormControlInput1" class="form-label">Fecha final</label>
              <input type="date" class="form-control form-control-sm fecha-final" id="exampleFormControlInput1"
                name="fechaFinal">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Finalizar</button>
        </div>
      </div>
    </div>
  </div>
</form>