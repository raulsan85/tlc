<h1>Tabla de Datos Estructurados</h1>
<table>
    <tr>
        <th>Web</th>
        <th>Datos Estructurados</th>
    </tr>
        <?php while($datos = $todos_datos->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>dato/pagina&id=<?=$datos->web_id?>"><?=$datos->web?></a></td>
                <td><?php if($datos->dato == NULL): ?>
                      N/D
                  <?php else: ?>
                      <a href="<?=base_url?>dato/datos&data=<?=$datos->dato?>"><?=$datos->dato?></a>
                  <?php endif; ?>
              </td>
            </tr>
        <?php endwhile;?>
</table>