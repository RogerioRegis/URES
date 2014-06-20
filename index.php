<?php include_once './header.php'; ?>
<?php include_once './menu.php'; ?>

<div id="conteudo">
    <?php
    if(!isset($_GET['page']))
    require_once ("coteudo.php");
else
    require_once ($_GET['page'].".php");
    ?>
</div>

<?php include_once './conteudo.php'; ?>
<?php include_once './footer.php'; ?>