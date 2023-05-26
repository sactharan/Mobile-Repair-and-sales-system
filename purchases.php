<?php

include 'inc/header.php';
include 'config.php';
?>
<!-- Add type -->
<div class="modal fade" id="suppliersAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Supplier</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="savesuppliers">
                <div class="modal-body">

                    <div id="errorMessage" class="alert alert-warning d-none"></div>
                    <div class="mb-3">
                        <label for="">Supplier Code</label>
                        <input type="text" name="supplier_code" id="supplier_code" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Supplier Name</label>
                        <input type="text" name="supplier_name" id="supplier_name" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Supplier Contact</label>
                        <input type="text" name="supplier_contact" id="supplier_contact" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Supplier Address</label>
                        <input type="text" name="supplier_address" id="supplier_address" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Status</label>
                        <select class="select2" name="status" data-placeholder="" style="width: 100%;">
                            <option value="1" <?= isset($status) && $status == 1 ? "selected" : "" ?>>Active</option>
                            <option value="0" <?= isset($status) && $status == 0 ? "selected" : "" ?>>Deactive</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="savesuppliers" class="btn btn-primary">Save </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row column_title">
    <div class="col-md-12">
        <div class="page_title">
            <h2>Products Purchase</h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <div class="heading1 margin_0">
                <a href="purchaseslist.php">
            <button type="button" class="btn btn-primary float-end"><b>Back</b></button>
            </a>

                </div>
            </div>

            <div class="table_section padding_infor_info">
                <div class="form-responsive-sm">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4 class="card-title">Generate New Purchase</h3>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">


                                <form id="purchaseForm" action="purchasecode.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="start_date">Purchase Date</label>
                                                <input type="date" class="form-control" name="p_date">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="start_date">Type</label>
                                                <select class="select2" name="type" data-placeholder=""
                                                    style="width: 100%;">
                                                    <option value="1" <?= isset($status) && $status == 1 ? "selected" : "" ?>>Credit</option>
                                                    <option value="0" <?= isset($status) && $status == 0 ? "selected" : "" ?>>Cash</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="start_date">Supplier Name</label>
                                                <select class="select2" name="existing_supplier" data-placeholder=""
                                                    style="width: 100%;">
                                                    <?php
                                                    // Establish a database connection
                                                    require 'config.php';
                                                    if (!$con) {
                                                        die("Connection failed: " . mysqli_connect_error());
                                                    }

                                                    // Retrieve data from the database
                                                    $query = "SELECT supplier_name FROM suppliers";
                                                    $result = mysqli_query($con, $query);

                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo '<option value="' . $row['supplier_name'] . '">' . $row['supplier_name'] . '</option>';
                                                    }

                                                    // Close the database connection
                                                    mysqli_close($con);
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h5>Or Add New Supplier</h5> <button type="button" class="btn btn-primary float-end"
                                        data-bs-toggle="modal" data-bs-target="#suppliersAddModal">
                                        Add Supplier
                                    </button>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="start_date">Supplier Code</label>
                                                <input type="text" class="form-control" name="suppliercode"
                                                    id="suppliercode">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="start_date">Supplier Name</label>
                                                <input type="text" class="form-control" name="suppliername"
                                                    id="suppliername">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="start_date">Supplier Contact</label>
                                                <input type="text" class="form-control" name="suppliercontact"
                                                    id="suppliercontact">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="start_date">Supplier Address</label>
                                                <input type="text" class="form-control" name="supplieraddress"
                                                    id="supplieraddress">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h5>Products</h5>
                                    <div class="row">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 30%;">Product</th>
                                                            <th style="width: 15%;">Unit Price</th>
                                                            <th style="width: 10%;">Qty</th>
                                                            <th style="width: 15%;">Total</th>
                                                            <th style="width: 10%;">Add</th>
                                                            <th style="width: 10%;">Remove</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="productRows">
                                                        <tr>
                                                            <td><input class="id" type="text" name="product_name[]">
                                                            </td>
                                                            <td><input class="price" type="text" name="unit_price[]">
                                                            </td>
                                                            <td><input class="qty" type="text" name="qty[]"></td>
                                                            <td><input class="total" type="text" name="total[]"></td>
                                                            <td><input type="button" value="+" class="add"></td>
                                                            <td><input type="button" value="-" class="rmv"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cash Payment -->
                                    <div id="cashFields">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputPassword1">Total Amount</label>
                                                <input type="number" class="form-control" name="total_cost"
                                                    id="total_cost">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Payment</label>
                                                <select class="select2" name="payment" data-placeholder=""
                                                    onchange="toggleChequeFields()" style="width: 100%;">
                                                    <option value="0" <?= isset($payment) && $payment == 0 ? "selected" : "" ?>>Cash</option>
                                                    <option value="1" <?= isset($payment) && $payment == 1 ? "selected" : "" ?>>Cheque</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cheque Payment -->
                                    <div id="chequeFields">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="exampleInputPassword1">Cheque Number</label>
                                                <input type="text" name="cheq_no" class="form-control" id="cheq_no"
                                                    placeholder="Enter Cheque NUmber" disabled>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="exampleInputPassword1">Cheque Amount</label>
                                                <input type="number" class="form-control" id="cheq_amt" name="cheq_amt"
                                                onchange="updateAmountPaid()" disabled>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="exampleInputPassword1">Cheque Date</label>
                                                <input type="date" class="form-control" id="cheq_date" name="cheq_date"
                                                    disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">Amount Paid</label>
                                            <input type="number" name="amt_paid" class="form-control" id="amt_paid"
                                            onchange="calculateBalance()"  placeholder="Enter Amount Paid">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">Balance</label>
                                            <input type="number" class="form-control" id="balance" name="balance"
                                                value="0" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <button type="submit" name="submit" class="btn btn-primary">Proceed</button>
                                    </div>

                                </form>

                            </div>



                        </div>
                    </div>

                </div>
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
    $(document).ready(function () {
        // Add row
        $(document).on("click", ".add", function () {
            var newRow = '<tr>' +
                '<td><input class="id" type="text" name="product_name[]"></td>' +
                '<td><input class="price" type="text" name="unit_price[]"></td>' +
                '<td><input class="qty" type="text" name="qty[]"></td>' +
                '<td><input class="total" type="text" name="total[]"></td>' +
                '<td><input type="button" value="+" class="add"></td>' +
                '<td><input type="button" value="-" class="rmv"></td>' +
                '</tr>';
            $('#productRows').append(newRow); // Append the new row to the tbody with id "productRows"
        });

        // Remove row
        $(document).on("click", ".rmv", function () {
            $(this).closest('tr').remove();
            total_cost(); // Update the total cost after removing a row
        });
    });

    $("body").on("keyup", ".qty", function () {
        var qty = Number($(this).val());
        var price = Number($(this).parents("tr").find(".price").val());
        $(this).parents("tr").find(".total").val(qty * price);
        total_cost(); // Update the total cost after changing the quantity
    });

    function total_cost() {
        var tot = 0;
        $(".total").each(function () {
            tot += Number($(this).val());
        });
        $("#total_cost").val(tot);
    }

      // Calculate balance
      $("body").on("keyup", "#amt_paid", function() {
                var grandTotal = Number($("#total_cost").val());
                var amtPaid = Number($(this).val());
                var balance = grandTotal - amtPaid;
                $("#balance").val(balance);
                total_cost();
            });

            function updateAmountPaid() {
        var chequeAmount = parseFloat(document.getElementById("cheq_amt").value);
        document.getElementById("amt_paid").value = chequeAmount.toFixed(2);
        calculateBalance();
    }

    function calculateBalance() {
        var totalAmount = parseFloat(document.getElementById("total_cost").value);
        var amountPaid = parseFloat(document.getElementById("amt_paid").value);
        var balance = totalAmount - amountPaid;

        document.getElementById("balance").value = balance.toFixed(2);
    }
</script>

<script>
    function toggleChequeFields() {
        var paymentSelect = document.querySelector('[name="payment"]');
        var chequeNumberField = document.getElementById("cheq_no");
        var chequeAmountField = document.getElementById("cheq_amt");
        var chequeDateField = document.getElementById("cheq_date");

        if (paymentSelect.value === "0") {
            chequeNumberField.disabled = true;
            chequeAmountField.disabled = true;
            chequeDateField.disabled = true;
        } else {
            chequeNumberField.disabled = false;
            chequeAmountField.disabled = false;
            chequeDateField.disabled = false;
        }
    }
</script>
<script>
    $(document).ready(function () {
        $('#savesuppliers').submit(function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_supplier", true);

            $.ajax({
                type: "POST",
                url: "suppliercode.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    var res = JSON.parse(response);
                    if (res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);
                    } else if (res.status == 200) {
                        $('#errorMessage').addClass('d-none');
                        $('#suppliersAddModal').modal('hide');
                        $('#savesuppliers')[0].reset();

                        // Populate the form fields with the new supplier data
                        $('#suppliercode').val(res.data.supplier_code);
                        $('#suppliername').val(res.data.supplier_name);
                        $('#suppliercontact').val(res.data.supplier_contact);
                        $('#supplieraddress').val(res.data.supplier_address);

                        // Trigger change event on the Supplier Name select element to update its value
                        $('[name="existing supplier"]').val(res.data.supplier_code).trigger('change');

                        alertify.set('notifier', 'position', 'top-right');
                        alertify.success(res.message);
                    } else if (res.status == 500) {
                        alert(res.message);
                    }
                }
            });
        });

        // Add an event listener to the Add Supplier modal to clear the form fields when shown
        $('#suppliersAddModal').on('show.bs.modal', function () {
            $('#savesuppliers')[0].reset();
            $('#errorMessage').addClass('d-none');
        });
    });

    $(document).ready(function () {

        // Add an event listener to the supplier name select element
        $('[name="existing_supplier"]').change(function () {
            var selectedSupplier = $(this).val();

            // Send an AJAX request to retrieve the supplier's data
            $.ajax({
                type: "POST",
                url: "get_supplier_data.php", // Replace with the appropriate server-side script
                data: { supplier_name: selectedSupplier },
                dataType: "json",
                success: function (response) {
                    if (response.status == 200) {
                        var supplierData = response.data;

                        // Update the form fields with the retrieved data
                        $('#suppliercode').val(supplierData.supplier_code);
                        $('#suppliername').val(supplierData.supplier_name);
                        $('#suppliercontact').val(supplierData.supplier_contact);
                        $('#supplieraddress').val(supplierData.supplier_address);
                    } else {
                        // Handle error case
                    }
                }
            });
        });

    });

</script>