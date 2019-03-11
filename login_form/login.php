<?php
include '../includes/head.php';
?>
    <div class="container">
        <div class="row">
            <div class="offset-3  col-lg-6 mt-5 ">
                <div class="card bg-light">
                    <div class="mt-3 card-title bg-primary text-white">
                        <h3 class="text-center py-2 ">If you are admin log in to see messages</h3>
                    </div>
                    <?php
                    if (isset($_GET['Empty'])) {
                        if ($_GET['Empty'] == true) {
                            ?>
                            <div class="alert-light text-danger text-center py-1"><?= $_GET['Empty'] ?></div>
                        <?php }
                    } ?>
                    <?php
                    if (isset($_GET['Invalid'])) {
                        if ($_GET['Invalid'] == true) {
                            ?>
                            <div class="alert-light text-danger text-center py-1"><?= $_GET['Invalid'] ?></div>
                        <?php }
                    } ?>
                    <div class="card-body">
                        <form action="../queries/process.php" method="post">
                            <input type="text" name="username" placeholder="Username" class="form-control mb-3">
                            <input type="password" name="password" placeholder="Password" class="form-control mb-3">
                            <button class="btn btn-success mt-2" name="login">Log In</button>
                        </form>
                        <span class="text-primary">If you are an anonymus user then go to my  <a href="../index.php"
                                                                                                 class="text-decoration-none">Page</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include '../includes/foot.php';
?>