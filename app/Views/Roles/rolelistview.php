<?php
 ob_start();
?>
<form action="" method="post">
   <div class="col-12">
   <a href="<?=ROOT?>/role/ajouterole" class="btn btn-secondary"><i class="fas fa-plus"></i></a>  
   </div> 
   <br>
<table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          
                      </th>
                      <th style="width: 10%">
                          ID
                      </th>
                      <th style="width: 20%">
                          CODE
                      </th>
                      <th style="width: 20%">
                          NAME
                      </th>
                                            
                      <th style="width: 250%">
                      </th>
                  </tr>
              </thead>
              <tbody>
              <?php foreach($roles as $role):?>
                 
                 <tr>
                      <td>
                          
                      </td>
                      <td>
                          <a>
                          <?php echo $role->id;?>
                          </a>                          
                      </td>
                      <td>
                      <?php echo $role->code;?>
                      </td>
                      <td class="project_progress">
                      <?php echo $role->name;?>
                          
                      </td>
                      
                      
                      
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="<?=ROOT?>/role/modifierole?id=<?php echo $role->id;?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="<?=ROOT?>/role/supprimerrole?id=<?php echo $role->id;?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                 <?php endforeach;?>                                  
              </tbody>
          </table>
              </form>          
<?php $content=ob_get_clean();?>          
<?php include_once 'homeview.php';?>     