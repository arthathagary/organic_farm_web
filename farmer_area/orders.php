<?php
    include "../include/connect.php";
    
?>

<div class="table-section container pt-2">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>User ID</th>
                <th>Paid Amount</th>
                <th>Invoice Number</th>
                <th>Total Products</th>
                <th>Order Date</th>
                <th>Order Status</th>
            </tr>
        </thead>
        <tbody>
       <?php
        $select_orders = "SELECT * FROM `user_orders`";
        $result_orders = mysqli_query($con, $select_orders);
        while($row_orders = mysqli_fetch_array($result_orders)){
            $order_id = $row_orders['order_id'];
            $user_id = $row_orders['user_id'];
            $paid_amount = $row_orders['amount_due'];
            $invoice_number = $row_orders['invoice_number'];
            $total_products = $row_orders['total_products'];
            $order_date = $row_orders['order_date'];
            $order_status = $row_orders['order_status'];
            echo "<tr>
            <td>$order_id</td>
            <td>$user_id</td>
            <td>$paid_amount</td>
            <td>$invoice_number</td>
            <td>$total_products</td>
            <td>$order_date</td>
            <td>$order_status</td>
            </tr>";
        }
       ?>
        </tbody>
    </table>
</div>