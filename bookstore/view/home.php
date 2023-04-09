<?php
  require_once("./view/header.php");
?>
<div class="row mb-5">
    <div class="col-sm-2">
        <?php
        require_once("./view/sidebar.php");
        ?>
    </div>
    <div class="col-sm-10">
        <div class="container">
            <h2 class="my-5 mx-5"><span class="border-bottom border-4 border-danger">Representative Partner</span></h2>
            <div class="container text-center" data-aos="fade-up">
                <div class="row align-items-start">
                    <?php 
      if ($data['data']->num_rows > 0) {
        while ($row = $data['data']->fetch_assoc()) {
          $id = $row['id'];
          $img = $row['img'];
          $title = $row['title'];
          $author  =$row['author'];
          echo <<< _END
            <div class="col-md-4">
              <div class="thumbnail">
                <a href="/bookstore/book/getDetail?id=$id" style="text-decoration:none;">
                  <img src="$img" alt="Lights" style="width:250px; margin-bottom:10px;"> 
                  <div class="caption"> <strong style="font-size: 18px; color:black;">$title</strong> </div>
                </a>
              </div>
            </div>
          _END;
        }
      }
      else {echo "No Data.";}
    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
  require_once("./view/footer.php");
?>
