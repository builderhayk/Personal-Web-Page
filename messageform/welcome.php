<?php
include "../includes/head.php";
include "../queries/connection.php";
session_start();
include "../queries/selectmsg.php";
?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">Welcome <?= $_SESSION['User'] ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item float-right active">
                    <a class="nav-link">
                        <button type="button" class="btn btn-primary">
                            Messages <span class="badge badge-light"><?= $resultcheck ?></span>
                        </button>
                    </a>
                </li>
                <li class="nav-item my-2 ">
                    <a class="nav-link" href="../queries/logout.php?Logout= ">Log out<i
                                class="fas fa-sign-out-alt ml-2"></i> </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="accordion mt-5" id="accordionExample">
                        <?php if ($resultcheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <div class="card ">
                                    <div class="card-header" id="heading<?= $row['id']; ?>">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapse<?= $row['id']; ?>" aria-expanded="true"
                                                    aria-controls="collapse<?= $row['id']; ?>">
                                                <?= $row['full_name']; ?>
                                            </button>
                                            <a href="../queries/delete.php?dr=<?= $row['id'] ?>"
                                               class="btn btn-danger  float-right ">
                                                delete
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapse<?= $row['id']; ?>" class="collapse"
                                         aria-labelledby="heading<?= $row['id']; ?>"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p><strong>Subject - </strong><?= $row['subject'] ?></p>
                                            <p><strong>Email
                                                    - </strong><?= $row['email'] . " <i>(" . $row['date'] . ")</i>" ?>
                                            </p><br/>
                                            <p class="str<?= $row['id'] ?>">
                                                <?= $row['message'] ?>
                                            </p>
                                            <script>
                                                var string = $('.str<?=$row['id']?>').text();
                                                var str50 = string.substr(string, 111);
                                                $('.str<?=$row['id']?>').html(str50 + '...' + '<a class="readmore link" href="#"><span class="badge badge-info">more</span></a>');
                                                $('.str<?=$row['id']?>').attr('data-text', string);
                                                $('.readmore').click(function () {
                                                    $(this).parent().html($(this).parent().attr('data-text'))
                                                })
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        } else {
                            echo "theres no Messages yet";
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include "../includes/foot.php";
?>