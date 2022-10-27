<?php

require 'config.php';
require 'header.php';

?>


<div class="container">
<a class="btn btn-link" href="adicionar.php">ADICIONAR NOVO</a>

<table class="table table-bordered table-hover">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    </thead>
    <tbody class="tbody-light tbody-striped">

            <?php

            foreach($dados as $item):
            ?>
            <tr>
                <td><?=$item['id'];?></td>
                <td><?=$item['nome'];?></td>
                <td><?=$item['email'];?></td>
                <td>
                   <a href="editar.php?id=<?=$item['id'];?>" class="btn-sm btn-primary">Editar</a>
                   <a href="deletar.php?id=<?=$item['id'];?>" class="btn-sm btn-danger" onclick="return confirm('Realmente deseja deletar?')">Deletar</a>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
    </tbody>
</table>
</div>



<?php
require 'footer.php';

?>

