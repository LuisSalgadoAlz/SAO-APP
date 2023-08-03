function LlenarTablaClientes() {
  const tableBody = document.querySelector(".tbody-clientes");
  const formData = new FormData();
  formData.append("procedimiento", "vista");

  const xhrComboData = new XMLHttpRequest();
  xhrComboData.onreadystatechange = function () {
    if (xhrComboData.readyState === 4 && xhrComboData.status === 200) {
      const responseText = xhrComboData.responseText.trim();
      try {
        const data = JSON.parse(responseText);
        data.forEach(item => {
          const row = document.createElement("tr");
          row.innerHTML = `
            <td class="py-3">${item.ID_cliente}</td>
            <td class="py-3">${item.Nombre}</td>
            <td class="py-3">${item.CorreoElectronico}</td>
            <td class="py-3">${item.Telefono}</td>
            <td class="py-3">
              <button class="btn btn-warning btn-sm"><i class="bx bx-edit"></i></button>
              <button class="btn btn-danger btn-sm eliminar-btn"  onclick="EliminarCliente(${item.ID_cliente})"><i class="bx bx-eraser"></i></button>
            </td>
          `;
          tableBody.appendChild(row);
        });
      } catch (error) {
        console.error("Error parsing JSON:", error);
      }
    }
  };
  xhrComboData.open(
    "POST",
    "./php/server/Clientes/apis_clientes.php?getDataCliente=true",
    true
  );
  xhrComboData.send(formData);
}

function EliminarCliente(idCliente) {
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

      const xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function () {
        if (this.readyState === 4) {
          if (this.status === 200) {
            try {
              const response = JSON.parse(this.responseText);
              if (response.success) {
                Swal.fire(
                  "¡Eliminado!",
                  "El cliente ha sido eliminado.",
                  "success"
                ).then(() => {
                  location.reload();
                });
              } else {
                Swal.fire("Error", "No se pudo eliminar el cliente.", "error");
              }
            } catch (error) {
              console.error("Error parsing JSON:", error);
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

document.addEventListener("DOMContentLoaded", () => {
  LlenarTablaClientes();
});