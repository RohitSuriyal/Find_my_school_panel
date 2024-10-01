<?php $this->load->view('common/header'); ?>

<div class="container d-flex  bg-grey mt-4" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.3);">

  
    <div class="table-responsive w-100">
        <br />
        <table id="practice" class="table table-bordered table-striped " >
            <thead>
                <tr>



                    <th width="40%">Title</th>
                    <th width="20%">View</th>
                    <th width="20%">Update</th>
                    <th width="20%"> Delete</th>


                  










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
            url: "<?php echo base_url("Welcome/table_blog")   ?>",
            type: "POST",

        },
        "columnDefs": [{

            "orderable": false,
            "targets": [],


        }, ],


    })
   


    
</script>






