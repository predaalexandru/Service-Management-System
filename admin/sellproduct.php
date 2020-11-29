<?php
define ('TITLE', 'Sell Product');
define ('PAGE', 'Assets');
include('../db_connect.php');
include('includes/header.php');

session_start();
if(isset($_SESSION['is_adminlogin'])) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script> location.href='login.php'</script>";
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Customer Bill</h3>
    <?php 
        if(isset($_REQUEST['issue'])) {
        $sql = "SELECT * FROM assets WHERE pid = {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    if(isset($_REQUEST['psubmit'])) {
        if(($_REQUEST['cname'] == "") || ($_REQUEST['cadd'] == "") || ($_REQUEST['pname'] == "") || ($_REQUEST['pquantity'] == "") || ($_REQUEST['psellingcost'] == "") || ($_REQUEST['totalcost'] == "") || ($_REQUEST['selldate'] == "")) {
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
        } else {
            $pid = $_REQUEST['pid'];
            $pava = $_REQUEST['pava'] - $_REQUEST['pquantity'];

            $custname = $_REQUEST['cname'];
            $custadd = $_REQUEST['cadd'];
            $cpname = $_REQUEST['pname'];
            $cpquantity = $_REQUEST['pquantity'];
            $cpeach = $_REQUEST['psellingcost'];
            $cptotal = $_REQUEST['totalcost'];
            $cpdate = $_REQUEST['selldate'];

            $sql = "INSERT INTO customer(custname, custadd, cpname, cpquantity, cpeach, cptotal, cpdate) VALUES ('$custname', '$custadd', '$cpname', '$cpquantity', '$cpeach', '$cptotal', '$cpdate')";
            if($conn->query($sql) == TRUE) {
               $genid = mysqli_insert_id($conn);
               session_start();
               $_SESSION['myid'] = $genid;
               echo "<script> location.href='productsellsuccess.php'</script>";
            }

            $sql1 = "UPDATE assets SET pava = '$pava' WHERE pid = '$pid'";
            $conn->query($sql1);
        }
    }
    ?>

    <form action="" method="POST">
        <div class="form-group">
            <label for="pid">Product ID</label>
            <input type="text" class="form-control" id="pid" name="pid" value="<?php if(isset($row['pid'])) echo $row['pid']; ?>" readonly>     
        </div>
        <div class="form-group">
            <label for="cname">Customer Name</label>
            <input type="text" class="form-control" id="cname" name="cname">     
        </div>
        <div class="form-group">
            <label for="cadd">Customer Address</label>
            <input type="text" class="form-control" id="cadd" name="cadd">     
        </div>
        <div class="form-group">
            <label for="pname">Product Name</label>
            <input type="text" class="form-control" id="pname" name="pname" value="<?php if(isset($row['pname'])) echo $row['pname']; ?>">     
        </div>
        <div class="form-group">
            <label for="pava">Available</label>
            <input type="text" class="form-control" id="pava" name="pava" value="<?php if(isset($row['pava'])) echo $row['pava']; ?>" onkeypress="isInputNumber(event)" readonly>     
        </div>
        <div class="form-group">
            <label for="pquantity">Quantity</label>
            <input type="text" class="form-control" id="pquantity" name="pquantity" onkeypress="isInputNumber(event)">     
        </div>
        <div class="form-group">
            <label for="psellingcost">Price Each</label>
            <input type="text" class="form-control" id="psellingcost" name="psellingcost" value="<?php if(isset($row['psellingcost'])) echo $row['psellingcost']; ?>" onkeypress="isInputNumber(event)">     
        </div>
        <div class="form-group">
            <label for="totalcost">Total Price</label>
            <input type="text" class="form-control" id="totalcost" name="totalcost" onkeypress="isInputNumber(event)">     
        </div>
        <div class="form-group col-md-4">
            <label for="inputDate">Date</label>
            <input type="date" class="form-control" id="inputDate" name="selldate">     
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success" id="psubmit" name="psubmit">Submit</button>
            <a href="assets.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if(isset($msg)) { echo $msg; } ?>
    </form>
</div>
<!-- End 2nd Column -->

<!-- Only numbers for input fields -->
<script>
function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if(!(/[0-9]/.test(ch))) {
        evt.preventDefault();
    }
}
</script>

<?php 
include('includes/footer.php');
?>