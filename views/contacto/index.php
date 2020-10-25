<h1>Tabla de Contactos</h1>
<table>
    <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Cargo</th>
        <th>Teléfono</th>       
        <th>Email</th>       
        <th>Empresa</th>           
    </tr>
        <?php while($contactos = $todos_contactos->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>contacto/pagina&id=<?=$contactos->id?>"><?=$contactos->nombre?></a></td>
                <td><?=$contactos->apellidos == NULL ? "N/D" : $contactos->apellidos?></td>
                <td><?=$contactos->cargo == NULL ? "N/D" : $contactos->cargo?></td>
                <td><?=$contactos->telefono == NULL ? "N/D" : $contactos->telefono?></td>
                <td><?=$contactos->email == NULL ? "N/D" : $contactos->email?></td>
                <td><?=$contactos->empresa == NULL ? "N/D" : $contactos->empresa?></td>
            </tr>
        <?php endwhile;?>
</table>