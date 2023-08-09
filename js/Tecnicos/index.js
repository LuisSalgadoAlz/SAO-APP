function enviarFormulario(formularioId, procedimiento) {
  const formulario = document.getElementById(formularioId);
  const formData = new FormData(formulario);

  const areaEspecializacion = formData.get("area-especializacion");
  const horario = formData.get("horario");

  if (
    areaEspecializacion == "Selecione una opcion" ||
    horario == "Selecione una opcion"
  ) {
    return;
  }

  formData.append("procedimiento", procedimiento);

  for (const pair of formData.entries()) {
    console.log(pair[0], pair[1]);
  }
  // Realizar la solicitud a PHP mediante AJAX
  const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      // La respuesta desde PHP (opcional)
      //console.log(this.responseText);
    }
  };
  xhttp.open("POST", "./php/server/Tecnicos/apis_tecnicos.php", true);
  xhttp.send(formData);
}

document.getElementById("form-tecnico-nuevo").onsubmit = function (event) {
  event.preventDefault();
  enviarFormulario("form-tecnico-nuevo", "spInsertarNuevoTecnico");
  LimpiarInputs();
};

function cargarComboBox() {
  const comboBox = document.querySelector(".combo-area-e");
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
        option.value = data[i].AreaEspecializacionID; // Valor del option será el ID del producto
        option.text = data[i].Nombre; // Texto visible será el nombre del producto
        comboBox.add(option);
      }
    }
  };
  xhrComboData.open(
    "POST",
    "./php/server/Tecnicos/apis_tecnicos.php?getComboData=true",
    true
  );
  xhrComboData.send(formData);
}

function cargarComboBoxHorario() {
  const comboBox = document.querySelector(".combo-horario");
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
        option.value = data[i].HorarioID; // Valor del option será el ID del producto
        option.text = data[i].horario; // Texto visible será el nombre del producto
        comboBox.add(option);
      }
    }
  };
  xhrComboData.open(
    "POST",
    "./php/server/Tecnicos/apis_tecnicos.php?getComboDataHorario=true",
    true
  );
  xhrComboData.send(formData);
}

function LimpiarInputs() {
  const nombre = document.querySelector(".nombre-tecnico");
  const apellido = document.querySelector(".apellido-tecnico");
  const areaEspecializacion = document.querySelector(
    ".especializacion-tecnico"
  );
  const FechaNacimiento = document.querySelector(".fechaNacimiento-tecnico");
  const FechaContratacion = document.querySelector(
    ".fechaContratacion-tecnico"
  );
  const salario = document.querySelector(".salario-tecnico");
  const horario = document.querySelector(".horario-tecnico");

  nombre.value = "";
  apellido.value = "";
  salario.value = "";
  FechaNacimiento.value = null;
  FechaContratacion.value = null;
  areaEspecializacion.value = "Selecione una opcion";
  horario.value = "Selecione una opcion";
}

function llenarTabla() {
  const tableBody = document.querySelector(".tbody-tecnicos");
  const formData = new FormData();
  formData.append("procedimiento", "vista");

  // Realizar la petición Fetch para obtener los datos del combo box
  fetch("./php/server/Tecnicos/apis_tecnicos.php?getDataTecnico=true", {
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
      tableBody.innerHTML = "";
      data.forEach(item => {
        const row = document.createElement("tr");
        row.innerHTML = `
        <td class="py-3">${item.ID_tecnico}</td>
        <td class="py-3">${item.Nombre}</td>
        <td class="py-3">${item.Apellido}</td>
        <td class="py-3">${item.Estado === 0 ? "ocupado" : "Libre"}</td>
        <td class="py-3">${item.Contratos}</td>
        <td class="py-3">${item.Servicios}</td>
        <td class="py-3">
          <button class="btn btn-warning btn-sm btn-editar" data-id=${
            item.ID_tecnico
          } onclick="abrirModal(${
          item.ID_tecnico
        })"><i class="bx bx-edit"></i></button>
          <button class="btn btn-danger btn-sm eliminar-btn" data-id=${
            item.ID_tecnico
          } onclick="EliminarCliente(${
          item.ID_tecnico
        })"><i class="bx bx-eraser"></i></button>
        </td>
      `;
        tableBody.appendChild(row);
      });
    })
    .catch(error => {
      console.error("Fetch error:", error);
    });
}

document.addEventListener("DOMContentLoaded", () => {
  cargarComboBox();
  cargarComboBoxHorario();
  llenarTabla();
});
