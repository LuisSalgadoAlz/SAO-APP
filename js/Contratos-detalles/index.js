function cargarComboBoxPaquete() {
  const comboBox = document.querySelector(".combo-opcion-paquete");
  const formData = new FormData();
  formData.append("procedimiento", "vista");

  // Realizar la petición utilizando fetch
  fetch("./php/server/Paquetes/apis_paquetes.php?getComboDataPaquete=true", {
    method: "POST",
    body: formData,
  })
    .then(response => {
      if (response.ok) {
        return response.json();
      } else {
        throw new Error("Error en la petición AJAX");
      }
    })
    .then(data => {
      // console.log(data);
      // Agregar las opciones al combo box
      for (let i = 0; i < data.length; i++) {
        const option = document.createElement("option");
        option.value = data[i].PaqueteID; // Valor del option será el ID del producto
        option.text = data[i].Nombre; // Texto visible será el nombre del producto
        comboBox.add(option);
      }
    })
    .catch(error => {
      console.error("Error:", error);
    });
}

function cargarComboBoxTecnico() {
  const comboBox = document.querySelector(".combo-tecnico-asignar");
  const formData = new FormData();
  formData.append("procedimiento", "vista");

  // Realizar la petición utilizando fetch
  fetch("./php/server/Paquetes/apis_paquetes.php?getComboDataTecnico=true", {
    method: "POST",
    body: formData,
  })
    .then(response => {
      if (response.ok) {
        return response.json();
      } else {
        throw new Error("Error en la petición AJAX");
      }
    })
    .then(data => {
      // Agregar las opciones al combo box
      for (let i = 0; i < data.length; i++) {
        const option = document.createElement("option");
        option.value = data[i].ID_tecnico; // Valor del option será el ID del técnico
        option.text = data[i].Nombre; // Texto visible será el nombre del técnico
        comboBox.add(option);
      }
    })
    .catch(error => {
      console.error("Error:", error);
    });
}

function cargarComboBoxTecnico() {
  const comboBox = document.querySelector(".combo-tecnico-asignar");
  const formData = new FormData();
  formData.append("procedimiento", "vista");

  // Realizar la petición utilizando fetch
  fetch("./php/server/Paquetes/apis_paquetes.php?getComboDataTecnico=true", {
    method: "POST",
    body: formData,
  })
    .then(response => {
      if (response.ok) {
        return response.json();
      } else {
        throw new Error("Error en la petición AJAX");
      }
    })
    .then(data => {
      // Agregar las opciones al combo box
      data.forEach(item => {
        const option = document.createElement("option");
        option.value = item.ID_tecnico;
        option.text = item.Nombre;
        comboBox.add(option);
      });
    })
    .catch(error => {
      console.error("Error:", error);
    });
}

function cargarComboBoxEstado() {
  const comboBox = document.querySelector(".combo-estado-contrato");
  const formData = new FormData();
  formData.append("procedimiento", "vista");

  // Realizar la petición utilizando fetch
  fetch(
    "./php/server/Paquetes/apis_paquetes.php?getComboDataEstadoContrato=true",
    {
      method: "POST",
      body: formData,
    }
  )
    .then(response => {
      if (response.ok) {
        return response.json();
      } else {
        throw new Error("Error en la petición AJAX");
      }
    })
    .then(data => {
      // Agregar las opciones al combo box
      data.forEach(item => {
        const option = document.createElement("option");
        option.value = item.EstadoID;
        option.text = item.Nombre;
        comboBox.add(option);
      });
    })
    .catch(error => {
      console.error("Error:", error);
    });
}

function CargarDatosInicioContratos() {
  const nombreCliente = document.querySelector(".cliente-contrato");
  const paquete = document.querySelector(".combo-opcion-paquete");
  const tecnico = document.querySelector(".combo-tecnico-asignar");
  const fechaInicio = document.querySelector(".fecha-inicio");
  const fechaFinal = document.querySelector(".fecha-final");
  const estado = document.querySelector(".combo-estado-contrato");

  const urlParams = new URLSearchParams(window.location.search);
  const contratoID = urlParams.get("contratoID");

  const formData = new FormData();
  formData.append("procedimiento", "spMostrarContratoDetalles");
  formData.append("contratoID", contratoID);

  fetch("./php/server/Paquetes/apis_paquetes.php", {
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
      nombreCliente.value = data[0].Cliente;
      paquete.value = data[0].Contrato;
      tecnico.value = data[0].tecnico;
      const fechaInicioFormat = data[0].FechaInicio;
      const fechaFinalFormat = data[0].FechaFinal;
      fechaInicio.value = fechaInicioFormat.date.split(" ")[0];
      fechaFinal.value = fechaFinalFormat.date.split(" ")[0];
      estado.value = data[0].Estado;
    })
    .catch(error => {
      console.error("Fetch error:", error);
    });
}

document.addEventListener("DOMContentLoaded", () => {
  cargarComboBoxTecnico();
  cargarComboBoxPaquete();
  cargarComboBoxEstado();
  CargarDatosInicioContratos();
  // cargarComboBoxCliente();
  // LlenarTablaEstadoPaquetes();
  // const searchInput = document.getElementById("searchCliente");
  // searchInput.addEventListener("input", cargarComboBoxCliente);
});
