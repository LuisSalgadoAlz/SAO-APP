<div class="container">
  <?php
    include('header.php');
  ?>
  <div class="row mt-2">
    <div class="col-12 p-2">
      <div class="container header bg-white rounded p-2 shadow-sm">
        <div class="row">
          <div class="col-3 d-flex justify-content-center align-items-center flex-column border-end">
            <h6 class="fs-5">
              <i class='bx bx-wrench'></i>
            </h6>
            <span class="fw-bold mb-1">14</span>
            <span class="subtitle-contratos">Total tecnicos</span>
          </div>
          <div class="col-3 d-flex justify-content-center align-items-center flex-column border-end">
            <h6 class="fs-5">
              <i class='bx bx-station text-success'></i>
            </h6>
            <span class="fw-bold mb-1">14</span>
            <span class="subtitle-contratos">Tenicos libres</span>
          </div>
          <div class="col-3 d-flex justify-content-center align-items-center flex-column border-end">
            <h6 class="fs-5">
              <i class='bx bx-station text-danger'></i>
            </h6>
            <span class="fw-bold mb-1">25</span>
            <span class="subtitle-contratos">Tecnicos ocupados</span>
          </div>
          <div class="col-3 d-flex justify-content-center align-items-center flex-column">
            <button class="btn d-flex gap-2 align-items-center" data-bs-toggle="modal" data-bs-target="#tecnicosModal">
              <i class='bx bx-message-square-add'></i>
              <span class="subtitle-contratos">Nuevo tecnico</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-2">
    <div class="col-8 p-2">
      <div class="header d-f bg-white rounded p-4 shadow-sm table-scroll overflow-auto" style="height: 67vh;">
        <div class="container">
          <div class="row mb-3">
            <div class="col-4">
              <span class="fw-semibold">
                Gestion de tecnicos
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
            <div class="col-12 overflow-auto">
              <table class="table table-hover bordered">
                <thead class="table-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Contratos</th>
                    <th scope="col">Servicios</th>
                    <th scope="col">Accion</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-3">1</td>
                    <td class="py-3">San</td>
                    <td class="py-3">Peter</td>
                    <td class="py-3">
                      <span class="bg-success-subtle text-emphasis-success rounded px-1">Ocupado</span>
                    </td>
                    <td class="py-3">3</td>
                    <td class="py-3">12</td>
                    <td class="py-3">
                      <a href="./tecnicos-edits.php" class="btn btn-warning btn-sm"><i class='bx bx-edit'></i></a>
                      <button class="btn btn-danger btn-sm"><i class='bx bx-eraser'></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-3">1</td>
                    <td class="py-3">San</td>
                    <td class="py-3">Peter</td>
                    <td class="py-3">
                      <span class="bg-success-subtle text-emphasis-success rounded px-1">Ocupado</span>
                    </td>
                    <td class="py-3">3</td>
                    <td class="py-3">12</td>
                    <td class="py-3">
                      <a href="./tecnicos-edits.php" class="btn btn-warning btn-sm"><i class='bx bx-edit'></i></a>
                      <button class="btn btn-danger btn-sm"><i class='bx bx-eraser'></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-3">1</td>
                    <td class="py-3">San</td>
                    <td class="py-3">Peter</td>
                    <td class="py-3">
                      <span class="bg-success-subtle text-emphasis-success rounded px-1">Ocupado</span>
                    </td>
                    <td class="py-3">3</td>
                    <td class="py-3">12</td>
                    <td class="py-3">
                      <a href="./tecnicos-edits.php" class="btn btn-warning btn-sm"><i class='bx bx-edit'></i></a>
                      <button class="btn btn-danger btn-sm"><i class='bx bx-eraser'></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-3">1</td>
                    <td class="py-3">San</td>
                    <td class="py-3">Peter</td>
                    <td class="py-3">
                      <span class="bg-success-subtle text-emphasis-success rounded px-1">Ocupado</span>
                    </td>
                    <td class="py-3">3</td>
                    <td class="py-3">12</td>
                    <td class="py-3">
                      <a href="./tecnicos-edits.php" class="btn btn-warning btn-sm"><i class='bx bx-edit'></i></a>
                      <button class="btn btn-danger btn-sm"><i class='bx bx-eraser'></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-3">1</td>
                    <td class="py-3">San</td>
                    <td class="py-3">Peter</td>
                    <td class="py-3">
                      <span class="bg-success-subtle text-emphasis-success rounded px-1">Ocupado</span>
                    </td>
                    <td class="py-3">3</td>
                    <td class="py-3">12</td>
                    <td class="py-3">
                      <a href="./tecnicos-edits.php" class="btn btn-warning btn-sm"><i class='bx bx-edit'></i></a>
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
    <div class="col-4 p-2">
      <div class="header d-f bg-white rounded p-4 shadow-sm table-scroll overflow-auto" style="height: 67vh;">
        <!-- Ledearboard -->
        <div class="container">
          <div class="row mb-3">
            <div class="col-12">
              <span class="fw-semibold">
                Tecnicos con mas contratos
              </span>
              <hr>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="d-flex gap-2 border border-light-subtle rounded shadow-sm p-1">
                <div class="col-3 d-flex justify-content-center align-items-center">
                  <i class='bx bxs-chevron-right'></i>
                </div>
                <div class="col-5">
                  <span class="d-block fw-semibold">
                    San Peter
                  </span>
                  <span class="d-block text-body-tertiary">
                    Tegucigalpa
                  </span>
                </div>
                <div class="col-3 text-center">
                  <span class="fw-semibold">3</span>
                  <span class="text-body-tertiary">Contratos</span>
                </div>
              </div>  
            </div>
            <div class="col-12 mt-2">
              <div class="d-flex gap-2 border border-light-subtle rounded shadow-sm p-1">
                <div class="col-3 d-flex justify-content-center align-items-center">
                  <i class='bx bxs-chevron-right'></i>
                </div>
                <div class="col-5">
                  <span class="d-block fw-semibold">
                    San Peter
                  </span>
                  <span class="d-block text-body-tertiary">
                    Tegucigalpa
                  </span>
                </div>
                <div class="col-3 text-center">
                  <span class="fw-semibold">3</span>
                  <span class="text-body-tertiary">Contratos</span>
                </div>
              </div>  
            </div>
            <div class="col-12 mt-2">
              <div class="d-flex gap-2 border border-light-subtle rounded shadow-sm p-1">
                <div class="col-3 d-flex justify-content-center align-items-center">
                  <i class='bx bxs-chevron-right'></i>
                </div>
                <div class="col-5">
                  <span class="d-block fw-semibold">
                    San Peter
                  </span>
                  <span class="d-block text-body-tertiary">
                    Tegucigalpa
                  </span>
                </div>
                <div class="col-3 text-center">
                  <span class="fw-semibold">3</span>
                  <span class="text-body-tertiary">Contratos</span>
                </div>
              </div>  
            </div>
          </div>
        </div>
        <div class="container mt-4">
          <div class="row mb-3">
            <div class="col-12">
              <span class="fw-semibold">
                Tecnico con mas servicios
              </span>
              <hr>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="d-flex gap-2 border border-light-subtle rounded shadow-sm p-1">
                <div class="col-3 d-flex justify-content-center align-items-center">
                  <i class='bx bxs-chevron-right'></i>
                </div>
                <div class="col-5">
                  <span class="d-block fw-semibold">
                    San Peter
                  </span>
                  <span class="d-block text-body-tertiary">
                    Tegucigalpa
                  </span>
                </div>
                <div class="col-3 text-center">
                  <span class="fw-semibold">12</span>
                  <span class="text-body-tertiary">servicios</span>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="tecnicosModal" tabindex="-1" aria-labelledby="tecnivosModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Creacion - Nuevo tecnico</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3 row">
          <div class="col">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="Juan">
          </div>
          <div class="col">
            <label for="exampleFormControlInput1" class="form-label">Apellido</label>
            <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="Perez">
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Area de especializacion</label>
          <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Selecione una opcion</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Fecha de nacimiento</label>
          <input type="date" class="form-control form-control-sm" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Fecha de contratacion</label>
          <input type="date" class="form-control form-control-sm" id="exampleFormControlInput1">
        </div>
        <div class="mb-3 row">
          <div class="col">
            <label for="exampleFormControlInput1" class="form-label">Salario</label>
            <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="Ejemplo: 1200 Lps">
          </div>
          <div class="col">
            <!-- Tentativa -->
            <label for="exampleFormControlInput1" class="form-label">Horario</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Selecione una opcion</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Finalizar</button>
      </div>
    </div>
  </div>
</div>