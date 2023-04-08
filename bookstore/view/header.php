<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/bookstore/asset/navbar.css" />
        <link rel="stylesheet" type="text/css" href="/bookstore/asset/sidebar.css" />
        <link rel="stylesheet" type="text/css" href="/bookstore/asset/home.css" />
        <link rel="stylesheet" type="text/css" href="/bookstore/asset/footer.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <title>BloodBond</title>
    </head>

    <body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
        AOS.init();
        </script>

        <!-- Start Navbar -->
        <nav class="navbar navbar-expand-md navbar-white bg-white">
            <div class="container-fluid" style="margin: 0 10px;">
                <a href="#" class="navbar-brand"><img src="/bookstore/asset/img/BloodBond-logo.png" alt="" width="100px"
                        class="rounded-circle"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/bookstore/news"
                                class="nav-link fw-bolder link-dark rounded navbar-hover fs-4">News</a>
                        </li>
                        <li class="nav-item">
                            <a href="/bookstore/about"
                                class="nav-link fw-bolder link-dark rounded navbar-hover fs-4">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="/bookstore/contact"
                                class="nav-link fw-bolder link-dark rounded navbar-hover fs-4">Contact
                                us</a>
                        </li>
                        <li class="nav-item">
                            <a href="/bookstore/hospital"
                                class="nav-link fw-bolder link-dark rounded navbar-hover fs-4">Hospital</a>
                        </li>
                    </ul>
                </div>
                <form class="d-flex">
                    <div class="input-group">
                        <button class="btn btn-outline-danger mx-3 rounded-pill" type="submit" id="button-addon1"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                </path>
                            </svg></button>
                        <input type="text" class="form-control rounded-pill text-dark btn-outline-danger bg-transparent"
                            placeholder="Tìm kiếm" aria-label="Tìm kiếm" aria-describedby="basic-addon1">
                    </div>
                </form>

                <?php
          if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            $img = "";
            if (isset($_SESSION['img'])) {
              $img = $_SESSION['img'] ;
            }
            echo <<< _END
              <a id="avatar" class="nav-item text-primary" href="/bookstore/profile" style="text-decoration:none;">
                <span id="userLoginName">
                  <em style="color:white;">$username</em>
                  <img class="rounded-circle" style="height:50px; width:auto" src="$img">
                </span>
              </a> 
            _END;
          }
        ?>

                <!-- Login/Signup Modal -->
                <span id="loginModal">
                    <button type="button" class="btn btn-outline-danger rounded-pill mx-3 fw-bolder" data-toggle="modal"
                        data-target="#exampleModalCenter"> Đăng nhập/Đăng ký </button>
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form action="/bookstore/user/login" method="POST">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Đăng nhập</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                            onclick="clearLoginMessage()">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="my-3 fw-bolder" for="login_username">Tài khoản:</label>
                                            <input type="text" class="form-control form-dang-nhap" name="username"
                                                id="login_username" placeholder="Tên tài khoản">
                                        </div>
                                        <div class="form-group">
                                            <label class="my-3 fw-bolder" for="login_password">Mật khẩu:</label>
                                            <input type="password" class="form-control form-dang-nhap" name="password"
                                                id="login_password" placeholder="Mật khẩu">
                                        </div>
                                        <div class="form-group form-check my-3">
                                            <input type="checkbox" class="form-check-input form-dang-nhap"
                                                id="exampleCheck1">
                                            <label class="form-check-label fw-bolder" for="exampleCheck1">Ghi nhớ tôi
                                                vào
                                                lần đăng
                                                nhập sau.</label>
                                        </div>
                                        <div>
                                            <p id="message" style='color: red'>
                                                <?php if (!empty($_SESSION['loginmessage']) && $_SESSION['loginmessage'] != 'signout') echo $_SESSION['loginmessage'] ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary">
                                            <a href="/bookstore/user/signup"
                                                style="text-decoration:none; color:white;">Đăng kí</a>
                                        </button>
                                        <button type="submit" class="btn btn-danger" name="login_button"
                                            id="login_button">Đăng nhập</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </span>

                <!-- Signout -->
                <form action="/bookstore/user/signout" method="POST">
                    <button type="submit" id="signout" class="btn btn-outline-light d-none" style="margin-left:10px;">
                        Đăng xuất </button>
                </form>

                <!-- Cart -->
                <?php 
          // if (isset($_SESSION['loginmessage']) && $_SESSION['loginmessage'] == "success") {
          //   echo <<< _END
          //   <a href="/bookstore/cart">
          //     <img id="cart" src="/bookstore/asset/img/cart-logo.png" alt="Cart" width="40px" style="margin-left: 10px; cursor:pointer; filter: invert(100%); -webkit-filter: invert(100%);">
          //   </a>
          //   _END;
          // } else {
          //   echo <<< _END
          //     <img id="cart" src="/bookstore/asset/img/cart-logo.png" alt="Cart" width="40px" style="margin-left: 10px; cursor:pointer; filter: invert(100%); -webkit-filter: invert(100%);">
          //   _END;
          // }
        ?>

            </div>

            <?php
        if (!isset($_SESSION['loginmessage']) || $_SESSION['loginmessage'] == '') {
          echo <<< _END
            <script>
              $(document).ready(function(){
              $("#exampleModalCenter").modal('hide');
              });
            </script>
          _END;
        } else if ($_SESSION['loginmessage'] == "success") {
          echo <<< _END
            <script>
              var LoginElement = document.getElementById("loginModal");
              LoginElement.classList.add("d-none");
              var SignoutElement = document.getElementById("signout");
              SignoutElement.classList.remove("d-none");
            </script>
          _END;
        } else if ($_SESSION['loginmessage'] == "signout") {
          echo <<< _END
            <script>
              var SignoutElement = document.getElementById("signout");
              SignoutElement.classList.add("d-none");
              var LoginElement = document.getElementById("loginModal");
              LoginElement.classList.remove("d-none");
              var AvatartElement = document.getElementById("avatar");
              AvatartElement.classList.add("d-none");
            </script>
          _END;
        } else {
          echo <<< _END
            <script>
              $(document).ready(function(){
              $("#exampleModalCenter").modal('show');
              });
            </script>
          _END;
        }
      ?>
        </nav>
        <!-- End Navbar -->
        <script>
        function clearLoginMessage() {
            $("#exampleModalCenter").modal('hide');
            <?php
          if ($_SESSION['loginmessage'] != 'success') {
            $_SESSION['loginmessage'] = '';
          }
        ?>
        }
        $('#cart').click(function() {
            $("#exampleModalCenter").modal('show');
        });
        </script>

        <!-- 
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html> -->
