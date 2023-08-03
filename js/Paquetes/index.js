function enviarFormulario(formularioId, procedimiento) {
  const formulario = document.getElementById(formularioId);
  const formData = new FormData(formulario);

  // const areaEspecializacion = formData.get("area-especializacion");
  // const horario = formData.get("horario");

  // if (
  //   areaEspecializacion == "Selecione una opcion" ||
  //   horario == "Selecione una opcion"
  // ) {
  //   return;
  // }

  formData.append("procedimiento", procedimiento);
  // Realizar la solicitud a PHP mediante AJAX
  const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      // La respuesta desde PHP (opcional)
      console.log(this.responseText);
    }
  };
  xhttp.open("POST", "./php/server/Paquetes/apis_paquetes.php", true);
  xhttp.send(formData);
}

document.getElementById("agregarNuevoPaquete").onsubmit = function (event) {
  event.preventDefault();
  enviarFormulario("agregarNuevoPaquete", "spInsertarContratoPaquete");
  LimpiarInputs();
};

function cargarComboBoxPaquete() {
  const comboBox = document.querySelector(".combo-opcion-paquete");
  const formData = new FormData();
  formData.append("procedimiento", "vista");
  // Realizar la petición AJAX para obtener los datos del combo box
  const xhrComboData = new XMLHttpRequest();
  xhrComboData.onreadystatechange = function () {
    //console.log("Respuesta del servidor:", xhrComboData.responseText);
    if (xhrComboData.readyState === 4 && xhrComboData.status === 200) {
      //console.log(this.responseText);
      const data = JSON.parse(xhrComboData.responseText);

      // Agregar las opciones al combo box
      for (let i = 0; i < data.length; i++) {
        const option = document.createElement("option");
        option.value = data[i].PaqueteID; // Valor del option será el ID del producto
        option.text = data[i].Nombre; // Texto visible será el nombre del producto
        comboBox.add(option);
      }
    }
  };
  xhrComboData.open(
    "POST",
    "./php/server/Paquetes/apis_paquetes.php?getComboDataPaquete=true",
    true
  );
  xhrComboData.send(formData);
}

function cargarComboBoxTecnico() {
  const comboBox = document.querySelector(".combo-tecnico-asignar");
  const formData = new FormData();
  formData.append("procedimiento", "vista");
  // Realizar la petición AJAX para obtener los datos del combo box
  const xhrComboData = new XMLHttpRequest();
  xhrComboData.onreadystatechange = function () {
    //console.log("Respuesta del servidor:", xhrComboData.responseText);
    if (xhrComboData.readyState === 4 && xhrComboData.status === 200) {
      //console.log(this.responseText);
      const data = JSON.parse(xhrComboData.responseText);

      // Agregar las opciones al combo box
      for (let i = 0; i < data.length; i++) {
        const option = document.createElement("option");
        option.value = data[i].ID_tecnico; // Valor del option será el ID del producto
        option.text = data[i].Nombre; // Texto visible será el nombre del producto
        comboBox.add(option);
      }
    }
  };
  xhrComboData.open(
    "POST",
    "./php/server/Paquetes/apis_paquetes.php?getComboDataTecnico=true",
    true
  );
  xhrComboData.send(formData);
}

function cargarComboBoxCliente() {
  const comboBox = document.querySelector(".combo-cliente");
  const searchInput = document.getElementById("searchCliente"); // Obtener el elemento de búsqueda

  const formData = new FormData();
  formData.append("procedimiento", "vista");

  const xhrComboData = new XMLHttpRequest();
  xhrComboData.onreadystatechange = function () {
    if (xhrComboData.readyState === 4 && xhrComboData.status === 200) {
      const data = JSON.parse(xhrComboData.responseText);

      // Limpiar opciones anteriores del combo box
      comboBox.innerHTML = "";

      // Filtrar los datos según la búsqueda
      const searchTerm = searchInput.value.toLowerCase();
      const filteredData = data.filter(item => item.Nombre.toLowerCase().includes(searchTerm));

      // Agregar las opciones filtradas al combo box
      for (let i = 0; i < filteredData.length; i++) {
        const option = document.createElement("option");
        option.value = filteredData[i].ID_cliente;
        option.text = filteredData[i].Nombre;
        comboBox.add(option);
      }
    }
  };

  xhrComboData.open(
    "POST",
    "./php/server/Paquetes/apis_paquetes.php?getComboDataCliente=true",
    true
  );
  xhrComboData.send(formData);
}

document.addEventListener("DOMContentLoaded", () => {
  cargarComboBoxTecnico();
  cargarComboBoxPaquete();
  cargarComboBoxCliente();
  const searchInput = document.getElementById("searchCliente");
  searchInput.addEventListener("input", cargarComboBoxCliente); 
});
