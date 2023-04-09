<?php
    require_once('./header.php')
?>

<div class="social row mb-3">
    <div class="col-sm-3">
        <div class="container">
        <?php
          require_once('./leftbar.php')
        ?>
        </div>
    </div>

    <div class="col-sm-7 border" style="padding-top: 20px">
        <div class="chat-messages">
            <div class="chat-message">
            <div class="message">Hey, what's up?</div>
            <div class="timestamp">9:05 AM</div>
            </div>
            <div class="chat-message right">
            <div class="message">Not much, just working. How about you?</div>
            <div class="timestamp">9:06 AM</div>
            </div>
            <div class="chat-message">
            <div class="message">Same here. What are you working on?</div>
            <div class="timestamp">9:07 AM</div>
            </div>
            <div class="chat-message right">
            <div class="message">Just some client work. How's your project going?</div>
            <div class="timestamp">9:08 AM</div>
            </div>
        </div>
        <div class="chat-form">
            <input type="text" placeholder="Type a message...">
            <button class="btn btn-primary">Send</button>
        </div>
    </div>

    <div class="col-sm-2 border">
        <div class="container">
          <?php
            require_once('./rightbar.php')
          ?>
        </div>
    </div>
</div>

<script src=""></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<?php
  require_once("./footer.php");
?>