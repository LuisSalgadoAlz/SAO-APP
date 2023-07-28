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
            <button class="btn d-flex gap-2 align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class='bx bx-message-square-add'></i>
              <span class="subtitle-contratos">Nuevo paquete</span>
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