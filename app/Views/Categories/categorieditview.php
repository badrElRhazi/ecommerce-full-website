
<?php
ob_start();
?>
<div style="margin-left: 50px" >
<form action="" method="POST">
    <input type="hidden" name="id" value="<?php echo $catdata->id; ?>" >
    <div class="form-group ">
        <label for="">Name:</label>
        <input type="texte" class="form-control" id="name" name="name" value="<?php echo $catdata->name; ?>" style="width:50%">
    </div>      
    
    <button type="submit" class="btn btn-primary">EDIT CATEGORIE</button>
</form>
</div>
<?php $content=ob_get_clean();?>
<?php include_once 'homeview.php';?> 


