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
                <td>Huyết Học</td>
                <td>Need 4 blood units</td>
            </tr>
            <tr onclick="window.location='./home.php'">
                <td>2</td>
                <td>Ung Bướu</td>
                <td>Need 10 blood units</td>
            </tr>
            <tr onclick="window.location='./home.php'">
                <td>3</td>
                <td>Từ Dũ</td>
                <td>Need 50 blood units</td>
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
