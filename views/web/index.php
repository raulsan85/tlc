<h1>Columnas de la tabla Web</h1>

<table>
    <?php if(isset($columna_web)&&!isset($columna_url)&&!isset($columna_ano)&&!isset($columna_servidor)): ?>
    <tr>
        <th>Web</th>
    </tr>
    <?php while($una = $columna_web->fetch_object()): ?>
        <tr>
            <td><?=$una->web;?></td>
        </tr>
    <?php endwhile; ?>
    <?php elseif(isset($columna_web)&&isset($columna_url)&&!isset($columna_ano)&&!isset($columna_servidor)): ?>
    <tr>
        <th>Web</th>

        <th>URL</th>
    </tr>

    <?php while($una = $columna_web->fetch_object()): ?>
        <tr>
            <td><?=$una->web;?></td>
        </tr>
    <?php endwhile; ?>

    <?php while($una = $columna_url->fetch_object()): ?>
        <tr>
            <td><?=$una->url;?></td>
        </tr>
    <?php endwhile; ?>
    <?php elseif(isset($columna_ano)): ?>
    <tr>
        <th>Año</th>
    </tr>
    <?php while($una = $columna_ano->fetch_object()): ?>
        <tr>
            <td><?=$una->ano;?></td>
        </tr>
    <?php endwhile; ?>
    <?php elseif(isset($columna_servidor)): ?>
    <tr>
        <th>Servidor</th>
    </tr>
    <?php while($una = $columna_servidor->fetch_object()): ?>
        <tr>
            <td><?=$una->servidor;?></td>
        </tr>
    <?php endwhile; ?>
    <?php endif; ?>
</table>
    

