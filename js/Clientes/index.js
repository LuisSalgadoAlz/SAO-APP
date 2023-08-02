function LlenarTablaClientes() {
  const tableBody = document.querySelector(".tbody-clientes");
  const formData = new FormData();
  formData.append("procedimiento", "vista");
  // Realizar la petición AJAX para obtener los datos del combo box
  const xhrComboData = new XMLHttpRequest();
  xhrComboData.onreadystatechange = function () {
    //console.log("Respuesta del servidor:", xhrComboData.responseText);
    if (xhrComboData.readyState === 4 && xhrComboData.status === 200) {
      //console.log(this.responseText);
      const data = JSON.parse(xhrComboData.responseText);
      data.forEach(item => {
        const row = document.createElement("tr");
        row.innerHTML = `
                        <td class="py-3">${item.ID_cliente}</td>
                        <td class="py-3">${item.Nombre}</td>
                        <td class="py-3">${item.CorreoElectronico}</td>
                        <td class="py-3">${item.Telefono}</td>
                        <td class="py-3">
                          <button class="btn btn-warning btn-sm"><i class="bx bx-edit"></i></button>
                          <button class="btn btn-danger btn-sm"><i class="bx bx-eraser"></i></button>
                        </td>
                    `;
        tableBody.appendChild(row);
      });
    }
  };
  xhrComboData.open(
    "POST",
    "./php/server/Clientes/apis_clientes.php?getDataCliente=true",
    true
  );
  xhrComboData.send(formData);
}

document.addEventListener("DOMContentLoaded", () => {
  LlenarTablaClientes();
});
