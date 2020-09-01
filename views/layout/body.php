        <h1>Base de datos</h1>
        <div id="selector">
            <form action="<?=base_url?>web/seleccion" method="POST">
                <div id="columnas">
                <div id="clientes">
                    <input type="checkbox" name="clientes"/><b>Clientes:</b>
                    <ul>
                        <li><input type="checkbox" name="nombre"/>Empresa</li>
                        <li><input type="checkbox" name="direccion"/>Dirección</li>
                        <li><input type="checkbox" name="codigo_postal"/>Código Postal</li>
                        <li><input type="checkbox" name="ciudad"/>Ciudad</li>
                        <li><input type="checkbox" name="provincia"/>Provincia</li>
                        <li><input type="checkbox" name="pais"/>País</li>
                        <li><input type="checkbox" name="gestor_cuentas"/>Gestor de cuentas</li>
                        <li><input type="checkbox" name="fecha_alta"/>Fecha de alta</li>
                        <li><input type="checkbox" name="baja"/>Estado</li>
                        <li><input type="checkbox" name="division"/>División</li>
                    </ul>
                </div>
                <div id="contactos">
                    <input type="checkbox" name="contactos"/><b>Contactos:</b>
                    <ul>
                        <li><input type="checkbox" name="contacto"/>Contacto</li>
                        <li><input type="checkbox" name="cargo"/>Cargo</li>
                        <li><input type="checkbox" name="telefono"/>Teléfono</li>
                        <li><input type="checkbox" name="email"/>Correo</li>
                    </ul>
                </div>
                <div id="webs">
                    <input type="checkbox" name="webs"/><b>Webs</b>
                    <ul>
                        <li><input type="checkbox" name="web"/>Web</li>
                        <li><input type="checkbox" name="url"/>URL</li>
                        <li><input type="checkbox" name="ano"/>Año</li>
                        <li><input type="checkbox" name="servidor"/>Servidor</li>
                    </ul>
                </div>
   
                <div id="tematica">
                    <input type="checkbox" name="tematica"/><b>Temática</b>
                </div>
                <div id="servicios">
                    <input type="checkbox" name="servicios"/><b>Servicios</b>
                </div>
                <div id="caracteristicas">
                    <input type="checkbox" name="caracteristicas"/><b>Características</b>
                    <ul>
                        <li><input type="checkbox" name="desarrollo"/>Desarrollo</li>
                        <li><input type="checkbox" name="tipo"/>Tipo</li>
                        <li><input type="checkbox" name="framework"/>Framework</li>
                        <li><input type="checkbox" name="theme"/>Theme</li>
                        <li><input type="checkbox" name="design"/>Diseño</li>
                        <li><input type="checkbox" name="certificado"/>Certificado</li>
                        <li><input type="checkbox" name="responsive"/>Responsive</li>
                        <li><input type="checkbox" name="idiomas"/>Idiomas</li>
                        <li><input type="checkbox" name="seo"/>Optimización</li>                        
                    </ul>
                </div>
                <div id="seo">
                    <input type="checkbox" name="seo"/><b>SEO</b>
                    <ul>
                        <li><input type="checkbox" name="nota"/>Nota posicionamiento</li>
                        <li><input type="checkbox" name="visitas2019"/>Visitas 2019</li>
                        <li><input type="checkbox" name="visitas2020"/>Visitas 2020</li>
                        <li><input type="checkbox" name="palabras_mas_10_busquedas"/>Palabras + de 10 búsquedas</li>
                        <li><input type="checkbox" name="posicion_media"/>Posicion media</li>
                        <li><input type="checkbox" name="indice_posicionamiento"/>Indice posicionamiento</li>
                        <li><input type="checkbox" name="total_busquedas"/>Total búsquedas</li>
                        <li><input type="checkbox" name="rebote"/>Rebote</li>                       
                    </ul>
                </div>
                </div>
                <div id="botones">
                    <input type="submit" value="Mostrar"/>
                    <input type="reset" name="Restablecer"/>
                </div> 
            </form>
        </div>