
<!DOCTYPE html>
<html lang="en">
<head>
  <title>cart list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="row">
    <div class="col-sm-10"><h2>Cart Checkout</h2></div>
  <div class="col-sm-2"></div>
</div>
<form method="post" action="placeorder">
  <table class="table">
    <thead class="thead-dark">
      <tr>

        <th>Product Name</th>
        <th>Product price $</th>
        <th >Quantity</th>
        <th colspan="2">total</th>
      </tr>
    </thead>
    <tbody>
      <?php
if (count($checkout_arr) > 0) {
	?>

      <?php
$totalamt = 0;

	foreach ($checkout_arr as $key => $value): ?>
<tr>

        <td><?=$value['name']?></td>
        <td>$<?=$value['price']?></td>
        <td><?=$value['qty']?></td>
        <td colspan="2">$<?=$value['qty'] * $value['price']?></td>
      </tr>

      <?php
$totalamt += $value['qty'] * $value['price'];
	endforeach?>
    <tr>
    <td colspan="3">Net Amount</td>
    <td colspan="2" >$<?=$totalamt?></td>
    </tr>
<?php echo validation_errors(); ?>
    <tr>
    <td ><input type="text" class="form-control" name="name" placeholder="Enter Name"></td>
     <td ><input type="email" class="form-control"  name="email" placeholder="Enter Email"></td>
      <td ><input type="tel" class="form-control"  name="phone" placeholder="Enter Phone"></td>
       <td ><input type="text" class="form-control"  name="address" placeholder="Enter Address"></td>
    <td ><input type="submit" name="placeord" value="placeorder"  class="btn btn-success"></td>
    </tr>
    <?php } else {?>
      <tr>
        <td colspan="3">No Items found</td>
      </tr>
    <?php }?>


</form>

    </tbody>
  </table>

</div>
<script type="text/javascript">


  function updatetitem(id){

    //alert(id); return false;

   var vcom='cart-'+id;
   var qty=$('#'+vcom).val();
  // alert(qty); return false;
    $.ajax({
    type: "POST",
    url: '<?php echo base_url(); ?>welcome/updateItemQty',
    cache:false,
    data: "rowid="+id+'&qty='+qty,
    success: function (response) {
    //alert(response);
/*    console.log('s-----',response)
    return false;*/

    alert('product quantity updated successfully!!!');
    location.reload(true);



    }
    });

}

</script>
</body>
</html>
