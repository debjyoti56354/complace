<?php include_once('common/config.php');
include_once('common/header.php');
include_once('common/company_side.php');?>
<html>
<head>

<script>
        tinymce.init({
         selector: "#description",
        themes: "modern",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | imageupload",
            setup: function(editor) {
                var inp = $('<input id="tinymce-uploader" type="file" name="pic" accept="image/*" style="display:none">');
                $(editor.getElement()).parent().append(inp);

                inp.on("change",function(){
                    var input = inp.get(0);
                    var file = input.files[0];
                    var fr = new FileReader();
                    fr.onload = function() {
                        var img = new Image();
                        img.src = fr.result;
                        editor.insertContent('<img src="'+img.src+'"/>');
                        inp.val('');
                    }
                    fr.readAsDataURL(file);
                });

                editor.addButton( 'imageupload', {
                    text:"Browse Image",
                    icon: false,
                    onclick: function(e) {
                        inp.trigger('click');
                    }
                });
            }

    });

    </script>

</head>
<body>
<section>
<section class="wrapper">
<div class="container">
<div class="service-head" style="margin:30px">
			<h3>Post Job's</h3>
<div class="col-md-9" style="margin:150px">
 <!-- form start -->
                        <form role="form" action="form_company_jobs_upload.php" method="post"
                                  enctype="multipart/form-data">
                            
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="title" class="form-control" id="Title" value="" placeholder="Enter Title">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputFile">Company Name</label>
                                    <input type="text" name="cpn" class="form-control" id="exampleInputFile">
                                </div>
								  <div class="form-group">
                                    <label for="exampleInputFile">Criteria</label>
                                    <input type="text" name="criteria" class="form-control" id="exampleInputFile">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea class="form-control" id="description" name="description"
                                              placeholder="Enter only 500 character"
                                              rows="5">
								    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Select Branch</label>
                                    <input type="text" name="branch_type" class="form-control" id="exampleInputFile">
                                </div>  
								<div class="form-group">
                                    <label for="exampleInputFile">Specialization</label>
                                    <input type="text" name="specialization" class="form-control" id="exampleInputFile">
                                </div>
							
                            </div>
                            <!-- /.box-body -->
                            <center><div class="box-footer">
                                
                                    <!--<input type="submit" name="cancel_submit" class="btn btn-danger" value="Cancel"/>-->
                                
                                    <input type="submit" class="btn btn-primary" value="Save Details"/>
                                
                            </div></center>
                        </form>
							</div>
						</div>
						</div>
					</div>
					</div>		
			</div>
		</div>
	</div>

</div>
</section>
</section>
</body>


<?php include_once('common/footer.php')?>