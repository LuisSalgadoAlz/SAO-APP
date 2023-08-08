<div class="container">
  <?php
  include('header.php');
  ?>
  <div class="row mt-2">
    <div class="col-12 p-2">
      <div class="container header bg-white rounded p-2 shadow-sm">
        <div class="row">
          <div class="col-8 px-5 py-4">
            <span class="fw-semibold fs-5">SAO-APP</span>
          </div>
          <div class="col-4 px-5 py-4">
            <span class="px-4 fw-semibold text-warning">Estado: Pendiente</span>
            <button class="btn btn-success px-4">Pagar</button>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-8 px-5">
            <span class="fs-6 fw-semibold">Factura #4</span>
            <div class="row">
              <div class="col d-flex flex-column">
                <span>Fecha de emision: 12 de agosto</span>
                <span>Factura para: Cliente</span>
                <span>Colocar direcion del cliente</span>
              </div>
              <div class="col d-flex flex-column">
                <span>Fecha de vencimiento: 12 de agosto</span>
                <span>Factura para: SAO INC</span>
                <span>Colocar direcion fiticia de la empresa</span>
              </div>
            </div>
          </div>
          <div class="col-4">

          </div>
        </div>
        <div class="row">
          <div class="col px-5 mt-4">
            <table class="table">
              <thead>
                <tr>
                  <th>Descripcion</th>
                  <th>ISV</th>
                  <th>Precio</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Paquete basico</td>
                  <td>199 Lps</td>
                  <td>1300 Lps</td>
                </tr>
                <tr>
                  <td>Horas extra</td>
                  <td>199 Lps</td>
                  <td>1300 Lps</td>
                </tr>
                <tr class="mt-3">
                  <td colspan="3">
                    <table class="table">
                      <thead>
                        <th>Articulo</th>
                        <th>Cantidad</th>
                        <th>ISV</th>
                        <th>Precio</th>
                      </thead>
                      <tbody>
                        <td>RAM</td>
                        <td>3</td>
                        <td>15</td>
                        <td>100</td>
                      </tbody>
                    </table>
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