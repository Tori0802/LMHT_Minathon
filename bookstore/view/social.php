<?php
    require_once('./view/header.php')
?>

<div class="social row mb-3 border">
    <div class="col-sm-3">
        <div class="container">
        <?php
          require_once('./view/leftbar.php')
        ?>
        </div>
    </div>

    <div class="col-sm-7 border" style="padding-top: 20px; background-color: #ffdee3">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row gx-5" style="padding-left: 50px; padding-right: 50px">
                    <div class="col-md-4">
                        <div class="card" style="height: 13rem;">
                            <div class="card-body shadow" style="height: 10rem" >
                                <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="50">
                                    <div class="mt-3">
                                    <h4>John</h4>
                                    <p class="text-secondary mb-1">O positive</p>
                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="height: 13rem;">
                            <div class="card-body shadow" style="height: 10rem;">
                                <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="50">
                                    <div class="mt-3">
                                    <h4>Linda</h4>
                                    <p class="text-secondary mb-1">O positive</p>
                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="height: 13rem;">
                            <div class="card-body shadow" style="height: 10rem;">
                                <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="50">
                                    <div class="mt-3">
                                    <h4>Sara</h4>
                                    <p class="text-secondary mb-1">B negative</p>
                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row gx-5" style="padding-left: 50px; padding-right: 50px">
                    <div class="col-md-4">
                        <div class="card" style="height: 13rem;">
                            <div class="card-body shadow" style="height: 10rem;">
                                <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="50">
                                    <div class="mt-3">
                                    <h4>Doe</h4>
                                    <p class="text-secondary mb-1">A positive</p>
                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="height: 13rem;">
                            <div class="card-body shadow" style="height: 10rem;">
                                <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="50">
                                    <div class="mt-3">
                                    <h4>Bob</h4>
                                    <p class="text-secondary mb-1">O negative</p>
                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="height: 13rem;">
                            <div class="card-body shadow" style="height: 10rem;">
                                <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="50">
                                    <div class="mt-3">
                                    <h4>Rob</h4>
                                    <p class="text-secondary mb-1">A positive</p>
                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>

        <div class="container">
            <div class="card my-3">
            <div class="card-header bg-white">
                <img src="data:image/png;base64,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" class="rounded-circle" width="40" height="40" alt="User Profile Picture">
                <h6 class="d-inline-block ml-2 mb-0">John Doe</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                <textarea class="form-control" placeholder="What's on your mind?"></textarea>
                </div>
                <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                </div>
                </div>
            </div>
            <div class="card-footer bg-white">
            <button style="background: linear-gradient(to right, #dc8b35, #dc3535);
                color: #fff;
                border: none;
                padding: 10px 50px;
                border-radius: 25px"
                onmouseover="this.style.background='linear-gradient(to right, #dc3535, #dc8b35)'"
                onmouseout="this.style.background='linear-gradient(to right, #dc8b35, #dc3535)'">
                Post
            </button>

            </div>
            </div>

            <section class="card profile-feed shadow-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">

                            <div class="cardbox bg-white">

                                <div class="cardbox-heading">
                                    <!-- START dropdown-->
                                    <div class="dropdown float-right">
                                        <button class="btn btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
                                            <em class="fa fa-ellipsis-h"></em>
                                        </button>
                                        <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a class="dropdown-item" href="#">Hide post</a>
                                            <a class="dropdown-item" href="#">Stop following</a>
                                            <a class="dropdown-item" href="#">Report</a>
                                        </div>
                                    </div><!-- dropdown -->
                                    <div class="media m-0">
                                        <div class="d-flex mr-3">
                                            <a href=""><img class="img-fluid rounded-circle" src="https://image.vietnamnews.vn/uploadvnnews/Article/2019/6/16/18681_DSC05014.JPG" alt="User"></a>
                                        </div>
                                        <div class="media-body">
                                            <p class="m-0">Emma Robinson</p>
                                            <small><span><i class="icon ion-md-pin"></i> London, England</span></small>
                                            <small><span><i class="icon ion-md-time"></i> 1 hour ago</span></small>
                                        </div>
                                    </div><!-- media -->
                                </div><!-- cardbox-heading -->

                                <div class="cardbox-item">
                                    <img class="img-fluid" src="https://image.vietnamnews.vn/uploadvnnews/Article/2019/6/16/18681_DSC05014.JPG" alt="Image">
                                </div><!-- cardbox-item -->
                                <div class="cardbox-base">
                                    <ul>
                                        <li><a><i class="fa fa-thumbs-up"></i></a></li>
                                        <li><a href="#"><img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                                        <li><a href="#"><img src="https://images.pexels.com/photos/1130626/pexels-photo-1130626.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                                        <li><a href="#"><img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                                        <li><a href="#"><img src="https://images.pexels.com/photos/6962108/pexels-photo-6962108.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                                        <li><a><span>242 Likes</span></a></li>
                                    </ul>
                                    <ul class="float-left">
                                        <li><a><i class="fa fa-comments"></i></a></li>
                                        <li><a><em class="mr-5">46</em></a></li>
                                        <li><a><i class="fa fa-share-alt" style="padding-left: 20px"></i></a></li>
                                        <li><a><em class="mr-3">05</em></a></li>
                                    </ul>
                                </div><!-- cardbox-base -->
                                <div class="cardbox-comments">
                                    <span class="comment-avatar float-left">
                                        <a href=""><img class="rounded-circle" src="https://images.pexels.com/photos/2811087/pexels-photo-2811087.jpeg" alt="..."></a>
                                    </span>
                                    <div class="search">
                                        <input placeholder="Write a comment" type="text">
                                        <button><i class="fa fa-camera"></i></button>
                                    </div><!-- Search -->
                                </div><!-- cardbox-like -->

                            </div><!-- cardbox -->

                        </div><!-- col-lg-6 -->

                    </div><!-- row -->
                </div><!-- container -->
            </section>

            <section class="card profile-feed shadow-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">

                            <div class="cardbox bg-white">

                                <div class="cardbox-heading">
                                    <!-- START dropdown-->
                                    <div class="dropdown float-right">
                                        <button class="btn btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
                                            <em class="fa fa-ellipsis-h"></em>
                                        </button>
                                        <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a class="dropdown-item" href="#">Hide post</a>
                                            <a class="dropdown-item" href="#">Stop following</a>
                                            <a class="dropdown-item" href="#">Report</a>
                                        </div>
                                    </div><!-- dropdown -->
                                    <div class="media m-0">
                                        <div class="d-flex mr-3">
                                            <a href=""><img class="img-fluid rounded-circle" src="https://image.vietnamnews.vn/uploadvnnews/Article/2019/6/16/18681_DSC05014.JPG" alt="User"></a>
                                        </div>
                                        <div class="media-body">
                                            <p class="m-0">Kenny K</p>
                                            <small><span><i class="icon ion-md-pin"></i> London, England</span></small>
                                            <small><span><i class="icon ion-md-time"></i> 1 hour ago</span></small>
                                        </div>
                                    </div><!-- media -->
                                </div><!-- cardbox-heading -->

                                <div class="cardbox-item">
                                    <img class="img-fluid" src="https://cdnimgen.vietnamplus.vn/uploaded/wbxx/2022_04_07/blood_donation.jpg" alt="Image">
                                </div><!-- cardbox-item -->
                                <div class="cardbox-base">
                                    <ul>
                                        <li><a><i class="fa fa-thumbs-up"></i></a></li>
                                        <li><a href="#"><img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                                        <li><a href="#"><img src="https://images.pexels.com/photos/1130626/pexels-photo-1130626.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                                        <li><a href="#"><img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                                        <li><a href="#"><img src="https://images.pexels.com/photos/6962108/pexels-photo-6962108.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                                        <li><a><span>242 Likes</span></a></li>
                                    </ul>
                                    <ul class="float-left">
                                        <li><a><i class="fa fa-comments"></i></a></li>
                                        <li><a><em class="mr-5">46</em></a></li>
                                        <li><a><i class="fa fa-share-alt" style="padding-left: 20px"></i></a></li>
                                        <li><a><em class="mr-3">05</em></a></li>
                                    </ul>
                                </div><!-- cardbox-base -->
                                <div class="cardbox-comments">
                                    <span class="comment-avatar float-left">
                                        <a href=""><img class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDpqnT1IT_IQ3Mc_053QwIJLA3NPUOGBr57g&usqp=CAU" alt="..."></a>
                                    </span>
                                    <div class="search">
                                        <input placeholder="Write a comment" type="text">
                                        <button><i class="fa fa-camera"></i></button>
                                    </div><!-- Search -->
                                </div><!-- cardbox-like -->

                            </div><!-- cardbox -->

                        </div><!-- col-lg-6 -->

                    </div><!-- row -->
                </div><!-- container -->
            </section>

        </div>
    </div>

    <div class="col-sm-2 border">
        <div class="container">
          <?php
            require_once('./view/rightbar.php')
          ?>
        </div>
    </div>
</div>

<script src=""></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<?php
  require_once("./view/footer.php");
?>