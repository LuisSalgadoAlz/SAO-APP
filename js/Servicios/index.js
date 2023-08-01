// Función para enviar el formulario mediante AJAX
function enviarFormulario(formularioId, procedimiento) {
  const formulario = document.getElementById(formularioId);
  const formData = new FormData(formulario);

  // Agregar otros campos o datos si es necesario
  formData.append("procedimiento", procedimiento);

  // Realizar la solicitud a PHP mediante AJAX
  const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      // La respuesta desde PHP (opcional)
      console.log(this.responseText);
    }
  };
  xhttp.open("POST", "./php/server/Servicios/apis_servicios.php", true);
  xhttp.send(formData);
}

// Manejar el evento de envío para cada formulario
document.getElementById("form-Nuevo-Servicio").onsubmit = function (event) {
  event.preventDefault();
  enviarFormulario("form-Nuevo-Servicio", "spInsertarNuevoServicio");
  LimpiarFormServicios();
};

document.getElementById("form-Nuevo-Paquete").onsubmit = function (event) {
  event.preventDefault();
  enviarFormulario("form-Nuevo-Paquete", "spInsertarPaquete");
};

function LimpiarFormServicios() {
  const nombre = document.querySelector(".servicio-nombre");
  const descripcion = document.querySelector(".descripcion-servicio");
  const precio = document.querySelector(".servicio-precio");

  nombre.value = "";
  descripcion.value = "";
  precio.value = "";
}

function cargarComboBox() {
  const comboBox = document.querySelector(".combo-servicio-inicial");
  const precioInicial = document.querySelector(".precio-inicial-paquete");
  const formData = new FormData();
  formData.append("procedimiento", "vista");
  // Realizar la petición AJAX para obtener los datos del combo box
  const xhrComboData = new XMLHttpRequest();
  xhrComboData.onreadystatechange = function () {
    if (xhrComboData.readyState === 4 && xhrComboData.status === 200) {
      console.log(this.responseText);
      const data = JSON.parse(xhrComboData.responseText);

      // Agregar las opciones al combo box
      for (let i = 0; i < data.length; i++) {
        const option = document.createElement("option");
        option.value = data[i].ID_servicio; // Valor del option será el ID del producto
        option.text = data[i].Nombre; // Texto visible será el nombre del producto
        comboBox.add(option);
      }

      comboBox.addEventListener("change", function () {
        const selectedValue = comboBox.value;
        if (selectedValue > 0) {
          precioInicial.value = data[selectedValue - 1].Precio;
        } else {
          precioInicial.value = "";
        }
      });
    }
  };

  xhrComboData.open(
    "POST",
    "./php/server/Servicios/apis_servicios.php?getComboData=true",
    true
  );
  xhrComboData.send(formData);
}

document.addEventListener("DOMContentLoaded", () => {
  cargarComboBox();
});
