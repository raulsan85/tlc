<h1>Añadir una nueva Web</h1>
<form action="<?=base_url?>general/save" method="POST">

    <h2>Web</h2>
    
    <label for="nombre_web">Nombre de la web</label>
    <input type="text" name="nombre_web" required /><br/>

    <label for="url">Url</label>
    <input type="url" name="url" required /><br/>

    <label for="ano">Fecha de Creación</label>
    <input type="date" name="ano" /><br/>

    <label for="servidor">Servidor</label>
    <select name="servidor" >
        <option>Pro</option>
        <option>Dev</option>
        <option>Dedicado</option>
    </select>
    <br/>


    <label for="tematica">Temáticas</label><br/>
        <input name="tematica" list="tematicas">
        <datalist id="tematicas">
            
        <?php while($tematica = $tematicas->fetch_object()): ?>
            <option value="<?=$tematica->tematica?>"><?=$tematica->tematica?>            
        <?php endwhile; ?>

        </datalist>

    <br/>
    
    <h2>Cliente</h2>
        
    <label for="cliente">Nombre de la empresa</label>
        <input name="cliente" list="clientes" required>
        <datalist id="clientes">
            
        <?php while($cliente = $clientes->fetch_object()): ?>
            <option value="<?=$cliente->nombre?>"><?=$cliente->nombre?>            
        <?php endwhile; ?>

        </datalist>

    <br/>
    
    <label for="direccion">Dirección</label>
    <input type="text" name="direccion" /><br/>

    <label for="codigo_postal">Código Postal</label>
    <input type="number" name="codigo_postal" /><br/>

    <label for="ciudad">Ciudad</label>
    <input type="text" name="ciudad" /><br/>

    <label for="provincia">Provincia</label>
    <input type="text" name="provincia" /><br/>

    <label for="pais">País</label>
    <input type="text" name="pais" /><br/>

    <label for="gestor_cuentas">Gestor de Cuentas</label>
    <input type="text" name="gestor_cuentas" /><br/>

    <label for="fecha_alta">Fecha de Alta</label>
    <input type="date" name="fecha_alta" /><br/>

    <label for="division">División</label>
    <select name="division" >
        <option>TLC</option>
        <option>Seidonet</option>
    </select><br/>

    <label for="teamleader">Enlace a Teamleader</label>
    <input type="text" name="teamleader" /><br/>

    <label for="servicios">Servicios Contratados</label>
    <select name="servicios" >
        <option>Mantenimiento</option>
        <option>Alojamiento</option>
        <option>Dominio</option>
        <option>Correo</option>
    </select><br/>    

    <h2>Contacto</h2>
    
    <label for="nombre_contacto">Nombre</label>
        <input name="nombre_contacto" list="nombres_contactos" required>
        <datalist id="nombres_contactos">
            
        <?php while($contacto = $contactos->fetch_object()): ?>
            <option value="<?=$contacto->nombre?>"><?=$contacto->nombre?>            
        <?php endwhile; ?>

        </datalist>

    <br/>
    <label for="apellidos_contacto">Apellidos</label>
    <input type="text" name="apellidos_contacto" /><br/>

    <label for="cargo">Cargo</label>
    <input type="text" name="cargo" /><br/>

    <label for="telefono">Teléfono</label>
    <input type="tel" name="telefono" /><br/>

    <label for="email">Email</label>
    <input type="email" name="email" /><br/>

    <h2>Características de la Web</h2>

    <label for="desarrollo">Tipo de desarrollo</label>
    <input type="text" name="desarrollo" /><br/>

    <label for="tipo">Tipo de funcionalidad</label>
    <input type="text" name="tipo" /><br/>

    <label for="framework">FrameWork</label>
    <input type="text" name="framework" /><br/>

    <label for="theme">Theme</label>
    <input type="text" name="theme" /><br/>

    <label for="design">Diseño</label>
    <input type="text" name="design" /><br/>

    <label for="certificado">Certificado SSL</label>
    <input type="text" name="certificado" /><br/>

    <label for="responsive">Diseño responsive</label>
    <input type="text" name="responsive" /><br/>

    <label for="idiomas">Idiomas</label>
    <input type="text" name="idiomas" /><br/>

    <label for="seo">Optimización</label>
    <input type="text" name="seo" /><br/>

    <h2>Datos estructurados</h2>
    <label for="datos_estructurados">Datos estructurados</label>
    <input type="text" name="datos_estructurados" /><br/>
    
    <h2>Plugins</h2>
    <label for="plugins">Plugins</label>
    <input type="text" name="plugins" /><br/>
    <br/><br/>
    <input type="submit" value="Guardar" />
        
</form>