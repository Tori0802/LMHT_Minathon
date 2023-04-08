<!-- <?php
    $name = "";
    if (isset($_SESSION['img'])) $img = $_SESSION['img'];
    if (isset($_SESSION['email'])) $email = $_SESSION['email'];
    if (isset($_SESSION['firstname'])) $name .= $_SESSION['firstname']." ";
    if (isset($_SESSION['lastname'])) $name .= $_SESSION['lastname'];
    echo <<< _END
        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <img class="rounded-circle mt-5" width="150px" src="$img">
            <span class="font-weight-bold">$name</span>
            <span class="text-black-50">$email</span>
            <span> </span>
        </div>
    _END;
?> -->

<div class="d-flex flex-column align-items-center text-center p-3 py-5">
    <!-- Avatar -->
    <img class="rounded-circle mt-1" width="200px" src="<?php echo $_SESSION['img']?? "/bookstore/asset/img/user/user.png" ?>">
    <span class="fs-3 fw-semibold mt-4 mb-5"><?php echo $_SESSION['firstname']." ".$_SESSION['lastname']?></span>
    <span class="text-black-75 fst-italic fs-5"><?php echo $_SESSION['email'] ?></span>

    <?php
        if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] == 1)) {
            echo <<< _END
                <span class="mt-1 mb-5 fs-5 fw-bold" style="color: green;">ADMIN</span>
            _END;
        }
    ?>

    <!-- Edit information -->
    <form action="/bookstore/profile" method="POST">
        <button type="submit" style="background-color: rgba(220,53,69,1); margin-top: 50px" class="btn profile-button text-light fw-bold">Edit information</button>
    </form>

    <?php
        if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] == 1)) {
            echo <<< _END
            _END;
        }
    ?>
    
</div>