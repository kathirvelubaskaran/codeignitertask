
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
    <div class="col-sm-10"><h2>CART</h2></div>
  <div class="col-sm-2"></div>
</div>
  <table class="table">
    <thead class="thead-dark">
      <tr>

        <th>Product Name</th>
        <th>Product price $</th>
        <th colspan="3">Quantity</th>
        <th>total</th>
      </tr>
    </thead>
    <tbody>
      <?php
if (count($cart_arrr) > 0) {
	?>

      <?php
$totalamt = 0;

	foreach ($cart_arrr as $key => $value): ?>
<tr>

        <td><?=$value['name']?></td>
        <td>$<?=$value['price']?></td>
        <td><input type="number" min="1" name="cart-<?=$value['rowid']?>" id="cart-<?=$value['rowid']?>" class="form-control" value="<?=$value['qty']?>" /></td>
        <td><button  onclick="updatetitem('<?=$value['rowid']?>')" class="btn btn-info btn-sm">Update</button></td>
        <td><button onclick="removeitem('<?=$value['rowid']?>')"  class="btn btn-danger btn-sm">x</button></td>
        <td>$<?=$value['qty'] * $value['price']?></td>
      </tr>

      <?php
$totalamt += $value['qty'] * $value['price'];
	endforeach?>
 <tr>
        <td colspan="5">Net Amount</td>
        <td >$<?=$totalamt?>
        </td>

      </tr>
      <tr >
        <td colspan="4">
          <a href="<?=base_url()?>welcome/checkout" class="btn btn-warning">Checkout</a>
        </td>
      </tr>
    <?php } else {?>
      <tr>
        <td colspan="3">No Items found</td>
      </tr>
    <?php }?>


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


  function removeitem(id){

   // alert(id); return false;

    $.ajax({
    type: "POST",
    url: '<?php echo base_url(); ?>welcome/removeItem',
    cache:false,
    data: "pid="+id,
    success: function (response) {
    //alert(response);
/*    console.log('s-----',response)
    return false;*/
    alert('product Items Removed from cart successfully!!!');
    location.reload(true);



    }
    });

}
</script>
</body>
</html>
