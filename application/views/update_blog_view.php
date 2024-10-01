<?php $this->load->view('common/header'); ?>
<div class="container  bg-grey mt-4 d-flex justify-content-center" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.3);">
    <form id="add_form_update" style="width:60%!important">
        <div class="row p-4">
            <div class="col-md-6">
                <label for="heading" class="form-label bold libre">Main heading</label>
                <input type="text" required name="heading_update" id="heading_update" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="image" class="form-label bold libre">Image</label>
                <input  name="image_update" type="file" class="form-control" id="image_update">
                <span id="update_image"></span>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-12">
                <label for="editor1" class="form-label bold libre">Body</label>
                <textarea name="editor1_update" id="editor1_update" rows="10" cols="80"></textarea>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-md-6">
                <label for="tags" class="form-label bold libre">Tags</label>
                <select id="tags_update" name="tags_update" class="form-control" multiple="multiple"></select>
            </div>
            <div class="col-md-6">
                <label for="tags" class="form-label bold libre">Category</label>
                <select id="category_update" name="category_update" class="form-control">
                    <option selected>Slect category</option>
                    <option>Education</option>
                    <option>Technology</option>
                    <option>School</option>
                    <option>None</option>



                </select>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-md-6">
                <label for="date" class="form-label bold libre">Date</label>
                <input required name="date_update" type="date" class="form-control" id="date_update">
            </div>
            <div class="col-md-6">
                <label for="written_by" class="form-label bold libre">Written by</label>
                <input required name="written_by_update" type="text" class="form-control" id="written_by_upadte">
            </div>
        </div>
        <div class="row p-4">
            <div class="col-md-12">
                <label for="school class=" form-label bold libre">Select School</label>
                <select required name="school_update" type="school" class="form-control" id="school_update">
                    <option value="NA">NA</option>
                </select>
            </div>

        </div>
        <div class="d-flex justify-content-center mt-3">
            <button class="btn btn-primary w-50 bg-success libre">Submit</button>
        </div>
    </form>





    <div>







        <script>
            var blog_id = <?php echo json_encode($id); ?>;
            console.log(blog_id);
            //foor the school name drop down
            $.ajax({

                url: "<?php echo base_url("Update_blog_controller/getallschoolname") ?>",
                method: "post",
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    let selectElement = $("#school_update");

                    data.forEach(function(school) {
                        let option = $("<option></option>").text(school.name).val(school.id);
                        selectElement.append(option);



                    })
                }
            })






            //this is for the tags
            $('#tags_update').select2({
                ajax: {
                    url: "<?php echo base_url('Welcome/alltags') ?>",
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        // Use an array to store unique tags
                        var results = [];

                        // Iterate through each item in the data
                        data.forEach(function(item) {
                            // Split the tags by comma and trim each tag
                            item.tags.split(',').forEach(function(tag) {
                                tag = tag.trim();
                                if (tag !== "" && !results.some(e => e.id === tag)) {
                                    results.push({
                                        id: tag,
                                        text: tag
                                    });
                                }
                            });
                        });

                        return {
                            results: results
                        };
                    },
                    cache: true
                },
                placeholder: 'Search or select a tag',
                minimumInputLength: 0,
                tags: true, // Enable tag creation
                createTag: function(params) {
                    var term = $.trim(params.term);
                    if (term === '') {
                        return null;
                    }
                    return {
                        id: term,
                        text: term,
                        newTag: true // Add additional parameters
                    };
                },
                templateResult: function(tag) {
                    // Display "Add this: term" in the dropdown
                    if (tag.newTag) {
                        return "Add " + tag.text;
                    }
                    return tag.text;
                },
                language: {
                    searching: function() {
                        return 'Searching...';
                    }
                },
                escapeMarkup: function(markup) {
                    return markup;
                },
                width: 'resolve', // Adjust width if necessary
            });
            $.ajax({
                url: "<?php echo base_url("Update_blog_controller/fetch_blog_detail") ?>",
                method: "post",
                dataType: "json",
                data: {
                    id: blog_id,
                },
                success: function(data) {
                    console.log(data[0]);
                    $("#heading_update").val(data[0].heading);
                    $("#update_image").append(`<img id="dynamicImage" height="200px" width="350px"  src="${data[0].image}"></img>`)
                    if (CKEDITOR.instances['editor1_update']) {
                        CKEDITOR.instances['editor1_update'].setData(data[0].body);
                    }

                    //for selecting the data
                    $('#school_update').val(data[0].School);

                    var tag = data[0].tags;
                    var tagsArray = tag.split(',').map(tag => tag.trim());

                    // Add options to the select element
                    tagsArray.forEach(function(tag) {
                        if (tag) {
                            var option = new Option(tag, tag, true, true);
                            $("#tags_update").append(option);
                        }
                    });
                    $("#category_update").val(data[0].category);
                    $("#date_update").val(data[0].date);
                    $("#written_by_upadte").val(data[0].witten_by)




                }






            })


            var editor = CKEDITOR.replace('editor1_update');
            CKFinder.setupCKEditor(editor);


            //for the form submit processs update
            $(document).on("submit", "#add_form_update", function(event) {
                event.preventDefault();

                var selectedTags = $('#tags_update').select2('data');
                var selectedString = selectedTags.map(tag => tag.text).join(', ');

                var formdata = new FormData($(this)[0]);
                var update_id = <?php echo json_encode($id); ?>;
                var school = $("#school_update").val();



                console.log(school);
                formdata.append('tags', selectedString);
                formdata.append('id', update_id);
                var image;
                if($("#image_update").val()==""){
                  image=$("#dynamicImage").attr("src");
                 
                }
                formdata.append("image_same",image)

                $.ajax({
                    url: "<?php echo base_url('Update_blog_controller/send_data') ?>",
                    method: "post",
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    data: formdata,
                    success: function(data) {
                        window.location.href = "<?php echo base_url('welcome/manageblog'); ?>";
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Blog added successfully'
                        });
                        $("#add_form_update")[0].reset();
                        CKEDITOR.instances.editor1_update.setData(''); // Clear CKEditor content
                        $('#tags_update').val(null).trigger('change'); // Reset tags

                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText); // Log the error to the console
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'An error occurred while adding the blog post'
                        });
                    }
                });
            });
        </script>
        <?php $this->load->view("common/footer") ?>