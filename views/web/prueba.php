<table>
    <?php if(isset($_POST['web'])&&isset($_POST['url'])&&isset($_POST['ano'])&&isset($_POST['servidor'])): ?>
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
