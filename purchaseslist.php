<?php

include 'inc/header.php';
include 'config.php';
?>
<div class="row column_title">
   <div class="col-md-12">
      <div class="page_title">
         <h2>Purchases list</h2>
      </div>
   </div>
</div>

<div class="row">
   <div class="col-md-12">
      <div class="white_shd full margin_bottom_30">
         <div class="full graph_head">
            <div class="heading1 margin_0">
            <a href="purchases.php">
            <button type="button" class="btn btn-primary float-end"><b>Add New Purchase</b></button>
            </a>
            </div>
         </div>
         <div class="table_section padding_infor_info">
            <div class="table-responsive-sm">
            <?php
               $conn = mysqli_connect("localhost", "root", "", "hkm_db");
               $query = "SELECT * FROM purchases ";
               $query_run = mysqli_query($conn, $query);
               ?>
               <table id="purchaseTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Purchase Date</th>
                                <th>Supplier Name</th>
                                <th>Total Bill Amount</th>
                                <th>Amount Paid</th>
                                <th>Balance</th>
                                <th>Payment</th>
                                <th>Print Invoice</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'config.php';

                            $query = "SELECT * FROM purchases";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $product)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $product['id'] ?></td>
                                        <td><?= $product['p_date'] ?></td>
                                        <td><?= $product['suppliername'] ?></td>
                                        <td><?= $product['total_cost'] ?></td>
                                        <td><?= $product['amt_paid'] ?></td>
                                        <td><?= $product['balance'] ?></td>
                                         <td class="text-center">
                                                            <?php
                                                            switch ($product['payment']) {
                                                                case 0:
                                                                    echo '<span class="rounded-pill badge badge-success">Cash</span>';
                                                                    break;
                                                                case 1:
                                                                    echo '<span class="rounded-pill badge badge-info">Cheque</span>';
                                                                    break;
                                                            }
                                                            ?>
                                                        </td>
                                        <td>
                                            <button type="button" value="<?= $product['id']; ?>"
                                                class="printbtn btn btn-info btn-sm">Print</button>


                                        </td>
                                        <td>
                                            <button type="button" value="<?=$product['id'];?>" class="deletebtn btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            
                        </tbody>
                    </table>
            </div>
         </div>
      </div>
   </div>
</div>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
    // Function to open a new window or tab and print the invoice
    function printInvoice(id) {
        var url = 'print_purchase_invoice.php?id=' + id;
        window.open(url, '_blank');
    }

    // Attach event listener to the print button
    var printButtons = document.querySelectorAll('.printbtn');
    printButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var id = this.value;
            printInvoice(id);
        });
    });
</script>
    <script>
       
    

$(document).on('click', '.deletebtn', function (e) {
e.preventDefault();

if(confirm('Are you sure you want to delete this data?'))
{
    var product_id = $(this).val();
    $.ajax({
        type: "POST",
        url: "purchasecode.php",
        data: {
            'delete_size': true,
            'product_id': product_id
        },
        success: function (response) {

            var res = jQuery.parseJSON(response);
            if(res.status == 500) {

                alert(res.message);
            }else{
                alertify.set('notifier','position', 'top-right');
                alertify.success(res.message);

                $('#purchaseTable').load(location.href + " #purchaseTable");
            }
        }
    });
}
});

    
        </script>



