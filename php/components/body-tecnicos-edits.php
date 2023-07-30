<div class="container">
    <?php
        include('header.php');
    ?>
    <div class="row mt-2">
        <div class="col-4 p-2">
            <div class="container header bg-white rounded p-2 shadow-sm">
                <div class="row">
                    <div class="px-5 py-4">
                        <span class="fs-5 fw-semibold">Perfil</span>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <img src="./img/avatar.svg" alt="profile" style="width:55%">
                        </div>
                        <hr>
                        <form class="mt-3">
                            <div class="mb-3 d-flex gap-2">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                    <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Apellido</label>
                                    <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="mb-3">
                            </div>
                            <div class="mb-3 d-flex gap-2">
                                <div class="col">
                                    <label for="exampleInputPassword1" class="form-label">Especialidad</label>
                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                        <option selected>Ninguna</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>    
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Telefono</label>
                                    <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" >
                                </div>
                            </div>
                            <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                                    <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            <button type="submit" class="btn btn-primary w-100">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8 p-2">
            <div class="container header bg-white rounded p-4 shadow-sm" style="height:41vh">
                <span class="fs-6 fw-semibold">Contratos</span>
                <hr>
                <div class="w-100 bg-light d-flex gap-2 p-3 rey rounded overflow-x-auto" style="height: 28vh">
                    <div class="card col-4 p-2">
                        <span class="d-block mb-3 fs-6 fw-semibold">
                            Nombre paquete
                        </span>
                        <span class="d-block fs-6">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        </span>
                    </div>
                    <div class="card col-4 p-2">
                        <span class="d-block mb-3 fs-6 fw-semibold">
                            Nombre paquete
                        </span>
                        <span class="d-block fs-6">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        </span>
                    </div>
                    <div class="card col-4 p-2">
                        <span class="d-block mb-3 fs-6 fw-semibold">
                            Nombre paquete
                        </span>
                        <span class="d-block fs-6">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        </span>
                    </div>
                    <div class="card col-4 p-2">
                        <span class="d-block mb-3 fs-6 fw-semibold">
                            Nombre paquete
                        </span>
                        <span class="d-block fs-6">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        </span>
                    </div>
                </div>
            </div>
            <div class="mt-3 container header bg-white rounded p-4 shadow-sm" style="height:40.5vh">
                <span class="fs-6 fw-semibold">Servicios</span>
                <hr>
                <div class="w-100 bg-light d-flex gap-2 p-3 rey rounded overflow-x-auto" style="height: 28vh">
                    <div class="card col-4 p-2">
                        <span class="d-block mb-3 fs-6 fw-semibold">
                            Nombre paquete
                        </span>
                        <span class="d-block fs-6">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        </span>
                    </div>
                    <div class="card col-4 p-2">
                        <span class="d-block mb-3 fs-6 fw-semibold">
                            Nombre paquete
                        </span>
                        <span class="d-block fs-6">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        </span>
                    </div>
                    <div class="card col-4 p-2">
                        <span class="d-block mb-3 fs-6 fw-semibold">
                            Nombre paquete
                        </span>
                        <span class="d-block fs-6">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        </span>
                    </div>
                    <div class="card col-4 p-2">
                        <span class="d-block mb-3 fs-6 fw-semibold">
                            Nombre paquete
                        </span>
                        <span class="d-block fs-6">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

