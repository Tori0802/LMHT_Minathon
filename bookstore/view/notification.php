<?php
    require_once("./view/header.php")
?>

<div class="container my-5">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>STT</th>
                <th>Title</th>
                <th>describe</th>
            </tr>
        </thead>
        <tbody>
            <tr onclick="window.location='./home.php'">
                <td>1</td>
                <td>Huyết học</td>
                <td>nội dung</td>
            </tr>
            <tr onclick="window.location='./home.php'">
                <td>2</td>
                <td>Ưng bứu</td>
                <td>nội dung</td>
            </tr>
            <tr onclick="window.location='./home.php'">
                <td>3</td>
                <td>Từ dũ</td>
                <td>nội dung</td>
            </tr>
        </tbody>
    </table>
</div>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
});
</script>

<?php
    require_once("./view/footer.php")
?>
