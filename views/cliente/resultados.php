<table>
    <?php if(isset($_POST['nombre'])&&isset($_POST['direccion'])&&isset($_POST['codigo_postal'])&&isset($_POST['ciudad'])&&isset($_POST['provincia'])&&isset($_POST['pais'])&&isset($_POST['gestor_cuentas'])&&isset($_POST['fecha_alta'])&&isset($_POST['baja'])&&isset($_POST['division'])): ?>
    <tr>
        <th>Empresa</th>
        <th>Dirección</th>
        <th>Código Postal</th>
        <th>Ciudad</th>
        <th>Provincia</th>
        <th>País</th>
        <th>Gestor de Cuentas</th>
        <th>Fecha de alta</th>
        <th>Estado</th>
        <th>División</th>
    </tr>
    <?php for($i=1; $i<=$cantidad; $i++): ?>
            <?php $cliente->setId($i); ?>
            <?php $columna = $cliente->getOne(); ?>
    <tr>
        <td><?=$columna->nombre?></td>
        <td><?=$columna->direccion?></td>
        <td><?=$columna->codigo_postal?></td>
        <td><?=$columna->ciudad?></td>
        <td><?=$columna->provincia?></td>
        <td><?=$columna->pais?></td>
        <td><?=$columna->gestor_cuentas?></td>
        <td><?=$columna->fecha_alta?></td>
        <td><?=$columna->baja?></td>
        <td><?=$columna->division?></td>
    </tr>
    <?php endfor;?>
    <?php elseif(isset($_POST['web'])&&isset($_POST['url'])&&isset($_POST['ano'])&&!isset($_POST['servidor'])): ?>
    <tr>
        <th>Web</th>
        <th>URL</th>
        <th>Año</th>
    </tr>
    <?php for($i=1; $i<=$cantidad; $i++): ?>
            <?php $web->setId($i); ?>
            <?php $columna = $web->getOne(); ?>
    <tr>
        <td><?=$columna->web?></td>
        <td><?=$columna->url?></td>
        <td><?=$columna->ano?></td>
    </tr>
    <?php endfor;?>
    <?php elseif(isset($_POST['web'])&&isset($_POST['url'])&&!isset($_POST['ano'])&&!isset($_POST['servidor'])): ?>
    <tr>
        <th>Web</th>
        <th>URL</th>
    </tr>
    <?php for($i=1; $i<=$cantidad; $i++): ?>
            <?php $web->setId($i); ?>
            <?php $columna = $web->getOne(); ?>
    <tr>
        <td><?=$columna->web?></td>
        <td><?=$columna->url?></td>
    </tr>
    <?php endfor;?>
    <?php elseif(isset($_POST['web'])&&!isset($_POST['url'])&&!isset($_POST['ano'])&&!isset($_POST['servidor'])): ?>
    <tr>
        <th>Web</th>
    </tr>
    <?php for($i=1; $i<=$cantidad; $i++): ?>
            <?php $web->setId($i); ?>
            <?php $columna = $web->getOne(); ?>
    <tr>
        <td><?=$columna->web?></td>
    </tr>
    <?php endfor;?>
    <?php elseif(isset($_POST['web'])&&!isset($_POST['url'])&&isset($_POST['ano'])&&isset($_POST['servidor'])): ?>
    <tr>
        <th>Web</th>
        <th>Año</th>
        <th>Servidor</th>
    </tr>
    <?php for($i=1; $i<=$cantidad; $i++): ?>
            <?php $web->setId($i); ?>
            <?php $columna = $web->getOne(); ?>
    <tr>
        <td><?=$columna->web?></td>
        <td><?=$columna->ano?></td>
        <td><?=$columna->servidor?></td>

    </tr>
    <?php endfor;?>
    <?php elseif(isset($_POST['web'])&&!isset($_POST['url'])&&isset($_POST['ano'])&&!isset($_POST['servidor'])): ?>
    <tr>
        <th>Web</th>
        <th>Año</th>
    </tr>
    <?php for($i=1; $i<=$cantidad; $i++): ?>
            <?php $web->setId($i); ?>
            <?php $columna = $web->getOne(); ?>
    <tr>
        <td><?=$columna->web?></td>
        <td><?=$columna->ano?></td>

    </tr>
    <?php endfor;?>
    <?php elseif(isset($_POST['web'])&&!isset($_POST['url'])&&!isset($_POST['ano'])&&isset($_POST['servidor'])): ?>
    <tr>
        <th>Web</th>
        <th>Servidor</th>
    </tr>
    <?php for($i=1; $i<=$cantidad; $i++): ?>
            <?php $web->setId($i); ?>
            <?php $columna = $web->getOne(); ?>
    <tr>
        <td><?=$columna->web?></td>
        <td><?=$columna->servidor?></td>

    </tr>
    <?php endfor;?>
    <?php elseif(!isset($_POST['web'])&&isset($_POST['url'])&&isset($_POST['ano'])&&isset($_POST['servidor'])): ?>
    <tr>
        <th>Web</th>
        <th>URL</th>
        <th>Año</th>
        <th>Servidor</th>
    </tr>
    <?php for($i=1; $i<=$cantidad; $i++): ?>
            <?php $web->setId($i); ?>
            <?php $columna = $web->getOne(); ?>
    <tr>
        <td><?=$columna->web?></td>
        <td><?=$columna->url?></td>
        <td><?=$columna->ano?></td>
        <td><?=$columna->servidor?></td>
    </tr>
    <?php endfor;?>
    <?php elseif(!isset($_POST['web'])&&isset($_POST['url'])&&isset($_POST['ano'])&&!isset($_POST['servidor'])): ?>
    <tr>
        <th>Web</th>
        <th>URL</th>
        <th>Año</th>
    </tr>
    <?php for($i=1; $i<=$cantidad; $i++): ?>
            <?php $web->setId($i); ?>
            <?php $columna = $web->getOne(); ?>
    <tr>
        <td><?=$columna->web?></td>
        <td><?=$columna->url?></td>
        <td><?=$columna->ano?></td>
    </tr>
    <?php endfor;?>
    <?php elseif(!isset($_POST['web'])&&isset($_POST['url'])&&!isset($_POST['ano'])&&!isset($_POST['servidor'])): ?>
    <tr>
        <th>Web</th>
        <th>URL</th>
    </tr>
    <?php for($i=1; $i<=$cantidad; $i++): ?>
            <?php $web->setId($i); ?>
            <?php $columna = $web->getOne(); ?>
    <tr>
        <td><?=$columna->web?></td>
        <td><?=$columna->url?></td>
    </tr>
    <?php endfor;?>
    <?php elseif(!isset($_POST['web'])&&isset($_POST['url'])&&isset($_POST['ano'])&&!isset($_POST['servidor'])): ?>
    <tr>
        <th>Web</th>
        <th>URL</th>
        <th>Año</th>
    </tr>
    <?php for($i=1; $i<=$cantidad; $i++): ?>
            <?php $web->setId($i); ?>
            <?php $columna = $web->getOne(); ?>
    <tr>
        <td><?=$columna->web?></td>
        <td><?=$columna->url?></td>
        <td><?=$columna->ano?></td>
    </tr>
    <?php endfor;?>
    <?php elseif(!isset($_POST['web'])&&isset($_POST['url'])&&!isset($_POST['ano'])&&isset($_POST['servidor'])): ?>
    <tr>
        <th>Web</th>
        <th>URL</th>
        <th>Servidor</th>
    </tr>
    <?php for($i=1; $i<=$cantidad; $i++): ?>
            <?php $web->setId($i); ?>
            <?php $columna = $web->getOne(); ?>
    <tr>
        <td><?=$columna->web?></td>
        <td><?=$columna->url?></td>
        <td><?=$columna->servidor?></td>
    </tr>
    <?php endfor;?>
    <?php elseif(!isset($_POST['web'])&&isset($_POST['url'])&&!isset($_POST['ano'])&&isset($_POST['servidor'])): ?>
    <tr>
        <th>Web</th>
        <th>URL</th>
        <th>Servidor</th>
    </tr>
    <?php for($i=1; $i<=$cantidad; $i++): ?>
            <?php $web->setId($i); ?>
            <?php $columna = $web->getOne(); ?>
    <tr>
        <td><?=$columna->web?></td>
        <td><?=$columna->url?></td>
        <td><?=$columna->servidor?></td>
    </tr>
    <?php endfor;?>
    <?php elseif(!isset($_POST['web'])&&!isset($_POST['url'])&&isset($_POST['ano'])&&isset($_POST['servidor'])): ?>
    <tr>
        <th>Web</th>
        <th>Año</th>
        <th>Servidor</th>
    </tr>
    <?php for($i=1; $i<=$cantidad; $i++): ?>
            <?php $web->setId($i); ?>
            <?php $columna = $web->getOne(); ?>
    <tr>
        <td><?=$columna->web?></td>
        <td><?=$columna->ano?></td>
        <td><?=$columna->servidor?></td>
    </tr>
    <?php endfor;?>
    <?php elseif(!isset($_POST['web'])&&!isset($_POST['url'])&&!isset($_POST['ano'])&&isset($_POST['servidor'])): ?>
    <tr>
        <th>Web</th>
        <th>Servidor</th>
    </tr>
    <?php for($i=1; $i<=$cantidad; $i++): ?>
            <?php $web->setId($i); ?>
            <?php $columna = $web->getOne(); ?>
    <tr>
        <td><?=$columna->web?></td>
        <td><?=$columna->servidor?></td>
    </tr>
    <?php endfor;?>
    <?php elseif(!isset($_POST['web'])&&!isset($_POST['url'])&&isset($_POST['ano'])&&!isset($_POST['servidor'])): ?>
    <tr>
        <th>Web</th>
        <th>Año</th>
    </tr>
    <?php for($i=1; $i<=$cantidad; $i++): ?>
            <?php $web->setId($i); ?>
            <?php $columna = $web->getOne(); ?>
    <tr>
        <td><?=$columna->web?></td>
        <td><?=$columna->ano?></td>
    </tr>
    <?php endfor;?>
    <?php endif; ?>
</table>