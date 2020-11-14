<?php
define ('TITLE', 'Requests');
define ('PAGE', 'Requests');
include('../db_connect.php');
include('includes/header.php');

session_start();
if(isset($_SESSION['is_adminlogin'])) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script> location.href='login.php'</script>";
}
?>

<!-- Start 2nd Column -->
<div class="col-sm-4">
    <?php 
        $sql = "SELECT request_id, request_info, request_desc, requester_date FROM submitrequest";
        $result = $conn->query($sql);
        if($result->num_rows >0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="card mt-5 mx-5">';
                    echo '<div class="card-header">';
                        echo 'Request ID: ' . $row['request_id'];
                    echo '</div>';
                    echo '<div class="card-body">';
                        echo '<h5 class="card-title">Request Info: ' .$row['request_info'];
                        echo '</h5>';
                        echo '<p class="card-text">' .$row['request_desc'];
                        echo '</p>';
                        echo '<p class="card-text">Request Date: ' .$row['requester_date'];
                        echo '</p>';
                        echo '<div class="float-right">';
                            echo '<form action="" method="POST">';
                                echo '<input type="hidden" name="id" value=' .$row["request_id"]. '>';
                                echo '<input type="submit" class="btn btn-dark mr-3" name="view" value="View">';
                                echo '<input type="submit" class="btn btn-secondary" name="close" value="Close">';
                            echo '</form>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        }
    ?>
</div> <!-- End 2nd Column -->

<?php
if(isset($_REQUEST['view'])) {
    $sql = "SELECT * FROM submitrequest WHERE request_id = {$_REQUEST['id']}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>


<!-- Start 3rd Column -->
<div class="col-sm-5 mt-5 jumbotron">
        <form action="" method="POST">
            <h5 class="text-center"><strong>Assign Work Order Request</strong></h5>
            <div class="form-group">
                <label for="request_id">Request ID</label>
                <input type="text" class="form-control" name="request_id" id="request_id" value="<?php if(isset($row['request_id'])) echo $row['request_id']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="request_info">Request Info</label>
                <input type="text" class="form-control" name="request_info" id="request_info" value="<?php if(isset($row['request_info'])) echo $row['request_info']; ?>">
            </div>
            <div class="form-group">
                <label for="requestdesc">Description</label>
                <textarea class="form-control" name="requestdesc" id="requestdesc" rows="4"><?php if(isset($row['request_desc'])) echo $row['request_desc']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="requestername">Name</label>
                <input type="text" class="form-control" name="requestername" id="requestername" value="<?php if(isset($row['requester_name'])) echo $row['requester_name']; ?>">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="address1">Address Line 1</label>
                    <input class="form-control" type="text" name="address1" id="address1" value="<?php if(isset($row['requester_add1'])) echo $row['requester_add1']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="address1">Address Line 2</label>
                    <input class="form-control" type="text" name="address2" id="address2" value="<?php if(isset($row['requester_add2'])) echo $row['requester_add2']; ?>">
                </div>   
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="requestercity">City</label>
                    <input class="form-control" type="text" name="requestercity" id="requestercity" value="<?php if(isset($row['requester_city'])) echo $row['requester_city']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="requesterstate">State</label>
                    <input class="form-control" type="text" name="requesterstate" id="requesterstate" value="<?php if(isset($row['requester_state'])) echo $row['requester_state']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="requesterzip">Zip</label>
                    <input class="form-control" type="text" name="requesterzip" id="requesterzip" onkeypress="isInputNumber(event)" value="<?php if(isset($row['requester_zip'])) echo $row['requester_zip']; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="requesteremail">Email</label>
                    <input class="form-control" type="email" name="requesteremail" id="requesteremail" value="<?php if(isset($row['requester_email'])) echo $row['requester_email']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="requestermobile">Mobile</label>
                    <input class="form-control" type="text" name="requestermobile" id="requestermobile" onkeypress="isInputNumber(event)" value="<?php if(isset($row['requester_mobile'])) echo $row['requester_mobile']; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="assigntech">Assign to Technician</label>
                    <input class="form-control" type="text" name="assigntech" id="assigntech">
                </div>
                <div class="form-group col-md-6">
                    <label for="requesterdate">Date</label>
                    <input class="form-control" type="date" name="requesterdate" id="requesterdate" value="<?php if(isset($row['requester_date'])) echo $row['requester_date']; ?>">
                </div>
            </div>
            <div class="float-right mt-3">
                <button type="submit" class="btn btn-success" name="assign">Assign</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>
</div>


<?php 
include('includes/footer.php');
?>