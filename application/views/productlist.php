
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product list</title>
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
<div class="col-sm-12"></div>
</div>
<div class="row">
    <div class="col-sm-10"><h2>All Products</h2></div>
  <div class="col-sm-2"><a href="<?=base_url()?>welcome/cart" class="btn btn-primary btn-sm">Cart (<?=count($present_arr)?>)</a></div>
</div>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Product Image</th>
        <th>Product Name</th>
        <th>Product price $</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>

      <?php

if (count($allproducts) > 0) {
	?>

      <?php foreach ($allproducts as $key => $value): ?>
<tr>
        <td><img src="<?php echo base_url(); ?>uploads/<?=$value['img']?>" width="150px" height="60px"></td>
        <td><?=$value['name']?></td>
        <td>$<?=$value['price']?></td>
        <td>
          <input type="hidden" readonly="" min="0" name="ids<?=$key?>" value="<?=$value['id']?>">
           <input type="hidden" readonly="" min="0" name="prc<?=$key?>" value="<?=$value['price']?>">
          <input type="hidden" class="form-control" min="0" name="items<?=$key?>" value="0">

          <?php
if (in_array($value['id'], $present_arr)) {?>
<p>Already Added</p>
        <?php } else {?>
<button class="btn btn-success btn-sm" onclick="addtocartitem(<?=$value['id']?>)">Add</button>
	<?php }?>
        </td>

      </tr>

      <?php endforeach?>
 <tr>
      </tr>
    <?php } else {?>
      <tr>
        <td colspan="3"></td>
      </tr>
    <?php }?>


    </tbody>
  </table>

</div>
<script type="text/javascript">
  function cartsubmit() {
    //alert(1);
    var baseurl="<?=base_url()?>";

    $.ajax({
      type:'POST',
      url:baseurl+'welcome/add_to_cart',
      data:$("form#cart-form").serialize(),
      success:function(res){
        console.log(res);
      }
    });
  }


  function addtocartitem(id){

   // alert(id); return false;

    $.ajax({
    type: "POST",
    url: '<?php echo base_url(); ?>welcome/addToCart',
    cache:false,
    data: "pid="+id,
    success: function (response) {
    //alert(response);
/*    console.log('s-----',response)
    return false;*/

    alert('product added to cart successfully');
    location.reload(true);



    }
    });

}
</script>
</body>
</html>
