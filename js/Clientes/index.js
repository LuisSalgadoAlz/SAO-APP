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
                          <button class="btn btn-danger btn-sm eliminar-btn" data-id=${item.ID_cliente}><i class="bx bx-eraser"></i></button>
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

function EliminarCliente() {
  const tableContainer = document.querySelector(".tbody-clientes");

  tableContainer.addEventListener("click", event => {
    // Verificar si el botón eliminar fue clickeado
    if (event.target.classList.contains("eliminar-btn")) {
      const button = event.target;
      const idCliente = button.getAttribute("data-id");

      Swal.fire({
        title: "¿Estás seguro?",
        text: "Esta acción no se puede deshacer",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Sí, eliminar",
        cancelButtonText: "Cancelar",
      }).then(result => {
        if (result.isConfirmed) {
          const formData = new FormData();
          formData.append("procedimiento", "spEliminarCliente");
          formData.append("id", idCliente);

          // Realizar la solicitud a PHP mediante AJAX
          const xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function () {
            if (this.readyState === 4) {
              if (this.status === 200) {
                // La respuesta desde PHP
                const response = JSON.parse(this.responseText);
                if (response.success) {
                  Swal.fire(
                    "¡Eliminado!",
                    "El cliente ha sido eliminado.",
                    "success"
                  ).then(() => {
                    // Actualizar la página o realizar las acciones necesarias
                    location.reload();
                  });
                } else {
                  Swal.fire(
                    "Error",
                    "No se pudo eliminar el cliente.",
                    "error"
                  );
                }
              } else {
                Swal.fire("Error", "Error en la solicitud AJAX", "error");
              }
            }
          };
          xhttp.open("POST", "./php/server/Clientes/apis_clientes.php", true);
          xhttp.send(formData);
        }
      });
    }
  });
}

document.addEventListener("DOMContentLoaded", () => {
  LlenarTablaClientes();
});
