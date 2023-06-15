<?php
ob_start();
?>
<form action="" method="post">
<div class="col-12">
    <a href="<?=ROOT?>/user/adduser" class="btn btn-secondary"><i class="fas fa-plus"></i></a>  
</div> 
<br>
<table class="table table-striped projects">
    <thead>
        <tr>
            <th style="width: 1%">#</th>
            <th style="width: 10%">ID</th>
            <th style="width: 20%">NAME</th>
            <th style="width: 20%">EMAIL</th>
            <th style="width: 10%" class="text-center">USERNAME</th>
            <th style="width: 10%" class="text-center">PASSWORD</th>
            <th style="width: 8%" class="text-center">ROLE_ID</th>
            <th style="width: 250%"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td></td>
                <td><a><?php echo $user->id; ?></a></td>
                <td><?php echo $user->name; ?></td>
                <td class="project_progress"><?php echo $user->email; ?></td>
                <td class="project-state"><?php echo $user->username; ?></td>
                <td class="project-state"><?php echo $user->password; ?></td>
                <td class="project-state"><?php echo $user->role_id; ?></td>
                <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="#">
                        <i class="fas fa-folder"></i>                              
                    </a>
                    <a class="btn btn-info btn-sm" href="<?=ROOT?>/user/modifieruser?id=<?php echo $user->id; ?>">
                        <i class="fas fa-pencil-alt"></i>                              
                    </a>
                    <a class="btn btn-danger btn-sm" href="<?=ROOT?>/user/supprimeuser?id=<?php echo $user->id;?>">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</form>
<?php $content=ob_get_clean();?>
<?php include_once 'homeview.php';?> 