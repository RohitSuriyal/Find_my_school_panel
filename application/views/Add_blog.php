<?php $this->load->view('common/header'); ?>

<div class="container d-flex justify-content-center bg-grey mt-4"
    style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.3);">
    <form id="add_form" style="width:60%!important">
        <div class="row p-4">
            <div class="col-md-6">
                <label for="heading" class="form-label bold libre">Main heading</label>
                <input type="text" required name="heading" id="heading" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="image" class="form-label bold libre">Image</label>
                <input required name="image" type="file" class="form-control" id="image">
            </div>
        </div>
        <div class="row p-4">
            <div class="col-12">
                <label for="editor1" class="form-label bold libre">Body</label>
                <textarea name="editor1" id="editor1" rows="10" cols="80"></textarea>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-md-6">
                <label for="tags" class="form-label bold libre">Tags</label>
                <select id="tags" name="tags" class="form-control" multiple="multiple"></select>
            </div>
            <div class="col-md-6">
                <label for="tags" class="form-label bold libre">Category</label>
                <select id="category" name="category" class="form-control">
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
                <input required name="date" type="date" class="form-control" id="date">
            </div>
            <div class="col-md-6">
                <label for="written_by" class="form-label bold libre">Written by</label>
                <input required name="written_by" type="text" class="form-control" id="written_by">
            </div>
        </div>
        <div class="row p-4">
            <div class="col-md-12">
                <label for="school class=" form-label bold libre">Select School</label>
                <select required name="school" type="school" class="form-control" id="school">
                    <option value="NA">NA</option>
                </select>
            </div>

        </div>
        <div class="d-flex justify-content-center mt-3">
            <button class="btn btn-primary w-50 bg-success libre">Submit</button>
        </div>
    </form>
</div>

<?php $this->load->view('common/footer'); ?>

<script>
// Initialization of the select2
$('#tags').select2({
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
            return "Add this: " + tag.text;
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

//for the dropdown list
$.ajax({

    url: "<?php echo base_url("Update_blog_controller/getallschoolname") ?>",
    method: "post",
    dataType: "json",
    success: function(data) {
        console.log(data);
        let selectElement = $("#school");

        data.forEach(function(school) {
            let option = $("<option></option>").text(school.name).val(school.id);
            selectElement.append(option);



        })
    }
})

// Ensure previously selected items are maintained
$('#tags').on('select2:select', function(e) {
    var data = e.params.data;
    if (data.newTag) {
        // Check if the tag already exists in the list
        var exists = false;
        $('#tags option').each(function() {
            if ($(this).val() === data.id) {
                exists = true;
                return false;
            }
        });

        // Add the new tag only if it doesn't already exist
        if (!exists) {
            var newOption = new Option(data.text, data.id, true, true);
            $('#tags').append(newOption).trigger('change');
        }
    }
});




// Add form submit
$(document).on("submit", "#add_form", function(event) {
    event.preventDefault();

    var selectedTags = $('#tags').select2('data');
    var selectedString = selectedTags.map(tag => tag.text).join(', ');

    var formdata = new FormData($(this)[0]);
    formdata.append('tags', selectedString);

    $.ajax({
        url: "<?php echo base_url('welcome/send_data') ?>",
        method: "post",
        processData: false,
        contentType: false,
        dataType: "json",
        data: formdata,
        success: function(data) {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Blog added successfully'
            });
            $("#add_form")[0].reset();
            CKEDITOR.instances.editor1.setData(''); // Clear CKEditor content
            $('#tags').val(null).trigger('change'); // Reset tags
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

<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script>
var editor = CKEDITOR.replace('editor1');
CKFinder.setupCKEditor(editor);

// Configure CKEditor to allow the class attribute for images
editor.on('insertElement', function(event) {
    var element = event.data; // Get the inserted element
    if (element.getName() == 'img') { // Check if the inserted element is an image
        element.addClass('img-custom'); // Add your custom class to the image
    }
});

CKEDITOR.on('instanceReady', function(ev) {
    ev.editor.on('paste', function(event) {
        // Access the clipboard data
        var clipboardData = event.data.dataTransfer;

        // Check if there's an image in the clipboard
        if (clipboardData && clipboardData.getFilesCount() > 0) {
            var file = clipboardData.getFile(0); // Get the first file (assuming it's an image)
            var reader = new FileReader();

            reader.onload = function(e) {
                var imgSrc = e.target.result;
                var imgElement = '<img src="' + imgSrc + '" class="img-custom">';

                // Insert the modified HTML into the editor
                ev.editor.insertHtml(imgElement);
            };

            reader.readAsDataURL(file); // Read the image file as data URL
            event.cancel(); // Cancel the default paste behavior
        }
    });
});
</script>