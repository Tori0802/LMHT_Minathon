<?php
    require_once('header.php')
?>

<div style="margin-left: 125px; margin-right: 125px; background-color: rgba(220,53,69,0.3)" class="rounded mt-5 mb-5">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 border-right">
            <?php require_once('profileSidebar.php'); ?>
        </div>

        <!-- Update information -->
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <form action="/bookstore/user/updateprofile" method="POST" enctype="multipart/form-data">
                <div class="text-center mb-3">
                    <h4 class="fs-3 fw-bold">UPDATE INFORMATION</h4>
                </div>
                <div id="message">
                    <?php
                        if (isset($_SESSION['update_profile'])) {
                            if ($_SESSION['update_profile'] ==  "Đã cập nhật thành công!") {
                                echo "<p style='color: green'>".$_SESSION['update_profile']."</p>" ;
                            } else {
                                echo "<p style='color: red'>".$_SESSION['update_profile']."</p>" ;
                            }
                        }
                    ?>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Last name</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['firstname'] ?>"name="firstname" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" required>
                    </div>
                    <div class="col-md-6">
                        <label class="labels">First name</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['lastname'] ?>"name="lastname" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12 mb-3">
                        <label class="labels">Phone Number</label>
                        <input type="number" class="form-control" value="<?php echo $_SESSION['phone'] ?>" name="phone" pattern="/^\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="labels">Address</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['user_address'] ?>" name="user_address">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="labels">Email address</label>
                        <input type="email" class="form-control" value="<?php echo $_SESSION['email'] ?>" name="email">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="img">Choose new avatar</label>
                        <div><input type="file" id="img" name="img" accept="image/png, image/jpeg, image/pjpeg , image/gif" ></div>
                   </div>
                </div>
                <div class="mt-5 text-center"><button style="background-color: rgba(220,53,69,1)" class="btn profile-button text-light fw-bold" type="submit" name="update">Save changes</button></div>
                </form>
            </div>
        </div>

        <div class="col-md-3">
            <form action="/bookstore/user/pwchange" method="POST">
            <div class="p-3 py-5">
            <div class="text-center mb-3">
                    <h4 class="fs-3 fw-bold">EDIT PASSWORD</h4>
                </div>
                <div id="message">
                    <?php
                        if (isset($_SESSION['update_password'])) {
                            if ($_SESSION['update_password'] ==  "Thay đổi mật khẩu thành công") {
                                echo "<p style='color: green'>".$_SESSION['update_password']."</p>" ;
                            } else {
                                echo "<p style='color: red'>".$_SESSION['update_password']."</p>" ;
                            }
                        }
                    ?>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="labels">Enter old password</label>
                    <input type="password" class="form-control" name="oldPassword">
                </div>
                <div class="col-md-12 mb-3">
                    <label class="labels">Enter new password</label>
                    <input type="password" class="form-control" name="newPassword" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="labels">Re-enter new password</label>
                    <input type="password" class="form-control" name="confirmnewPassword" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" required>
                </div>
                <div style="margin-top: 210px" class="text-center">
                    <button style="background-color: rgba(220,53,69,1)" class="btn profile-button text-light fw-bold" type="submit" name="updatepw">Confirm</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<div style="margin-left: 125px; margin-right: 125px; background-color: rgba(220,53,69,0.3)" class="rounded mt-5 mb-5">
    <div class="row">
        <!-- Update information -->
        <div class="col-md-4 mx-5 border-right">
            <div class="p-3 py-5">
                <form action="/bookstore/user/updateprofile" method="POST" enctype="multipart/form-data">
                <div class="text-center mb-3">
                    <h4 class="fs-3 fw-bold">HEALTH CONDITION</h4>
                </div>
                <div id="message">
                    <?php
                        if (isset($_SESSION['update_profile'])) {
                            if ($_SESSION['update_profile'] ==  "Đã cập nhật thành công!") {
                                echo "<p style='color: green'>".$_SESSION['update_profile']."</p>" ;
                            } else {
                                echo "<p style='color: red'>".$_SESSION['update_profile']."</p>" ;
                            }
                        }
                    ?>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Height</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['firstname'] ?>"name="firstname" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" required>
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Weight</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['lastname'] ?>"name="lastname" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12 mb-3">
                        <label class="labels">Blood Group</label>
                        <input type="number" class="form-control" value="<?php echo $_SESSION['phone'] ?>" name="phone" pattern="/^\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="labels">Last time to donate blood</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['user_address'] ?>" name="user_address">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="labels">Anamnesis</label>
                        <input type="email" class="form-control" value="<?php echo $_SESSION['email'] ?>" name="email">
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <button style="background-color: rgba(220,53,69,1)" class="btn profile-button text-light fw-bold" type="submit" name="update">Save Changes</button>
                </div>
                </form>
            </div>
        </div>

        <div class="col-md-6">
            <form action="/bookstore/user/pwchange" method="POST">
            <div class="p-3 py-5">
                <div class="text-center mb-3">
                    <h4 class="fs-3 fw-bold">HISTORY BLOOD DONATION</h4>
                </div>

            </div>
            </form>
        </div>
    </div>
</div>

<?php
    require_once('footer.php')
?>