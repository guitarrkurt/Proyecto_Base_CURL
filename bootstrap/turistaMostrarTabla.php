      <!-- Mostramos una consulta general de todos los usuarios-->
      <table border = 3 width = 80% >
        <!-- Encabezado de nuestra tabla -->
        <thead>
          <!-- columnas tabla -->
          <td><center><b>Nombre</b></center></td>
          <td><center><b>Direcci&oacute;n</b></center></td>
          <td><center><b>Telefono</b></center></td>
          <td><center><b>Correo</b></center></td>
          <td><center><b>Estrellas</b></center></td>
          <!-- EOF -->
        </thead>
        <!-- Cuerpo de nuestra tabla -->
        <tbody>
          <?php while ($row = $resultado->fetch_assoc()){ ?>
          <tr>
            <td>
              <?php echo $row["nombre"];?>
            </td>
            <td>
              <?php echo $row["direccion"];?>
            </td>
            <td>
              <?php echo $row["telefono"];?>
            </td>
            <td>
              <?php echo $row["correo"];?>
            </td>
            <td>
              <?php echo $row["estrellas"];?>
            </td>
          </tr>
          <?php } ?>  
        </tbody>  
      </table>
      <!-- EOF -->
