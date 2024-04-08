<!-- Push section css -->
<?= $this->section('css') ?>
<link rel="stylesheet" href="<?php echo base_url('dist/css/dataTables.bootstrap4.min.css'); ?>">
<?= $this->endSection() ?>

<!-- Push section js -->
<?= $this->section('js') ?>
<script src="<?php echo base_url('dist/js/moment-with-locales.min.js'); ?>"></script>
<script src="<?php echo base_url('dist/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('dist/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script>
    moment.locale('<?= config('App')->defaultLocale ?>');
</script>
<script>
    $.extend( true, $.fn.dataTable.defaults, {
        language: {
            url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/<?= config('Boilerplate')->i18n ?>.json"
        }
    });
</script>
<?= $this->endSection() ?>