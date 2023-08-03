function cargarComboBox() {
  const comboBox = document.querySelector(".combo-servicios");
  const formData = new FormData();
  formData.append("procedimiento", "vista");

  // Realizar la petición Fetch para obtener los datos del combo box
  fetch("./php/server/Servicios/apis_servicios.php?getComboData=true", {
    method: "POST",
    body: formData,
  })
    .then(response => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json();
    })
    .then(data => {
      // Agregar las opciones al combo box
      data.forEach(item => {
        const option = document.createElement("option");
        option.value = item.ID_servicio; // Valor del option será el ID del producto
        option.text = item.Nombre; // Texto visible será el nombre del producto
        comboBox.add(option);
      });
    })
    .catch(error => {
      console.error("Fetch error:", error);
    });
}

function LlenarTablaServicios() {
  const tableBody = document.querySelector(".tbody-servicios");
  const formData = new FormData();
  const urlParams = new URLSearchParams(window.location.search);
  const paqueteID = urlParams.get("paqueteID");

  formData.append("paqueteID", paqueteID);
  formData.append("procedimiento", "spMostrarServiciosPaqueteEspecifico");

  // Realizar la solicitud a PHP mediante Fetch API
  fetch("./php/server/Servicios/apis_servicios.php", {
    method: "POST",
    body: formData,
  })
    .then(response => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json();
    })
    .then(data => {
      // Limpiar el contenido existente de la tabla
      tableBody.innerHTML = "";

      data.forEach(item => {
        const row = document.createElement("tr");
        row.setAttribute("data-id", item.ID_servicio);
        row.innerHTML = `
          <td class="py-3">${item.ID_servicio}</td>
          <td class="py-3">${item.Nombre}</td>
          <td class="py-3">${item.Precio}</td>
          <td class="py-3">
            <button class="btn btn-danger btn-sm eliminar-btn" data-id="${item.ID_servicio}">
              <i class="bx bx-eraser"></i>
            </button>
          </td>
        `;
        tableBody.appendChild(row);
      });
    })
    .catch(error => {
      console.error("Fetch error:", error);
    });
}

function enviarFormulario(formularioId, procedimiento) {
  const formulario = document.getElementById(formularioId);
  const formData = new FormData(formulario);
  const urlParams = new URLSearchParams(window.location.search);
  const paqueteID = urlParams.get("paqueteID");

  // Agregar otros campos o datos si es necesario
  formData.append("procedimiento", procedimiento);
  formData.append("paqueteID", paqueteID);

  // Realizar la solicitud a PHP mediante Fetch API
  fetch("./php/server/Servicios/apis_servicios.php", {
    method: "POST",
    body: formData,
  })
    .then(response => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.text(); // Si se espera una respuesta de texto
    })
    .then(responseText => {
      LlenarTablaServicios();
    })
    .catch(error => {
      console.error("Fetch error:", error);
    });
}

function ReestablecerCombo() {
  const comboBox = document.querySelector(".combo-servicios");

  comboBox.value = "Selecione una opcion";
}

// Manejar el evento de envío para cada formulario
document.getElementById("form-agregar-servicio").onsubmit = function (event) {
  event.preventDefault();
  enviarFormulario(
    "form-agregar-servicio",
    "spActualizarTablaPaquetesDetalles"
  );
  ReestablecerCombo();
};

document.addEventListener("DOMContentLoaded", () => {
  cargarComboBox();
  LlenarTablaServicios();
});
