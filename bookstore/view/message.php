<?php
    require_once('./view/header.php')
?>

<style>
      .chat-container {
        display: flex;
        flex-direction: column;
        height: 100vh;
        max-height: 100%;
      }

      .chat-messages {
        flex: 1;
        overflow-y: auto;
      }

      .chat-form {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem;
        border-top: 1px solid #ccc;
        background-color: #f5f5f5;
      }

      .chat-form input[type="text"] {
        flex: 1;
        margin-right: 1rem;
      }

      .chat-message {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin-bottom: 1rem;
      }

      .chat-message .message {
        padding: 1rem;
        border-radius: 0.5rem;
        background-color: rgba(220,53,69,1);
        color: #fff;
        max-width: 50%;
      }

      .chat-message .timestamp {
        font-size: 0.8rem;
        color: #ccc;
        margin-top: 0.5rem;
      }

      .chat-message.right .message {
        background-color: rgba(220,53,69,0.2);
        color: #333;
        margin-left: 750px;
      }

      .chat-message.right .timestamp {
        text-align: right;
        margin-left: 750px;
      }
  </style>

<div class="social row mb-3">
    <div class="col-sm-3">
        <div class="container">
        <?php
          require_once('./view/leftbar.php')
        ?>
        </div>
    </div>

    <div class="col-sm-7 border" style="padding-top: 20px">
        <div class="chat-messages">
            <div>
            <div class="mt-1 mb-4 fw-bold" style="font-size: 25px; color: rgba(220,53,69,1)">John Cena</div>
            <div class="mb-5 mx-4 fst-italic fw-bold" style="font-size: 15px; color: green">Active</div>
            </div>
            <div class="chat-message">
            <div class="message">Ê, đi hiến máu không?</div>
            <div class="timestamp">9:05 AM</div>
            </div>
            <div class="chat-message right">
            <div class="message">Ở đâu á Cena</div>
            <div class="timestamp">9:06 AM</div>
            </div>
            <div class="chat-message">
            <div class="message">Trường Bách Khoa TPHCM CS2 ấy, nghe nói đợt này Atware đồng tổ chức </div>
            <div class="timestamp">9:07 AM</div>
            </div>
            <div class="chat-message right">
            <div class="message">Thế thì ngon lành luôn. Gét gô!</div>
            <div class="timestamp">9:08 AM</div>
            </div>
            <div class="chat-message">
            <div class="message">Bing Chilling :3 </div>
            <div class="timestamp">9:10 AM</div>
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