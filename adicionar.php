<?php
require 'header.php';
?>

<form action="adicionar_action.php" method="POST">


    <div class="container">

        <!-- APARECER MSG DE FALHA OU SUCESSO, IMPORTANTE!!!! -->

        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'sucesso') :
        ?>
            <div class="alert alert-success" role="alert">
                <?php
                echo 'Cadastro realizado com sucesso!';
                ?>
            </div>
        <?php
        endif;
        ?>
        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'falha') :
        ?>
            <div class="alert alert-danger" role="alert">
                <?php
                echo 'Deu problema no cadastro, irmão';
                ?>
            </div>
        <?php
        endif;
        ?>
        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'emailCadastrado') :
        ?>
            <div class="alert alert-danger" role="alert">
                <?php
                echo 'Esse email já está cadastrado, irmão';
                ?>
            </div>
        <?php
        endif;
        ?>
        <!-- APARECER MSG DE FALHA OU SUCESSO, IMPORTANTE!!!! -->

        <form>
            <div class="row">
                <div class="col">
                    <label for="">Insira o nome:</label>
                    <input type="text" class="form-control" placeholder="Nome" name="nome">
                </div>
                <div class="col">
                    <label for="">Insira o email:</label>
                    <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
            </div><br>

            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
        <a href="index.php" class="btn btn-info">Voltar</a>
    </div>






</form>

<?php
require 'footer.php';
?>