<div class="container">
  <div class="row mt-2">
    <div class="col p-2">
      <div class="header col-12 bg-white rounded shadow-sm py-2 px-3 d-flex justify-content-end">
        <div class="dropdown">
          <button class="btn btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class='bx bx-user'></i>
          </button>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="#">Items</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Items</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Items</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
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
            <div class="col-12 overflow-auto" style="max-height: 405px;">
              <table class="table table-sm table-hover bordered">
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
                      <button class="btn btn-warning btn-sm"><i class='bx bx-edit'></i></button>
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Creacion - Contrato de paquete</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Cliente:</label>

            <div class="d-flex">
              <input type="text" class="form-control me-2" id="recipient-name">
              <!-- El cliente si no existe, tendra que crear un nuevo cliente -->
              <button class="btn btn-outline-primary">
                <i class='bx bx-message-square-add'></i>
              </button>
            </div>

            <!-- Tabla de busqueda del cliente -->

            <div class="mb-3">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Selecionar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Ebay</td>
                    <td>Empresa</td>
                    <td class="text-center">
                      <button class="btn btn-outline-primary">
                        <i class='bx bx-send'></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Finalizar</button>
      </div>
    </div>
  </div>
</div>