<?php
ob_start();
?>
<form action="addproduct" method="post" enctype="multipart/form-data">
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
                  <label for="inputName">Name</label>
                  <input type="text" id="inputName" class="form-control" name="name" >
                </div>
                <div class="form-group">
                  <label for="inputName">short_description</label>
                  <input type="text" id="inputName" class="form-control"name="short_description" >
                </div>
                <div class="form-group">
                  <label for="inputName">description</label>
                  <input type="text" id="inputName" class="form-control" name="description" >
                </div>
                <div class="form-group">
                  <label for="inputName">price</label>
                  <input type="text" id="inputName" class="form-control" name="price" >
                </div>
                <div class="form-group">
                  <label for="inputName">category_id</label>
                  <input  name="category_id" id="category_id"class="form-control" >                           
                </div> 
                <div class="form-group">
                  <label for="inputName">pro_pic</label>
                  <input  name="pro_pic" type="file" id="pro_pic"class="form-control" >                           
                </div> 
                         
                <div class="row">
          <div class="col-12">
            <a href="#" class="btn btn-secondary">Cancel</a>
            <input type="submit" value="ADD PRODUCT" class="btn btn-success float-right" name="send">
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