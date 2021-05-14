<?php
    include_once 'layouts/header.php';
    include_once 'layouts/navbar.php';
?>

<div class="container flex-column d-flex justify-content-center align-items-center">
    <?php
        include_once 'components/addTrx.php';
    ?>    

    <div class="text-center">
        <h1><b>Cash Balance:</b> </h1>
    </div>

    <?php
        include_once 'components/list.php';
    ?>
</div>

<?php
    include_once 'layouts/footer.php';
?>

