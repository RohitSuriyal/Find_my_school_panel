<?php $this->load->view('common/header'); ?>

<div class="container  bg-grey mt-4" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.3);">
     
    
    <div class="table-responsive">
        <br />
        <table id="practice" class="table table-bordered table-striped">
            <thead>
                <tr>



                    <th width="10%">School Name</th>
                    <th width="10%">image</th>
                    <th width="10%">state</th>
                    <th width="10">city</th>
                    <th width="10%">Basic details</th>
                    <th width="10%">Overview</th>
                    <th width="10%">Fee Structure</th>
                    <th width="10%">Eligibility</th>
                    <th width="10%">School information</th>
                    <th width="10%">Gallery</th>











                    <!-- <th width="35%">Pasword</th>   -->

                </tr>
            </thead>
        </table>
    </div>

</div>




<?php $this->load->view("common/footer") ?>

<script>
    
    $("#practice").DataTable({

        "processing": true,
        "serverSide": true,
        "order": [],

        "ajax": {
            url: "<?php echo base_url("Welcome/table")   ?>",
            type: "POST",

        },
        "columnDefs": [{

            "orderable": false,
            "targets": [],


        }, ],


    })

    
</script>






