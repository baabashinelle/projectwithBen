<style>
.image-preview-input {
    position: relative;
	overflow: hidden;
	margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}

textarea{
  resize: vertical;
}
</style>

<section class="content">
<div class="col-md-6">
<!-- general form elements -->
<div class="box box-primary">
  <!-- form start -->
  <form role="form" method="POST" autocomplete="off">
    <div class="box-head">
    <?php new_site(); ?>
    </div>
    <div class="box-body">
      <div class="form-group">
        <label for="name">Name</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" id="name" name="name" class="form-control" placeholder="eg.: Boti Water falls " required>
        </div>
      </div>
      <div class="form-group">
        <label for="location">Location</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="location" id="location" name="location" class="form-control" placeholder="eg.: Volta Region" required>
        </div>
      </div>
      <div class="form-group">
        <label for="about">About</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
            <textarea  type="text" id="about" name="about" class="form-control" placeholder="Brief description of site" required></textarea>
        </div>
      </div>
      <div class="input-group image-preview">
          <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- didn't give a name cos doesn't send on POST/GET -->
          <span class="input-group-btn">
              <!-- image-preview-clear button -->
              <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                  <span class="glyphicon glyphicon-remove"></span> Clear
              </button>
              <!-- image-preview-input -->
              <div class="btn btn-default image-preview-input">
                  <span class="glyphicon glyphicon-folder-open"></span>
                  <span class="image-preview-input-title">Browse</span>
                  <input type="file" accept="image/png, image/jpeg, image/gif" name="site_img" required/> <!-- This sends image on POST/GET -->
              </div>
          </span>
      </div><!-- /input-group image-preview [TO HERE]--> 

    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" name="btn_add_site" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<!-- /.box -->

</div>
</section>

