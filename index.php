<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker3.min.css">
  <script src="js/jquery-2.2.0.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/bootstrap-datepicker.ru.min.js" charset="UTF-8"></script>

  <title>LaserCut CRM</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <p>LaserCut CRM</p>
    </div>

    <div class="row">
      <div class="col-md-2" id="menu">
        <div class="container-fluid btn-group-vertical btn-group-lg">
          <button id="btn_addorder" class="btn btn-success btn-lg btn-block" data-toggle="modal"
            data-target="#orderAddModal">Add order</button>
          <button id="tasks" class="btn btn-light btn-lg btn-block">Orders</button>
          <button id="refresh" class="btn btn-light btn-lg btn-block">Refresh</button>
        </div>
      </div>

      <div class="col-md-10" id="content">

      </div>
    </div>
  </div>

  <div class="modal fade" id="orderAddModal" tabindex="-1" role="dialog" aria-labelledby="ModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalTitle">New order</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="addform">
            <div class="form-group">
              <label for="ordername">Order name</label>
              <input type="text" class="form-control" name = "ordername" id="ordername" placeholder="Order name" required="required">
            </div>
            <div class="form-group">
              <label for="ordercustomer">Customer</label>
              <input type="text" class="form-control" name = "ordercustomer" id="ordercustomer" placeholder="Customer" required="required">
            </div>
            <div class="form-group">
                <label for="ordercustomercontact">Contact</label>
                <input type="text" class="form-control" name = "ordercustomercontact" id="ordercustomercontact" placeholder="Phone or Inst" required="required">
            </div>
            <div class="form-group date">
              <label for="orderdeadline">Deadline</label>
              <input type="text" class="form-control" name = "orderdeadline" id="orderdeadline" data-provide="datepicker" required="required">
            </div>
            <div class="form-group">
                <label for="orderprice">Price</label>
                <input type="text" class="form-control" name = "orderprice" id="orderprice" required="required">
            </div>
            <!-- <div>
              <input type="submit" name="add" id="add" value="Add" class="btn btn-primary" />
            </div> -->
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" id="add" class="btn btn-primary" name="submit">Add</button>
        </div>
      </div>
    </div>
  </div>

  <script src="js/methods.js"></script>

</body>

</html>