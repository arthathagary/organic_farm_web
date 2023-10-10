<?php
    include "../include/connect.php";
?>


<div class="table-section">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Message ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $select_query = "SELECT * FROM contact";
                $result = mysqli_query($con,$select_query);
                while($row = mysqli_fetch_assoc($result)){
                    $contact_id = $row['contact_id'];
                    $contact_name = $row['contact_name'];
                    $contact_email = $row['contact_email'];
                    $contact_message = $row['contact_message'];
            ?>
            <tr>
                <td><?php echo $contact_id; ?></td>
                <td><?php echo $contact_name; ?></td>
                <td><?php echo $contact_email; ?></td>
                <td><?php echo $contact_message; ?></td>
                <td><a href="contact.php?delete=<?php echo $contact_id; ?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>






