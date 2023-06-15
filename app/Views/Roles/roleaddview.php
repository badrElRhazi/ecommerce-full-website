<?php
ob_start();
?>
<form action="ajouterole" method="post">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">General</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <div class="form-group">
                <div class="form-group">
                  <label for="inputName">Code</label>
                  <input type="text" id="inputName" class="form-control" name="code" >
                </div>
                <div class="form-group">
                  <label for="inputName">Name</label>
                  <input type="text" id="inputName" class="form-control"name="name" >
                </div>
               <div class="row">
          <div class="col-12">
            <a href="#" class="btn btn-secondary">Cancel</a>
            <input type="submit" value="Add Role" class="btn btn-success float-right" name="send">
          </div>
        </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
           
              <div class="card-body">               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>  
        </form>
<?php $content=ob_get_clean();?>
<?php include_once 'homeview.php';?> 