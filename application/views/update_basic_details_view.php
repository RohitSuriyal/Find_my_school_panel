<?php $this->load->view('common/header'); ?>



<div class="d-flex justify-content-center">
    <form id="basic_detail_form_update" class="my-5" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">
        <h3>basic_detail</h3>

        <div class="row p-4">
            <div class="col-md-6">
                <label for="heading" class="form-label bold libre">Name of the school</label>
                <input type="text" name="school_name_update" id="school_name_update" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="tags" name="school_type" class="form-label bold libre">Category</label>
                <select id="school_type_first_tab_update" name="school_type_first_tab_update" class="form-control" multiple>
                    <option>
                        school type
                    </option>
                    <option>
                        Day School
                    </option>
                    <option>
                        Boarding School
                    </option>
                    <option>
                        Day Boarding School
                    </option>
                    <option>
                        Play School
                    </option>

                </select>

            </div>
        </div>
        <div class="row p-4">
            <div class="col-md-6">
                <label for="heading" class="form-label bold libre">Class Offered</label>
                <input type="text" name="class_offer_update" id="class_offer_update" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="image" class="form-label bold libre">Board</label>
                <select name="board_update" id="board_update" type="" placeholder="enter your Board" class="form-control">
                    <option>Select your board</option>
                    <option value="CBSE">CBSE</option>
                    <option value="ICSE">ICSE</option>
                    <option value="IB">IB</option>
                    <option value="IGSCE">IGSCE</option>
                    <option value="State Board">State Board</option>

                </select>
            </div>
        </div>
        <div class="row p-4 mx-2">
            <label for="image" class="form-label bold libre">Student faculty ration</label>
            <input name="student_faculty_ratio_update" type="" placeholder="student faculty ratio" class="form-control" id="student_faculty_ratio_update">



        </div>



        <div class="row p-4">
            <div class="col-md-12">
                <label for="tags" class="form-label bold libre">Tags</label>
                <select id="tags_school_update" name="tags_school_update" class="form-control" multiple>


                </select>
            </div>
        </div>
        <div class="row p-4">
            <div class="col-md-12">
                <label for="tags" class="form-label bold libre">Image</label>
                <input type="file" class="form-control" id="image_basic_detail_update" name="image_basic_detail_update">
                <div id="image_update">

                </div>
            </div>
        </div>
        <div class="row p-4">

            <div class="col-md-6">
                <label for="city" class="form-label bold libre">State</label>
                <select id="india_state_update" name="india_state_update" class="form-control w-100">
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Puducherry">Puducherry</option>
                </select>

            </div>
            <div class="col-md-6">
                <label for="location" class="form-label bold libre">City</label>
                <input name="city_update" type="" placeholder="enter your Location" class="form-control" id="city_update">
            </div>


        </div>
        <div class="row p-4">
            <div class="col-md-12">
                <label for="address" class="form-label bold libre">Addresss</label>
                <input name="location_update" type="" placeholder="enter the address" class="form-control" id="location_update">


            </div>
        </div>


        <div class="d-flex justify-content-center">
            <button class="btn btn-success w-50 m-3">Submit</button>

        </div>


    </form>

</div>
<input type="hidden" value="" id="hiddeninput">


<?php $this->load->view("common/footer") ?>
<script>
    //id is coming of the schol on which basic detail is coming
    var update_id = <?php echo json_encode($id); ?>;

    //initilaizing schooltype select2
    $("#school_type_first_tab_update").select2();



    //this is the the tags that the basic detail school have
    $('#tags_school_update').select2({
        ajax: {
            url: "<?php echo base_url('Welcome/alltags') ?>",
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                var resultMap = {};

                // Iterate through each item in the data
                $.each(data, function(index, item) {
                    // Split the tags by comma and trim each tag
                    var tagsArray = item.tags.split(',').map(function(tag) {
                        return tag.trim();
                    });

                    // Iterate through each tag in the tagsArray
                    $.each(tagsArray, function(index, tag) {
                        // Ensure tag is not empty
                        if (tag !== "") {
                            // Use tag as key to avoid duplicates
                            resultMap[tag] = {
                                id: item.id,
                                text: tag
                            };
                        }
                    });
                });

                // Convert resultMap to array of objects
                var results = [];
                $.each(resultMap, function(key, value) {
                    results.push(value);
                });

                return {
                    results: results,
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
        templateResult: function(tag){
            // Display "Add this: term" in the dropdown
            if (tag.newTag) {
                return "No result found";
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
    });

    //this is the ajax run on loading the page
    $.ajax({
        url: "<?php echo base_url("Update_details_controller/getbasicdetail") ?>",
        method: "post",
        data: {
            id: update_id,
        },
        dataType: "json",
        success: function(data) {
            console.log(data[0]);
            $("#school_name_update").val(data[0].name);
            $("#image_update").append(`<img height="100px" src="data:image/jpeg;base64,${data[0].image}" alt="Image" />`);

            $("#hiddeninput").val(data[0].image);


            $("#india_state_update").val(data[0].state)
            $("#city_update").val(data[0].city);
            $("#location_update").val(data[0].address);


            var tag = data[0].tags;
            var tagsArray = tag.split(',').map(tag => tag.trim());

            // Add options to the select element
            tagsArray.forEach(function(tag) {
                if (tag) {
                    var option = new Option(tag, tag, true, true);
                    $("#tags_school_update").append(option);
                }
            });





            var tagsArray = tag.split(',').map(tag => tag.trim());
            // Set the value of Select2 and trigger change event
            $("#tags_school_update").val(tagsArray).trigger('change');

            // Set the value

            var school_type_new = data[0].school_type;
            var school_type_array = school_type_new.split(',').map(tag => tag.trim());

            // Assuming #school_type_first_tab_update is a select element
            $("#school_type_first_tab_update").val(school_type_array).trigger('change');

            $("#class_offer_update").val(data[0].class_offered);
            $("#board_update").val(data[0].board);
            $("#student_faculty_ratio_update").val(data[0].student_faculty_ratio);





        }






    })

    //send update information


    $(document).on("submit", "#basic_detail_form_update", function(e) {
        e.preventDefault();




        var selectedTags = $('#tags_school_update').select2('data');
        var selectedString = selectedTags.map(tag => tag.text.trim()).join(', ');

        var school_type = $('#school_type_first_tab_update').select2('data');
        var school_type_string = school_type.map(tag => tag.text.trim()).join(', ');




        var formdata = new FormData($(this)[0]);
        formdata.append('tags_school_update', selectedString);
        formdata.append('school_type_update', school_type_string);
        formdata.append('id', update_id);
        formdata.append('already_image', $("#hiddeninput").val());
        $.ajax({
            url: "<?php echo base_url('Update_details_controller/send_update_details'); ?>", // Fixed the 
            type: "POST", // Specify the type of request
            dataType: "json",
            data: formdata,
            processData: false, // Ensure this is false for FormData
            contentType: false,
            success: function(data) {
                if (data == "success") {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'data updated Successfully'
                    });
                    location.href = '<?php echo base_url('welcome/manage_school'); ?>';




                }






            }














        })



    })
</script>