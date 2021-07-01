<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario en PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/funciones.js"> </script>
  </head>
  <body>
      <header>
        <h1>Formulario</h1>
      </header>
      <nav> <!-- Aquí va el menú --> </nav>
      <section>
      <form action="include/resultado.php" method="post" name="form1" id="form1" onsubmit="return validaNomina()">
        <div id="datosGenerales">
          <h2>Datos Generales</h2>
          <p><label for="clave">Cve. Empleado</label>
          <input type="text" name="clave" id="clave" size="8" maxlength="5" placeholder="Alfanumérico" required>
          </p>
          <p><label for="passw">Contraseña</label>
          <input type="password" name="passw" id="passw" size="10" maxlength="10" placeholder="8-10 caracteres">
          </p>
          <p><label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" size="20" maxlength="50" placeholder="Nombre(s)" required>
          </p>
          <p><label for="apellido">Apellido</label>
          <input type="text" name="apellido" id="apellido" size="20" maxlength="80" placeholder="Apellido(s)" required>
          </p>
          <p><label for="fechaNac">Fecha Nacimiento</label>
          <input type="date" name="fechaNac" id="fechaNac">
          </p>
          <p>Actividades Extras</p>
          <p>
            <label>Brigadas<input type="checkbox" name="brigada" id="brigada"></label>
            <label>Fútbol<input type="checkbox" name="futbol" id="futbol"></label>
            <label>Lectura<input type="checkbox" name="lectura" id="lectura"></label>
          </p>
        </div>
        <div id="datosTrabajo">
          <h2>Datos Trabajo</h2>
          <p>
            <label for="salario">Salario $</label>
            <input type="number" class="numero" name="salario" id="salario" size="10" maxlength="10" placeholder="Mayor a cero" required onchange="return validaNomina()">
          </p>
          <p>
            <label for="dias">Días Trabajados</label>
            <input type="number" class="numero" name="dias" id="dias" size="5" maxlength="8" value = "15" placeholder="15" required onchange="return validaNomina()">
          </p>
          <p>Tipo Empleado</p>
                <p><label><input type="radio" name="tipo" id="tipoA" value="A" checked onchange="generaOptions()">Administrativo</label></p>
                <p><label><input type="radio" name="tipo" id="tipoO" value="O" onchange="generaOptions()">Operativo</label></p>
                <label for="depto">
                  <p>Departamento:
                        <select name="depto" id="depto">
                          <option value="COM">Compras</option>
                          <option value="DIR">Dirección</option>
                          <option value="INF">Informática</option>
                          <option value="PER">Personal</option>
                          <option value="VEN">Ventas</option>
                        </select>
                  </p>
                </label>
        </div>
        <div id="botones">
          <p><label for="observaciones">Comentarios</label></p>
          <p>
            <textarea name="observaciones" id="observaciones" cols="34">
            </textarea>
          </p>
          <p>
          <input type="submit" name="calcular" id="calcular" value="Calcular">
          <input type="reset" name="limpiar" id="limpiar" value="Limpiar">
        </p>
        </div>
    </form>
    </section>
      <footer></footer>
  </body>
</html>
