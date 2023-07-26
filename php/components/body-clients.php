<div class="container">
    <?php
        include('header.php');
    ?>
    <div class="row mt-3">
        <div class="col-9 p-2">
            <div class="col bg-white rounded p-4 overflow-auto table-scroll" style="height: 83vh;max-height: 83vh; ">
                <div class="container">
                    <div class="row mt-3">
                        <div class="col-6">
                            <span class="fw-bold fs-4">Clientes</span>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                    <i class='bx bx-search'></i>
                                </button>
                            </div>
                        </div>    
                    </div>
                    <div class="row mt-3">
                        <!-- Tabla de clientes -->
                        <div class="col">
                            <table class="table table-sm table-hover bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Correo electrónico</th>
                                        <th>Teléfono</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-3">1</td>
                                        <td class="py-3">Cliente 1</td>
                                        <td class="py-3">cliente1@example.com</td>
                                        <td class="py-3">123-456-7890</td>
                                        <td class="py-3">
                                            <button class="btn btn-warning btn-sm"><i class='bx bx-edit'></i></button>
                                            <button class="btn btn-danger btn-sm"><i class='bx bx-eraser'></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3">1</td>
                                        <td class="py-3">Cliente 1</td>
                                        <td class="py-3">cliente1@example.com</td>
                                        <td class="py-3">123-456-7890</td>
                                        <td class="py-3">
                                            <button class="btn btn-warning btn-sm"><i class='bx bx-edit'></i></button>
                                            <button class="btn btn-danger btn-sm"><i class='bx bx-eraser'></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3">1</td>
                                        <td class="py-3">Cliente 1</td>
                                        <td class="py-3">cliente1@example.com</td>
                                        <td class="py-3">123-456-7890</td>
                                        <td class="py-3">
                                            <button class="btn btn-warning btn-sm"><i class='bx bx-edit'></i></button>
                                            <button class="btn btn-danger btn-sm"><i class='bx bx-eraser'></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3">1</td>
                                        <td class="py-3">Cliente 1</td>
                                        <td class="py-3">cliente1@example.com</td>
                                        <td class="py-3">123-456-7890</td>
                                        <td class="py-3">
                                            <button class="btn btn-warning btn-sm"><i class='bx bx-edit'></i></button>
                                            <button class="btn btn-danger btn-sm"><i class='bx bx-eraser'></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3">1</td>
                                        <td class="py-3">Cliente 1</td>
                                        <td class="py-3">cliente1@example.com</td>
                                        <td class="py-3">123-456-7890</td>
                                        <td class="py-3">
                                            <button class="btn btn-warning btn-sm"><i class='bx bx-edit'></i></button>
                                            <button class="btn btn-danger btn-sm"><i class='bx bx-eraser'></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3">1</td>
                                        <td class="py-3">Cliente 1</td>
                                        <td class="py-3">cliente1@example.com</td>
                                        <td class="py-3">123-456-7890</td>
                                        <td class="py-3">
                                            <button class="btn btn-warning btn-sm"><i class='bx bx-edit'></i></button>
                                            <button class="btn btn-danger btn-sm"><i class='bx bx-eraser'></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3">1</td>
                                        <td class="py-3">Cliente 1</td>
                                        <td class="py-3">cliente1@example.com</td>
                                        <td class="py-3">123-456-7890</td>
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
        <div class="col-3 p-2">
            <div class="col bg-white rounded p-4 " style="height: 83vh;max-height: 83vh;">
                <!-- Preview de clientes -->
                <div class="container">
                    <div class="row mt-3">
                        <div class="col">
                            <span class="fw-bold">Nombre: Cliente 1</span>
                            <hr>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <img src="./img/avatar.svg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <span>Direcion: Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <span>Correo: example@gmail.com</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <span>Telefono: +504 95959500</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <span>Cantidad de contratos: 0</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <span>Estado: <button class="btn btn-success btn-sm ms-6">activo</button></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>