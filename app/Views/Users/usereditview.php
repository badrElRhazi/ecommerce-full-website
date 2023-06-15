
<?php
ob_start();
?>
<div style="margin-left: 50px" >
<form action="modifierproduct" method="POST">
    <input type="hidden" name="id" value="<?php echo $userdata->id; ?>" >
    <div class="form-group row">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $userdata->name; ?>"style="width:50%">
    </div>
    <div class="form-group ">
        <label for="">Email:</label>
        <input type="text" class="form-control" id="email" name="email" value="<?php echo $userdata->email; ?>" style="width:50%">
    </div>
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" value="<?php echo $userdata->username; ?>"style="width:50%">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" value="<?php echo $userdata->password; ?>"style="width:50%">
    </div>
    <div class="form-group">
    
        <label for="password">Password:</label>
        <input type="text" class="form-control" id="role_id" name="role_id" value="<?php echo $userdata->role_id; ?>"style="width:50%">
    </div>
    <button type="submit" class="btn btn-primary">EDIT USER</button>
</form>
</div>
<?php $content=ob_get_clean();?>
<?php include_once 'homeview.php';?> 


