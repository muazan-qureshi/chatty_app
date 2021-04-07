<?php include 'header.php'; ?>

<section class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 jumbotron">
            <?php
            foreach ($object->post_detail() as $pd) {
                echo $pd['content'];
            }


            ?>
        </div>
        <div class="col-sm-12 col-md-6">

        </div>
    </div>
</section>


<?php include 'footer.php'; ?>