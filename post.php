<?php include 'header.php';
$object->posted();

?>
    <section class="container">
        <div class="col-md-6 m-auto">
            <form action="" method="POST" class="jumbotron">
                <h3 class="text-center">Post Here</h3>
                <div class="form-group">
                    <div class="form-group">
                        <label for="">Post</label>
                        <textarea class="form-control" required name="post" id="" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info btn-block" name="post_btn">Post Now</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
   <?php include 'footer.php';?>