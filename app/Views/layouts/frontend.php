
<?= $this->include('layouts/inc/header.php') ?>

    <div class="app">
        <?= $this->include('layouts/inc/navbar.php') ?>
        <?= $this->renderSection('content')?>
    </div>

<?= $this->include('layouts/inc/footer.php') ?>