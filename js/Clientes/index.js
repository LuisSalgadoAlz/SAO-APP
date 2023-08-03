function LlenarTablaClientes() {
  const tableBody = document.querySelector(".tbody-clientes");
  const formData = new FormData();
  formData.append("procedimiento", "vista");

  fetch("./php/server/Clientes/apis_clientes.php?getDataCliente=true", {
    method: "POST",
    body: formData,
  })
    .then(response => {
      if (!response.ok) {
        throw new Error(`Error en la solicitud: ${response.status}`);
      }
      return response.json();
    })
    .then(data => {
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
    })
    .catch(error => {
      console.error("Error en la solicitud:", error);
    });
}

function EliminarCliente() {
  const tableContainer = document.querySelector(".tbody-clientes");

  tableContainer.addEventListener("click", event => {
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

          fetch("./php/server/Clientes/apis_clientes.php", {
            method: "POST",
            body: formData,
          })
            .then(response => {
              if (!response.ok) {
                throw new Error(`Error en la solicitud: ${response.status}`);
              }
              return response.json();
            })
            .then(response => {
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
            })
            .catch(error => {
              console.error("Error en la solicitud:", error);
              Swal.fire("Error", "Error en la solicitud", "error");
            });
        }
      });
    }
  });
}

document.addEventListener("DOMContentLoaded", () => {
  LlenarTablaClientes();
  EliminarCliente();
});
