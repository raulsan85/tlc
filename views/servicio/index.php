<h1>Tabla de Servicios Contratados</h1>
<table>
    <tr>
        <th>Empresa</th>
        <th>Web</th>
        <th>Servicios Contratados</th>
    </tr>
        <?php while($servicios = $todos_servicios->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>general/pagina&id=<?=$servicios->id?>"><?=$servicios->empresa?></a></td>
                <td><?=$servicios->web == NULL ? "N/D" : $servicios->web?></td>
                <td><?=$servicios->servicios_contratados == NULL ? "N/D" : $servicios->servicios_contratados?></td>
            </tr>
        <?php endwhile;?>
</table>