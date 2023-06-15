
<?php
ob_start();
?>
<div style="margin-left: 50px" >
<form action="" method="POST">
    <input type="hidden" name="id" value="<?php echo $roledata->id; ?>" >
    <div class="form-group row">
        <label for="">Code:</label>
        <input type="text" class="form-control" id="code" name="code" value="<?php echo $roledata->code; ?>"style="width:50%">
    </div>
    <div class="form-group ">
        <label for="">Name:</label>
        <input type="texte" class="form-control" id="name" name="name" value="<?php echo $roledata->name; ?>" style="width:50%">
    </div>      
    
    <button type="submit" class="btn btn-primary">EDIT ROLE</button>
</form>
</div>
<?php $content=ob_get_clean();?>
<?php include_once 'homeview.php';?> 


