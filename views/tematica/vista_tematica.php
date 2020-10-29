<h1>Tabla de páginas con la temática <?=$tem?></h1>
<table>
    <tr>
        <th>Web</th>
    </tr>
        <?php while($tematicas = $todas_tematicas->fetch_object()): ?>
            <tr>
                <td><a href="<?=base_url?>general/pagina&id=<?=$tematicas->web_id?>"><?=$tematicas->url?></a></td>
            </tr>
        <?php endwhile;?>
</table>