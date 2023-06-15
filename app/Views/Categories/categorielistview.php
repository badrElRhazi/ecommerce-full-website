<?php
ob_start();
?>
<form action="" method="post">
<div class="col-12">
    <a href="<?=ROOT?>/categorie/addcategorie" class="btn btn-secondary"><i class="fas fa-plus"></i></a>  
</div> 
<br>
<table class="table table-striped projects">
    <thead>
        <tr>
            <th style="width: 5%"></th>
            <th style="width: 10%">ID</th>
            <th style="width: 20%">NAME</th>
            <th style="width: 200%"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $cat): ?>
            <tr>
                <td></td>
                <td><a><?php echo $cat->id; ?></a></td>
                <td><?php echo $cat->name; ?></td>
                <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="#">
                        <i class="fas fa-folder"></i>                              
                    </a>
                    <a class="btn btn-info btn-sm" href="<?=ROOT?>/categorie/modifiercategorie?id=<?php echo $cat->id; ?>">
                        <i class="fas fa-pencil-alt"></i>                              
                    </a>
                    <a class="btn btn-danger btn-sm" href="<?=ROOT?>/categorie/supprimercategorie?id=<?php echo $cat->id;?>">
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