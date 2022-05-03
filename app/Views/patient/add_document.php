<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-default thumbnail">

      <!-- Heading -->
      <div class="panel-heading">
        <div class="btn-group">
          <a class="btn btn-success" href="<?php echo base_url("patient/document") ?>"> <i class="fa fa-list"></i> Document List</a> 
        </div>
      </div>

      <!-- Form Body -->
      <div class="panel-body">
        <div class="row">
          <div id="output" class="hide alert"></div>
          <div class="col-md-9 col-sm-12">
            <form action="/patient/document_upload" method="post" enctype="multipart/form-data">
              <?= csrf_field() ?>

              <div class="form-group row">
                <label for="patient_id" class="col-xs-3 col-form-label">Patient Code<i class="text-danger">*</i></label>
                <div class="col-xs-9">
                  <input name="patient_id"  type="text" class="form-control" id="patient_id" placeholder="" value="<?= $uri ?>">
                </div>
              </div>

              <div class="form-group row">
                <label for="hidden_attach_file" class="col-xs-3 col-form-label"> Attach File<i class="text-danger">*</i></label>
                <div class="col-xs-9">
                  <input type="file" name="hidden_attach_file" id="attach_file">
                </div>
              </div>

              <div class="form-group row">
                <label for="category" class="col-xs-3 col-form-label"> Category<i class="text-danger">*</i></label>
                <div class="col-xs-9">
                  <input type="text" name="category" class="form-control"  placeholder="category" >
                </div>
              </div> 

              <div class="form-group row">
                <label for="description" class="col-xs-3 col-form-label"> Description</label>
                <div class="col-xs-9">
                  <textarea name="description" class="form-control tinymce"  placeholder="Description"  rows="7"></textarea>
                </div>
              </div> 

              <div class="form-group row">
                <div class="col-sm-offset-3 col-sm-6">
                  <div class="ui buttons">
                    <button type="reset" class="ui button"> Reset</button>
                    <div class="or"></div>
                    <button type="submit" class="ui positive button"> Send</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>