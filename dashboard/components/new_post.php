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

</style>

<section class="row content">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <!-- form start -->
            <form role="form" method="POST" autocomplete="off" enctype="multipart/form-data">
                <div class="box-head">
                <?php new_post(); ?>
                </div>
                <div class="box-body">
                <div class="form-group col-md-8">
                    <label for="title">Title</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" id="title" name="title" class="form-control" placeholder="Post title " required>
                    </div>
                </div>

                <div class="form-group">
                    <!-- <label for="about">About</label> -->
                    <div class="input-group  col-md-12">
                        <textarea id="editor1" name="content" class="form-control">Post content</textarea>
                        <!-- <textarea  type="text" id="about" name="about" class="form-control" placeholder="Brief description of site" required></textarea> -->
                    </div>
                </div>
                    <!-- /.box -->
                <div class="input-group col-md-8 image-preview">
                    <label for="">Post banner</label>
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
                            <input type="file" accept="image/png, image/jpeg, image/gif" name="post_img" required/> <!-- This sends image on POST/GET -->
                        </div>
                    </span>
                </div><!-- /input-group image-preview [TO HERE]--> 

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                <button type="submit" name="btn_add_post" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.box -->

    </div>
</section>
