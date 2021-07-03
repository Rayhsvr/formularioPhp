function validaNomina () {
  const f = document.getElementById('form1')
  const salario = parseFloat(f.salario.value)
  const dias = parseFloat(f.dias.value)
  if (salario <= 0 || dias < 0) {
    if (salario <= 0) {
      window.alert('El valor de Salario es incorrecto')
    }
    if (dias < 0) {
      window.alert('El valor de Días es incorrecto')
    }
    return false
  }
  return true
}

function generaOptions () {
  const tipo = document.getElementsByName('tipo')
  const $depto = document.querySelector('#depto')

  // Primero limpia el select
  for (let i = $depto.options.length; i >= 0; i--) {
    $depto.remove(i)
  }
  // Dependiendo el tipo seleccionado crea las opciones
  if (tipo[0].checked) {
    agregar($depto, 'COM', 'Compras')
    agregar($depto, 'DIR', 'Dirección')
    agregar($depto, 'INF', 'Informática')
    agregar($depto, 'PER', 'Personal')
    agregar($depto, 'VEN', 'Ventas')
  } else {
    agregar($depto, 'MAN', 'Mantenimiento')
    agregar($depto, 'MEN', 'Mensajería')
    agregar($depto, 'SER', 'Servicios')
  }
  validaNomina()
}

function agregar ($depto, valor, texto) {
  const option = document.createElement('option')
  option.value = valor
  option.text = texto
  $depto.appendChild(option)
}
