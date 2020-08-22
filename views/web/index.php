<h1>Columnas de la tabla Web</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Web</th>
        <th>URL</th>
        <th>Id de cliente</th>
        <th>Año</th>
        <th>Servidor</th>
    </tr>
    <?php while($wb = $webs->fetch_object()): ?>
        <tr>
            <td><?=$wb->id;?></td>
            <td><?=$wb->web;?></td>
            <td><?=$wb->url;?></td>
            <td><?=$wb->cliente_id;?></td>
            <td><?=$wb->ano;?></td>
            <td><?=$wb->servidor;?></td>
        </tr>
    <?php endwhile ?>
</table>
    

