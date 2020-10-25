<h1>Tabla de Servicios Contratados</h1>
<table>
    <tr>
        <th>Empresa</th>
        <th>Web</th>
        <th>Servicios Contratados</th>
    </tr>
        <?php while($servicios = $todos_servicios->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>cliente/pagina&id=<?=$servicios->cliente_id?>"><?=$servicios->empresa?></a></td>
                <td><a href="<?=base_url?>general/pagina&id=<?=$servicios->web_id?>"><?=$servicios->web == NULL ? "N/D" : $servicios->web?></td>
                <td><?=$servicios->servicios_contratados == NULL ? "N/D" : $servicios->servicios_contratados?></td>
            </tr>
        <?php endwhile;?>
</table>