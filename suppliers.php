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
                <button type="submit" class="btn btn-primary">Save </button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- Edit type Modal -->
<!-- <div class="modal fade" id="supplierupdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Supplier</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="updatesupplier">
            <div class="modal-body">

                <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                <input type="hidden" name="supplier_id" id="supplier_id" value="">

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
                    <select class="select2" name="status" id="status" data-placeholder="" style="width: 100%;">
                     <option value="1" <?= isset($status) && $status == 1 ? "selected" : "" ?>>Active</option>
                     <option value="0" <?= isset($status) && $status == 0 ? "selected" : "" ?>>Deactive</option>
                  </select>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        </div>
    </div>
</div> -->

<!-- Edit type Modal -->
<div class="modal fade" id="supplierupdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Supplier</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="updatesupplier">
            <div class="modal-body">

                <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                <input type="hidden" name="supplier_id" id="supplier_id" >
                <div class="mb-3">
                    <label for="">Supplier Code</label>
                    <input type="text" name="edit_supplier_code" id="supplier_code" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Supplier Name</label>
                    <input type="text" name="edit_supplier_name" id="supplier_name" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Supplier Contact</label>
                    <input type="text" name="edit_supplier_contact" id="supplier_contact" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Supplier Address</label>
                    <input type="text" name="edit_supplier_address" id="supplier_address" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Status</label>
                    <select class="select2" name="edit_status" id="edit_status" data-placeholder="" style="width: 100%;">
                    <option value="1" <?= isset($status) && $status == 1 ? "selected" : "" ?>>Active</option>
                    <option value="0" <?= isset($status) && $status == 0 ? "selected" : "" ?>>Deactive</option>
                </select>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        </div>
    </div>
</div>


<!-- View type Modal -->
<div class="modal fade" id="supplierViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">View Supplier</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
            <div class="mb-3">
                    <label for="">Supplier Code</label>
                    <p id="view_supplier_code" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Supplier Name</label>
                    <p id="view_supplier_name" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Supplier Contact</label>
                    <p id="view_supplier_contact" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Supplier Address</label>
                    <p id="view_supplier_address" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Status</label>
                    <p id="view_status" class="form-control"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="row column_title">
   <div class="col-md-12">
      <div class="page_title">
         <h2>Suppliers list</h2>
      </div>
   </div>
</div>

<div class="row">
   <div class="col-md-12">
      <div class="white_shd full margin_bottom_30">
         <div class="full graph_head">
            <div class="heading1 margin_0">
            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#suppliersAddModal">
                            Add Supplier
                        </button>

            </div>
         </div>
         <div class="table_section padding_infor_info">
            <div class="table-responsive-sm">
            <?php
            $conn = mysqli_connect("localhost", "root", "", "hkm_db");
            $query = "SELECT * FROM suppliers ";
            $query_run = mysqli_query($conn, $query);
            ?>
               <table id="supplierTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Supplier Code</th>
                                <th>Supplier Name</th>
                                <th>Supplier Contact</th>
                                <th>Supplier Address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'config.php';

                            $query = "SELECT * FROM suppliers";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $supplier) {
                                    ?>
                                            <tr>
                                                <td><?= $supplier['id'] ?></td>
                                                <td><?= $supplier['supplier_code'] ?></td>
                                                <td><?= $supplier['supplier_name'] ?></td>
                                                <td><?= $supplier['supplier_contact'] ?></td>
                                                <td><?= $supplier['supplier_address'] ?></td>
                                                 <td class="text-center">
                                                                    <?php
                                                                    switch ($supplier['status']) {
                                                                        case 1:
                                                                            echo '<span class="rounded-pill badge badge-success">Active</span>';
                                                                            break;
                                                                        case 0:
                                                                            echo '<span class="rounded-pill badge badge-info">Deactive</span>';
                                                                            break;
                                                                    }
                                                                    ?>
                                                                </td>
                                                <td>
                                                    <button type="button" value="<?= $supplier['id']; ?>" class="viewbtn btn btn-info btn-sm">View</button>
                                                    <button type="button" value="<?= $supplier['id']; ?>" class="editbtn btn btn-success btn-sm">Edit</button>
                                                    <button type="button" value="<?= $supplier['id']; ?>" class="deletebtn btn btn-danger btn-sm">Delete</button>
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
       $(document).on('submit', '#savesuppliers', function (e) {
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
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage').addClass('d-none');
                        $('#suppliersAddModal').modal('hide');
                        $('#savesuppliers')[0].reset();

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

                        $('#supplierTable').load(location.href + " #supplierTable");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.editbtn', function () {

var supplier_id = $(this).val();

$.ajax({
    type: "GET",
    url: "suppliercode.php?supplier_id=" + supplier_id,
    success: function (response) {

        var res = jQuery.parseJSON(response);
        if(res.status == 404) {

            alert(res.message);
        }else if(res.status == 200){

            $('#supplier_id').val(res.data.id);
            $('#edit_supplier_code').val(res.data.supplier_code);
            $('#edit_supplier_name').val(res.data.supplier_name);
            $('#edit_supplier_contact').val(res.data.supplier_contact);
            $('#edit_supplier_address').val(res.data.supplier_address);
            $('#edit_status').val(res.data.status);

            $('#supplierupdateModal').modal('show');
        }

    }
});

});

$(document).on('submit', '#updatesupplier', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_supplier", true);

            $.ajax({
                type: "POST",
                url: "suppliercode.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessageUpdate').removeClass('d-none');
                        $('#errorMessageUpdate').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessageUpdate').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        
                        $('#supplierupdateModal').modal('hide');
                        $('#updatesupplier')[0].reset();

                        $('#supplierTable').load(location.href + " #supplierTable");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        

        $(document).on('click', '.viewbtn', function () {

var supplier_id = $(this).val();
$.ajax({
    type: "GET",
    url: "suppliercode.php?supplier_id=" + supplier_id,
    success: function (response) {

        var res = jQuery.parseJSON(response);
        if(res.status == 404) {

            alert(res.message);
        }else if(res.status == 200){

            $('#view_supplier_code').text(res.data.supplier_code);
            $('#view_supplier_name').text(res.data.supplier_name);
            $('#view_supplier_contact').text(res.data.supplier_contact);
            $('#view_supplier_address').text(res.data.supplier_address);
            $('#view_status').text(res.data.status);

            $('#supplierViewModal').modal('show');
        }
    }
});
});

$(document).on('click', '.deletebtn', function (e) {
e.preventDefault();

if(confirm('Are you sure you want to delete this data?'))
{
    var supplier_id = $(this).val();
    $.ajax({
        type: "POST",
        url: "suppliercode.php",
        data: {
            'delete_size': true,
            'supplier_id': supplier_id
        },
        success: function (response) {

            var res = jQuery.parseJSON(response);
            if(res.status == 500) {

                alert(res.message);
            }else{
                alertify.set('notifier','position', 'top-right');
                alertify.success(res.message);

                $('#supplierTable').load(location.href + " #supplierTable");
            }
        }
    });
}
});

    
        </script>



