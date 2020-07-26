<?php $title = 'Sujet'; ?>
<?php  ob_start (); ?>

<div class="container mt-6">
    <div class="row">
    <div class="col-sm-0 col-md-0 col-lg-0"></div>
    <div class="col-sm-12 col-md-8 col-lg-12">
        <h1 class="text-center f-title">Sujet</h1>

            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th class="main">ID</th>
                        <th class="sub-info">Titre</th>
                        <th>Date</th>
                        <th>Par</th>
                    </tr>
                <?php
                    foreach($subjects as $s) {
                    ?>
                        <tr>
                            <td>
                                <?= $s['id'] ?>
                            </td>
                            <td>
                                <a href="index.php?action=topic&amp;id=<?= $s['id']?>"><?= $s['title'] ?></a>
                            </td>
                            <td><?= $s['creation_date']?></td>
                            <td><?= $s['id_user']?></td>
                        </tr>
                    <?php
                    }
                ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?php  $content = ob_get_clean (); ?>
<?php require('src/public/template/template_forum.php'); ?>