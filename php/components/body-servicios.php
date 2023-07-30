<div class="container">
    <?php
        include('header.php');
    ?>
    <div class="row mt-2">
        <div class="col-6 p-2">
            <div class="container header bg-white rounded p-2 shadow-sm">
                <!-- Menus -->
                <div class="row border-bottom pb-2 m-1">
                    <div class="col-8 px-3 d-flex align-items-center fw-semibold">
                        <span class="">Gestion de paquete</span>
                    </div>
                    <div class="col-4 d-flex justify-content-end px-3">
                        <button class="btn btn-secondary btn-sm">
                            <i class='bx bx-message-square-add me-2'></i>
                            Nuevo paquetes
                        </button>
                    </div>
                </div>
                <div class="row mt-3 pb-2 m-1">
                    <div class="col-6 border-end px-3">
                        <span class="fw-light">
                            Total paquetes
                        </span>
                    </div>
                    <div class="col-6 text-center">
                        <span class="fw-light">
                            8
                        </span>
                    </div>
                </div>
                <div class="row mt-3 pb-2 m-1">
                    <div class="col-6 border-end px-3">
                        <span class="fw-light">
                            Contratos hechos
                        </span>
                    </div>
                    <div class="col-6 text-center">
                        <span class="fw-light">
                            12
                        </span>
                    </div>
                </div>  
            </div>
        </div>
        <div class="col-6 p-2">
            <div class="container header bg-white rounded p-2 shadow-sm">
                <!-- Menus -->
                <div class="row border-bottom pb-2 m-1">
                    <div class="col-8 px-3 d-flex align-items-center fw-semibold">
                        <span class="">Gestion de paquete</span>
                    </div>
                    <div class="col-4 d-flex justify-content-end px-3">
                        <button class="btn btn-secondary btn-sm">
                            <i class='bx bx-message-square-add me-2'></i>
                            Nuevo servicio
                        </button>
                    </div>
                </div>
                <div class="row mt-3 pb-2 m-1">
                    <div class="col-6 border-end px-3">
                        <span class="fw-light">
                            Total servicios
                        </span>
                    </div>
                    <div class="col-6 text-center">
                        <span class="fw-light">
                            8
                        </span>
                    </div>
                </div>
                <div class="row mt-3 pb-2 m-1">
                    <div class="col-6 border-end px-3">
                        <span class="fw-light">
                            Compra de servicio
                        </span>
                    </div>
                    <div class="col-6 text-center">
                        <span class="fw-light">
                            12
                        </span>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-6 p-2">
            <div class="container header bg-white rounded p-3 shadow-sm">
                <!-- Tablas -->
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-4 d-flex align-items-center">
                            <span class="fw-semibold">
                                Gestion
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
                        <div class="col-12 overflow-auto table-scroll" style="height: 47vh;">
                            <table class="table table-hover bordered">
                                <thead class="table-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Servicios</th>
                                    <th scope="col">Contratos</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Accion</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-3">1</td>
                                        <td class="py-3">Premier</td>
                                        <td class="py-3">13</td>
                                        <td class="py-3">1</td>
                                        <td class="py-3">1,200 Lps</td>
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
        <div class="col-6 p-2">
            <div class="container header bg-white rounded p-3 shadow-sm">
                <!-- Tablas -->
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-4 d-flex align-items-center">
                            <span class="fw-semibold">
                                Gestion
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
                        <div class="col-12 overflow-auto table-scroll" style="height: 47vh;">
                            <table class="table table-hover bordered">
                                <thead class="table-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Contratos</th>
                                    <th scope="col">Ventas</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Accion</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-3">1</td>
                                        <td class="py-3">Reparacion preventiva</td>
                                        <td class="py-3">1</td>
                                        <td class="py-3">18</td>
                                        <td class="py-3">188 Lps</td>
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