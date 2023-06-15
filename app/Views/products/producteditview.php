
<?php
ob_start();
?>
<div style="margin-left: 50px" >
<form action="modifierproduct" method="POST">
    <input type="hidden" name="id" value="<?php echo $productdata->id; ?>" >
    <div class="form-group row">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $productdata->name; ?>"style="width:50%">
    </div>
    <div class="form-group">
        <label for="">short_description:</label>
        <input type="text" class="form-control" id="short_description" name="short_description" value="<?php echo $productdata->short_description; ?>"style="width:50%">
    </div>
    <div class="form-group">
        <label for="username">description:</label>
        <input type="text" class="form-control" id="description" name="description" value="<?php echo $productdata->description; ?>"style="width:50%">
    </div>
    <div class="form-group">
        <label for="">price:</label>
        <input type="text" class="form-control" id="price" name="price" value="<?php echo $productdata->price; ?>"style="width:50%">
    </div>
    <div class="form-group">
    
        <label for="password">category_id:</label>
        <input type="text" class="form-control" id="category_id" name="category_id" value="<?php echo $productdata->category_id; ?>"style="width:50%">
    </div>
    <button type="submit" class="btn btn-primary">EDIT PRODUCT</button>
</form>
</div>
<?php $content=ob_get_clean();?>
<?php include_once 'homeview.php';?> 


