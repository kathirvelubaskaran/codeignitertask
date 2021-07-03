<?php
const CATEGORY = array('1' => 'FMCG', '2' => 'HOUSEHOLD', '3' => 'DAIRY');
echo $rr = $this->session->userdata('cart_arr');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">


  <h2>Product</h2>
<?php echo validation_errors(); ?>
 <?php

$formData = array(
	'class' => 'form-horizontal',
	'method' => 'POST',
);
echo form_open_multipart('', $formData);
?>

            <div class="form-group">
      <label for="cate">Category:</label>
      <select  name="cate" id="cate" class="form-control">
   <?php foreach (CATEGORY as $key => $value): ?>
        <option value="<?=$key?>"><?=$value?></option>
          <?php endforeach?>
      </select>
    </div>

    <div class="form-group">
      <label for="name">name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
        <div class="form-group">
      <label for="Short Description">Short Description:</label>
      <input type="text" class="form-control" id="sdesc" placeholder="Enter Short Description" name="sdesc">
    </div>
        <div class="form-group">
      <label for="Description">Description:</label>
      <input type="text" class="form-control" id="desc" placeholder="Enter Description" name="desc">
    </div>
    <input type="hidden" class="form-control" id="imgg" placeholder="Enter Description" name="imgg">
        <div class="form-group">
      <label for="image">image:</label>
      <input type="file" class="form-control" multiple  id="prodimg" placeholder="Enter name" name="prodimg[]">
    </div>
            <div class="form-group">
      <label for="Price">Price:</label>
      <input type="number" class="form-control" id="price" placeholder="Enter price" name="price">
    </div>
            <div class="form-group">
      <label for="status">status:</label>
      <select  name="status" id="status" class="form-control">

        <option value="1">Active</option>
        <option value="2">Inactive</option>
      </select>
    </div>

    <input type="submit" class="btn btn-primary" name="save" value="Save">
<?=form_close();?>
</div>

</body>
</html>
