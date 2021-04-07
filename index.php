<?php include 'header.php'; ?>


<section class="container">

    <?php foreach ($object->timelinepost() as $post) {
    ?>
        <div class="col-md-12 col-sm-12 jumbotron">
            <h3><?php echo $post['postby'] ?></h3>
            <p><?php echo $post['content'] ?></p>
            <div class="row mr-auto">
                <div class="form-group col-md-2">
                    <a href="post_details.php?postid=<?php echo $post['postid'] ?>" class="btn btn-warning">View Post</a>
                </div>

            </div>
            <!-- <form action="" class="col-md-4 col-sm-12" class="replayform" style="display: none;">
                <div class="form-group">
                    <label for="">Replay</label>
                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                    <button class="btn btn-info">Replay</button>
                </div>
            </form> -->
        </div>
    <?php } ?>
</section>

<?php include 'footer.php'; ?>