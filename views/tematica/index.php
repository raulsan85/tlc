<h1>Tabla de Temáticas</h1>
<table>
    <tr>
        <th>Web</th>
        <th>Temática</th>
    </tr>
        <?php while($tematicas = $todas_tematicas->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>general/pagina&id=<?=$tematicas->web_id?>"><?=$tematicas->web?></a></td>
                <td><?php if($tematicas->tematica == NULL): ?>
                      N/D
                  <?php else: ?>
                      <a href="<?=base_url?>tematica/tematicas&tem=<?=$tematicas->tematica?>"><?=$tematicas->tematica?></a>
                  <?php endif; ?>
              </td>
            </tr>
        <?php endwhile;?>
</table>