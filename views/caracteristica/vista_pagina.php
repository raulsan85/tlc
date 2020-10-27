<h1><?=$caracteristica->web?></h1>

<h2><a href="<?=$caracteristica->url?>"><?=$caracteristica->url?></a></h2>

<h3>Características de la Web</h3>
<ul>
    <li>Desarrollo: <?=$caracteristica->desarrollo == NULL ? "N/D" : $caracteristica->desarrollo?></li>
    <li>Tipo: <?=$caracteristica->tipo == NULL ? "N/D" : $caracteristica->tipo?></li>
    <li>FrameWork: <?=$caracteristica->framework == NULL ? "N/D" : $caracteristica->framework?></li>
    <li>Theme: <?=$caracteristica->theme == NULL ? "N/D" : $caracteristica->theme?> </li>
    <li>Diseño: <?=$caracteristica->design == NULL ? "N/D" : $caracteristica->design?></li>
    <li>SSL: <?=$caracteristica->certificado == NULL ? "N/D" : $caracteristica->certificado?> </li>
    <li>Responsive: <?=$caracteristica->responsive == NULL ? "N/D" : $caracteristicas->responsive?></li>
    <li>Idiomas: <?=$caracteristica->idiomas == NULL ? "N/D" : $caracteristica->idiomas?></li>
    <li>Optimización: <?=$caracteristica->seo == NULL ? "N/D" : $caracteristica->seo?></li>
</ul>
