<?php 
ob_start();
session_start();
?>
<form action="" method="post">
<div class="col-12">
    <a href="<?=ROOT?>/product/addproduct" class="btn btn-secondary"><i class="fas fa-plus"></i></a>  
</div> 
<br>
<table class="table table-striped projects">
    <thead>
        <tr>
            <th style="width: 1%">#</th>
            <th style="width: 10%">ID</th>
            <th style="width: 10%">Name</th>
            <th style="width: 20%">short_description</th>
            <th style="width: 30%" class="text-center">description</th>
            <th style="width: 10%" class="text-center">price</th>
            <th style="width: 8%" class="text-center">category_id</th>
            <th style="width: 8%" class="text-center">pro_pic</th>
            <th style="width: 250%"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td></td> 
                <td><a><?php echo $product->id; ?></a></td>
                <td><?php echo $product->name; ?></td>
                <td class="project_progress"><?php echo $product->short_description; ?></td>
                <td class="project-state"><?php echo $product->description; ?></td>
                <td class="project-state"><?php echo $product->price; ?></td>
                <td class="project-state"><?php echo $product->category_id; ?></td>
                <td class="project-state"> <img src="img/<?=$product->pro_pic;?>" width="90px"></td>
                <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="#">
                        <i class="fas fa-folder"></i>                              
                    </a>
                    <a class="btn btn-info btn-sm" href="<?=ROOT?>/product/modifierproduct?id=<?php echo $product->id; ?>">
                        <i class="fas fa-pencil-alt"></i>                              
                    </a>
                    <a class="btn btn-danger btn-sm" href="<?=ROOT?>/product/supprimeproduct?id=<?php echo $product->id;?>">
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