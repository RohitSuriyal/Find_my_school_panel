<?php $this->load->view('common/header'); ?>
<div class="d-flex justify-content-center">
    <form id="overview_form_update" class="my-5" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">
        <h1>Overview</h1>
        <div class="row p-4">
            <div class="col-md-12">
                <label for="student-faculty-ratio" class="form-label bold libre">Content</label>
                <textarea id="content_update" class="form-control" name="content_update" rows="4" placeholder="Enter the Content......"></textarea>

            </div>
            <div class="row p-4">
                <div class="col-md-6">
                    <label for="heading" class="form-label bold libre">Ownership</label>
                    <select type="text" name="ownership_update" id="ownership_update" id="Ownership" class="form-control">
                        <option>Private</option>
                        <option>Private Aided</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label bold libre">Year of establishment</label>
                    <input name="establishment_update" id="establishment_update" type="" class="form-control" id="year_of_establishment">
                </div>
            </div>
            <div class="row p-4">
                <div class="col-md-6">
                    <label for="heading" class="form-label bold libre">Campus</label>
                    <input type="text" name="campus_update" id="campus_update" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label bold libre">Board</label>
                    <input name="board_update" type="" placeholder="enter your board" class="form-control" id="board_update">
                </div>
            </div>
            <div class="row p-4">
                <div class="col-md-6">
                    <label for="heading" class="form-label bold libre">Co-Ed Status</label>
                    <input type="text" name="Co_ed_status_update" id="Co_ed_status_update" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label bold libre">Campus type</label>
                    <input name="campus_type_update" type="" class="form-control" id="campus_type_update">
                </div>
            </div>
            <div class="row p-4">
                <div class="col-md-6">
                    <label for="heading" class="form-label bold libre">Language of interaction</label>
                    <input type="text" name="interact_language_update" id="interact_language_update" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label bold libre">Academic session</label>
                    <input name="session_update" type="" class="form-control" id="session_update">
                </div>
            </div>


            <div class="row p-4">
                <div class="col-md-12">
                    <label for="school_type" class="form-label bold libre">School Format</label>
                    <select name="school_format_update" id="school_format_update" class="form-control w-100" multiple="multiple">
                        <option>Day School</option>
                        <option>Boarding School</option>
                        <option>Day Boarding School</option>
                        <option>Play School</option>

                    </select>
                </div>

            </div>



        </div>
        <div class="  d-flex justify-content-center">
            <button class="btn btn-success w-50 m-3">Submit</button>

        </div>
    </form>
</div>






<?php $this->load->view("common/footer") ?>
<script>
    const overview_id = <?php echo json_encode($id) ?>;



    $('#school_format_update').select2({
        placeholder: 'Select school format',
        allowClear: true,
        width: "100%",
    });
    $.ajax({
        url: "<?php echo base_url("Update_details_controller/update_overview_data") ?>",
        method: "post",

        data: {
            id: overview_id,
        },
        dataType: "json",
        success: function(data){
            console.log(data);


            $("#content_update").val(data[0].content);
            $("#ownership_update").val(data[0].ownership);
            $("#establishment_update").val(data[0].establishment);
            $("#campus_update").val(data[0].campus);
            $("#Co_ed_status_update").val(data[0].Co_ed_status);
            $("#campus_type_update").val(data[0].campus_type);
            $("#interact_language_update").val(data[0].interact_language);
            $("#board_update").val(data[0].Board);
            $("#session_update").val(data[0].session);
            var school_type_new = data[0].school_format;
            var school_type_array = school_type_new.split(',').map(tag => tag.trim());

            // Assuming #school_type_first_tab_update is a select element
            $("#school_format_update").val(school_type_array).trigger('change');

             




        }








    })
     $(document).on("submit","#overview_form_update",function(e){
        e.preventDefault();
        const overview_id=<?php echo json_encode($id)?>;
        var formdata = new FormData($(this)[0]);
       
        var school_type = $('#school_format_update').select2('data');
        var school_type_string = school_type.map(tag => tag.text.trim()).join(',');
        formdata.append("school_type",school_type_string);
        formdata.append("id",overview_id);

        $.ajax({
            url: "<?php echo base_url('Update_details_controller/send_update_overview_details'); ?>", // Fixed the 
            type: "POST", //Specify the type of request
            dataType: "json",
            data: formdata,
            processData: false, //Ensure this is false for FormData
            contentType: false,
            success: function(data){
                if (data == "success") {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'data updated Successfully'
                    });
                    // location.href = '<?php echo base_url('welcome/manage_school'); ?>';




                }






            }














        })



       




    })
    
</script>