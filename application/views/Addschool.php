<?php $this->load->view('common/header'); ?>
<div class="container  bg-grey mt-4" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.3);">

    <div class="row">
        <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
            <div class="row w-100">
                <div class="col-md-2">
                    <li class="nav-item" role="presentation col-md-4">
                        <button class="nav-link active w-100" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Basic Detail</button>
                    </li>
                </div>
                <div class="col-md-2">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link w-100" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">overview</button>
                    </li>
                </div>
                <div class="col-md-2">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link w-100" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Fee Structure</button>
                    </li>
                </div>
                <div class="col-md-2">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link w-100" id="pills-fee-tab" data-bs-toggle="pill" data-bs-target="#pills-fee" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Eligibility and criteria</button>
                    </li>
                </div>
                <div class="col-md-2">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link w-100" id="pills-school-information" data-bs-toggle="pill" data-bs-target="#pills-school_information" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">School Information</button>
                    </li>
                </div>
                <div class="col-md-2">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link w-100" id="pills-school-gallery" data-bs-toggle="pill" data-bs-target="#pills-school_gallery" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Gallery</button>
                    </li>
                </div>









            </div>



        </ul>

    </div>
    <div class="d-flex justify-content-end">
        <button id="complete_Submission" class="btn btn-success px-2 py-2">Complete Submission</button>

    </div>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="d-flex justify-content-center">
                <form id="basic_detail_form" class="my-5" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">
                    <h3>basic_detail</h3>

                    <div class="row p-4">
                        <div class="col-md-6">
                            <label for="heading" class="form-label bold libre">Name of the school</label>
                            <input type="text" name="school_name" id="school_name" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="tags" name="school_type" class="form-label bold libre">Category</label>
                            <select id="school_type_first_tab" name="school_type" class="form-control" multiple>
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
                            <input type="text" name="class_offerd" id="school_name" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="image" class="form-label bold libre">Board</label>
                            <select name="board" type="" placeholder="enter your Board" class="form-control" id="board">
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
                        <input name="student_faculty_ratio" type="" placeholder="student faculty ratio" class="form-control" id="student_faculty_ratio">



                    </div>



                    <div class="row p-4">
                        <div class="col-md-12">
                            <label for="tags" class="form-label bold libre">Tags</label>
                            <select id="tags_school" name="tags_school" class="form-control" multiple>


                            </select>
                        </div>
                    </div>
                    <div class="row p-4">
                        <div class="col-md-12">
                            <label for="tags" class="form-label bold libre">Image</label>
                            <input type="file" class="form-control" name="image_basic_detail">

                        </div>
                    </div>
                    <div class="row p-4">

                        <div class="col-md-6">
                            <label for="city" class="form-label bold libre">State</label>
                            <select id="india-states" name="state" class="form-control w-100">
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
                            <input name="city" type="" placeholder="enter your Location" class="form-control" id="location">
                        </div>


                    </div>
                    <div class="row p-4">
                        <div class="col-md-12">
                            <label for="address" class="form-label bold libre">Addresss</label>
                            <input name="address" type="" placeholder="enter the address" class="form-control" id="location">


                        </div>
                    </div>


                    <div class="d-flex justify-content-center">
                        <button class="btn btn-success w-50 m-3">Submit</button>

                    </div>


                </form>

            </div>

        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="d-flex justify-content-center">
                <form id="overview_form" class="my-5" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">
                    <h1>Overview</h1>
                    <div class="row p-4">
                        <div class="col-md-12">
                            <label for="student-faculty-ratio" class="form-label bold libre">Content</label>
                            <textarea id="student-faculty-ratio" class="form-control" name="content" rows="4" placeholder="Enter the Content......"></textarea>

                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="heading" class="form-label bold libre">Ownership</label>
                                <select type="text" name="ownership" id="Ownership" class="form-control">
                                    <option>Private</option>
                                    <option>Private Aided</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="image" class="form-label bold libre">Year of establishment</label>
                                <input name="establishment" type="" class="form-control" id="year_of_establishment">
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="heading" class="form-label bold libre">Campus</label>
                                <input type="text" name="campus" id="campus" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="image" class="form-label bold libre">Board</label>
                                <input name="board" type="" placeholder="enter your board" class="form-control" id="board">
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="heading" class="form-label bold libre">Co-Ed Status</label>
                                <input type="text" name="Co_ed_status" id="Co-Ed Status" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="image" class="form-label bold libre">Campus type</label>
                                <input name="campus_type" type="" class="form-control" id="campus type">
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="heading" class="form-label bold libre">Language of interaction</label>
                                <input type="text" name="interact_language" id="language_of_interaction" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="image" class="form-label bold libre">Academic session</label>
                                <input name="session" type="" class="form-control" id="academic_session">
                            </div>
                        </div>


                        <div class="row p-4">
                            <div class="col-md-12">
                                <label for="school_type" class="form-label bold libre">School Format</label>
                                <select name="school_format" id="school_format" class="form-control w-100" multiple="multiple">
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

        </div>
        <!-- //from her fee criteria statred -->
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="row d-flex justify-content-center w-50  mx-auto p-3" style="width:60%!important;box-shadow: 0 0 10px rgba(0,0,0,0.1);">

                <h3>Select Class</h3>
                <select class="form-control" id="classSelect">
                    <option value="Prenursery" selected>Pre-Nursery</option>
                    <option value="Nursery">Nursery</option>

                    <option value="LKG">LKG</option>
                    <option value="UKG">UKG</option>
                    <option value="I">Grade 1</option>
                    <option value="II">Grade 2</option>
                    <option value="III">grade 3</option>
                    <option value="IV">grade 4</option>
                    <option value="V">grdae 5</option>
                    <option value="VI">grade 6</option>
                    <option value="VII">grade 7</option>
                    <option value="VIII">grade 8</option>
                    <option value="IX">grade 9</option>
                    <option value="X">grade 10</option>
                    <option value="XI">grade 11</option>
                    <option value="XII">grade 12</option>



                </select>





            </div>

            <div class="tab-content">
                <div id="tab-I" class="tab">
                    <div class="d-flex justify-content-center">
                        <form class="my-5 formsubmitfee" id="1" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">
                            <h1>Class I</h1>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre ">Registration Fees</label>
                                    <input type="number" required name="Registrationfee" id="Registrationfee" class="form-control fee1">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency1" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Admission Fees</label>
                                    <input type="number" required name="Admissionfee" id="Admissionfee" class="form-control fee1">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency1" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>NA</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Tuitions Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee1">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency1" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Security Fees (Refundable)</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee1">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency1" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>NA</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Annual Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee1">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency1" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Transportation Fees</label>
                                    <input type="text" required name="tutionfee" id="tutionfee" class="form-control fee1">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency1" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>NA</option>




                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Others Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee1">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select placeholder="Enter the frequency" class="form-control frequency1" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>NA</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Total Cost</label>
                                    <input type="number" placeholder="enter total cost" required name="totalcost" id="totalcost" class="form-control fee1">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency1">
                                        <option value="onetime" selected>Onetime</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Monthly Cost</label>
                                    <input type="number" placeholder="enter monthly cost" required name="totalcost" id="totalcost" class="form-control fee1">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency1">
                                        <option selected>Monthly</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success m-3 w-50">Submit</button>
                            </div>



                        </form>


                    </div>




                </div>
                <div id="tab-II" class="tab">
                    <div class="d-flex justify-content-center">
                        <form class="my-5 formsubmitfee" id="2" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">
                            <h1>Class II</h1>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Registration Fees</label>
                                    <input type="number" required name="Registrationfee" id="Registrationfee" class="form-control fee2">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency2" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Admission Fees</label>
                                    <input type="number" required name="Admissionfee" id="Admissionfee" class="form-control fee2">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency2" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Tuitions Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee2">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency2" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Security Fees (Refundable)</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee2">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency2" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>



                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Annual Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee2">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency2" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Transportation Fees</label>
                                    <input type="text" required name="tutionfee" id="tutionfee" class="form-control fee2">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency2" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>

                                        <option>NA</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Others Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee2">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency2" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Total Cost</label>
                                    <input type="number" placeholder="enter total cost" required name="totalcost" id="totalcost" class="form-control fee2">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency2">
                                        <option value="onetime" selected>onetime</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Monthly Cost</label>
                                    <input type="number" placeholder="enter monthly cost" required name="totalcost" id="totalcost" class="form-control fee2">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency2">
                                        <option selected>Monthly</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success m-3 w-50">Submit</button>
                            </div>



                        </form>


                    </div>


                </div>
                <div id="tab-III" class="tab">
                    <div class="d-flex justify-content-center">
                        <form class="my-5 formsubmitfee" id="3" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">
                            <h1>Class III</h1>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Registration Fees</label>
                                    <input type="number" required name="Registrationfee" id="Registrationfee" class="form-control fee3">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency3" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Admission Fees</label>
                                    <input type="number" required name="Admissionfee" id="Admissionfee" class="form-control fee3">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency3" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Tuitions Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee3">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency3" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Security Fees (Refundable)</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee3">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency3" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Annual Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee3">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency3" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Transportation Fees</label>
                                    <input type="text" required name="tutionfee" id="tutionfee" class="form-control fee3">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency3" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Others Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee3">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency3" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Total Cost</label>
                                    <input type="number" placeholder="enter total cost" required name="totalcost" id="totalcost" class="form-control fee3">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency3">
                                        <option value="onetime" selected>onetime</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Monthly Cost</label>
                                    <input type="number" placeholder="enter monthly cost" required name="totalcost" id="totalcost" class="form-control fee3">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency3">
                                        <option selected>Monthly</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success m-3 w-50">Submit</button>
                            </div>



                        </form>
                    </div>

                </div>
                <div id="tab-IV" class="tab">
                    <div class="d-flex justify-content-center">
                        <form class="my-5 formsubmitfee" id="4" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">
                            <h1>Class IV</h1>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Registration Fees</label>
                                    <input type="number" required name="Registrationfee" id="Registrationfee" class="form-control fee4">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency4" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>
                                        <option>NA</option>



                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Admission Fees</label>
                                    <input type="number" required name="Admissionfee" id="Admissionfee" class="form-control fee4">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency4" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Tuitions Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee4">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency4" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Security Fees (Refundable)</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee4">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency4" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Annual Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee4">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency4" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Transportation Fees</label>
                                    <input type="text" required name="tutionfee" id="tutionfee" class="form-control fee4">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency4" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Others Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee4">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency4" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Total Cost</label>
                                    <input type="number" placeholder="enter total cost" required name="totalcost" id="totalcost" class="form-control fee4">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency4">
                                        <option value="onetime" selected>onetime</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Monthly Cost</label>
                                    <input type="number" placeholder="enter monthly cost" required name="totalcost" id="totalcost" class="form-control fee4">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency4">
                                        <option selected>Monthly</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success m-3 w-50">Submit</button>
                            </div>



                        </form>

                    </div>
                </div>
                <div id="tab-V" class="tab">
                    <div class="d-flex justify-content-center">
                        <form class="my-5 formsubmitfee" id="5" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">
                            <h1>Class V</h1>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Registration Fees</label>
                                    <input type="number" required name="Registrationfee" id="Registrationfee" class="form-control fee5">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency5" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Admission Fees</label>
                                    <input type="number" required name="Admissionfee" id="Admissionfee" class="form-control fee5">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency5" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Tuitions Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee5">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency5" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Security Fees (Refundable)</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee5">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency5" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Annual Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee5">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency5" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Transportation Fees</label>
                                    <input type="text" required name="tutionfee" id="tutionfee" class="form-control  fee5">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency5" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Others Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control  fee5">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency5" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Total Cost</label>
                                    <input type="number" placeholder="enter total cost" required name="totalcost" id="totalcost" class="form-control fee5">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency5">
                                        <option value="onetime" selected>onetime</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Monthly Cost</label>
                                    <input type="number" placeholder="enter monthly cost" required name="totalcost" id="totalcost" class="form-control fee5">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency5">
                                        <option selected>Monthly</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success m-3 w-50">Submit</button>
                            </div>



                        </form>

                    </div>
                </div>
                <div id="tab-VI" class="tab">
                    <div class="d-flex justify-content-center">
                        <form class="my-5 formsubmitfee" id="6" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">
                            <h1>Class VI</h1>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Registration Fees</label>
                                    <input type="number" required name="Registrationfee" id="Registrationfee" class="form-control fee6">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency6" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Admission Fees</label>
                                    <input type="number" required name="Admissionfee" id="Admissionfee" class="form-control fee6">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency6" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Tuitions Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee6">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency6" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Security Fees (Refundable)</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee6">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency6" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Annual Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee6">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency6" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Transportation Fees</label>
                                    <input type="text" required name="tutionfee" id="tutionfee" class="form-control fee6">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency6" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Others Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee6">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency6" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Total Cost</label>
                                    <input type="number" placeholder="enter total cost" required name="totalcost" id="totalcost" class="form-control fee6">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency6">
                                        <option value="onetime" selected>onetime</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Monthly Cost</label>
                                    <input type="number" placeholder="enter monthly cost" required name="totalcost" id="totalcost" class="form-control fee6">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency6">
                                        <option selected>Monthly</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success m-3 w-50">Submit</button>
                            </div>



                        </form>

                    </div>
                </div>
                <div id="tab-VII" class="tab">
                    <div class="d-flex justify-content-center">
                        <form class="my-5 formsubmitfee" id="7" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">
                            <h1>Class VII</h1>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Registration Fees</label>
                                    <input type="number" required name="Registrationfee" id="Registrationfee" class="form-control fee7">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency7" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Admission Fees</label>
                                    <input type="number" required name="Admissionfee" id="Admissionfee" class="form-control fee7">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency7" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Tuitions Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee7">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency7" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Security Fees (Refundable)</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee7">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency7" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Annual Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee7">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency7" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Transportation Fees</label>
                                    <input type="text" required name="tutionfee" id="tutionfee" class="form-control fee7">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency7" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Others Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee7">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency7" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Total Cost</label>
                                    <input type="number" placeholder="enter total cost" required name="totalcost" id="totalcost" class="form-control fee7">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency7">
                                        <option value="onetime" selected>onetime</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Monthly Cost</label>
                                    <input type="number" placeholder="enter monthly cost" required name="totalcost" id="totalcost" class="form-control fee7">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency7">
                                        <option selected>Monthly</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success m-3 w-50">Submit</button>
                            </div>



                        </form>

                    </div>
                </div>
                <div id="tab-VIII" class="tab">
                    <div class="d-flex justify-content-center">
                        <form class="my-5 formsubmitfee" id="8" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">
                            <h1>Class VIII</h1>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Registration Fees</label>
                                    <input type="number" required name="Registrationfee" id="Registrationfee" class="form-control fee8">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency8" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Admission Fees</label>
                                    <input type="number" required name="Admissionfee" id="Admissionfee" class="form-control fee8">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency8" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Tuitions Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee8">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency8" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Security Fees (Refundable)</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee8">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency8" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Annual Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee8">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency8" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Transportation Fees</label>
                                    <input type="text" required name="tutionfee" id="tutionfee" class="form-control fee8">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency8" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Others Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee8">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency8" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Total Cost</label>
                                    <input type="number" placeholder="enter total cost" required name="totalcost" id="totalcost" class="form-control fee8">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency8">
                                        <option value="onetime" selected>onetime</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Monthly Cost</label>
                                    <input type="number" placeholder="enter monthly cost" required name="monthlycost" id="totalcost" class="form-control fee8">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency8">
                                        <option selected>Monthly</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success m-3 w-50">Submit</button>
                            </div>



                        </form>

                    </div>
                </div>
                <div id="tab-IX" class="tab">
                    <div class="d-flex justify-content-center">
                        <form class="my-5 formsubmitfee" id="9" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">
                            <h1>Class IX</h1>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Registration Fees</label>
                                    <input type="number" required name="Registrationfee" id="Registrationfee" class="form-control fee9">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency9" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Admission Fees</label>
                                    <input type="number" required name="Admissionfee" id="Admissionfee" class="form-control fee9">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency9" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Tuitions Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee9">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency9" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Security Fees (Refundable)</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee9">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency9" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Annual Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee9">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency9" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Transportation Fees</label>
                                    <input type="text" required name="tutionfee" id="tutionfee" class="form-control fee9">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency9" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Others Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee9">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency9" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Total Cost</label>
                                    <input type="number" placeholder="enter total cost" required name="totalcost" id="totalcost" class="form-control fee9">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency9">
                                        <option value="onetime" selected>Onetime</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Monthly Cost</label>
                                    <input type="number" placeholder="enter monthly cost" required name="totalcost" id="totalcost" class="form-control fee9">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency9">
                                        <option selected>Monthly</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success m-3 w-50">Submit</button>
                            </div>



                        </form>

                    </div>
                </div>
                <div id="tab-X" class="tab">
                    <div class="d-flex justify-content-center">
                        <form class="my-5 formsubmitfee" id="10" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">
                            <h1>Class X</h1>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Registration Fees</label>
                                    <input type="number" required name="Registrationfee" id="Registrationfee" class="form-control fee10">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency10" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Admission Fees</label>
                                    <input type="number" required name="Admissionfee" id="Admissionfee" class="form-control fee10">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency10" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Tuitions Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee10">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency10" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Security Fees (Refundable)</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee10">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency10" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Annual Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee10">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency10" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Transportation Fees</label>
                                    <input type="text" required name="tutionfee" id="tutionfee" class="form-control fee10">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency10" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Others Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee10">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency10" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Total Cost</label>
                                    <input type="number" placeholder="enter total cost" required name="totalcost" id="totalcost" class="form-control fee10">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency10">
                                        <option value="onetime" selected>Onetime</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Monthly Cost</label>
                                    <input type="number" placeholder="enter monthly cost" required name="totalcost" id="totalcost" class="form-control fee10">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency10">
                                        <option selected>Monthly</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success m-3 w-50">Submit</button>
                            </div>



                        </form>

                    </div>
                </div>
                <div id="tab-XI" class="tab">
                    <div class="d-flex justify-content-center">
                        <form class="my-5 formsubmitfee" id="11" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">
                            <h1>Class XI</h1>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Registration Fees</label>
                                    <input type="number" required name="Registrationfee" id="Registrationfee" class="form-control fee11">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency11" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Admission Fees</label>
                                    <input type="number" required name="Admissionfee" id="Admissionfee" class="form-control fee11">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency11" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Tuitions Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee11">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency11" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Security Fees (Refundable)</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee11">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency11" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Annual Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee11">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency11" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Transportation Fees</label>
                                    <input type="text" required name="tutionfee" id="tutionfee" class="form-control fee11">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency11" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Others Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee11">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency11" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Total Cost</label>
                                    <input type="number" placeholder="enter total cost" required name="totalcost" id="totalcost" class="form-control fee11">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency11">
                                        <option value="onetime" selected>Onetime</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Monthly Cost</label>
                                    <input type="number" placeholder="enter monthly cost" required name="totalcost" id="totalcost" class="form-control fee11">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency11">
                                        <option selected>Monthly</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success m-3 w-50">Submit</button>
                            </div>



                        </form>

                    </div>
                </div>
                <div id="tab-XII" class="tab">
                    <div class="d-flex justify-content-center">
                        <form id="12" class="my-5 formsubmitfee" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">
                            <h1>Class XII</h1>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Registration Fees</label>
                                    <input type="number" required name="Registrationfee" id="Registrationfee" class="form-control fee12">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency12" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Admission Fees</label>
                                    <input type="number" required name="Admissionfee" id="Admissionfee" class="form-control fee12">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency12" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Tuitions Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee12">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency12" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Security Fees (Refundable)</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee12">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency12" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Annual Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee12">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency12" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Transportation Fees</label>
                                    <input type="text" required name="tutionfee" id="tutionfee" class="form-control fee12">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency12" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Others Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee12">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency12" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Total Cost</label>
                                    <input type="number" placeholder="enter total cost" required name="totalcost" id="totalcost" class="form-control fee12">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency12">
                                        <option value="onetime" selected>onetime</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Monthly Cost</label>
                                    <input type="number" placeholder="enter monthly cost" required name="totalcost" id="totalcost" class="form-control fee12">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency12">
                                        <option selected>Monthly</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success m-3 w-50">Submit</button>
                            </div>



                        </form>

                    </div>
                </div>
                <div id="tab-Nursery" class="tab">
                    <div class="d-flex justify-content-center">
                        <form id="13" class="my-5 formsubmitfee" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">
                            <h1>Class Nursery</h1>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Registration Fees</label>
                                    <input type="number" required name="Registrationfee" id="Registrationfee" class="form-control fee13">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency13" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Admission Fees</label>
                                    <input type="number" required name="Admissionfee" id="Admissionfee" class="form-control fee13">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency13" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Tuitions Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee13">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency13" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Security Fees (Refundable)</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee13">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency13" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Annual Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee13">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency13" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>yearly</option>
                                        <option>Halfyearly</option>

                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Transportation Fees</label>
                                    <input type="text" required name="tutionfee" id="tutionfee" class="form-control fee13">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency13" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Others Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee13">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency13" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Total Cost</label>
                                    <input type="number" placeholder="enter total cost" required name="totalcost" id="totalcost" class="form-control fee13">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency13">
                                        <option value="o" selected>onetime</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Monthly Cost</label>
                                    <input type="number" placeholder="enter monthly cost" required name="totalcost" id="totalcost" class="form-control fee13">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency13">
                                        <option value="onetime" selected>Onetime</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success m-3 w-50">Submit</button>
                            </div>



                        </form>

                    </div>
                </div>
                <div id="tab-LKG" class="tab">
                    <div class="d-flex justify-content-center">
                        <form id="14" class="my-5 formsubmitfee" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">
                            <h1>Class LKG</h1>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Registration Fees</label>
                                    <input type="number" required name="Registrationfee" id="Registrationfee" class="form-control fee14">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency14" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Admission Fees</label>
                                    <input type="number" required name="Admissionfee" id="Admissionfee" class="form-control fee14">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency14" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Tuitions Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee14">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency14" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Security Fees (Refundable)</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee14">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency14" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Annual Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee14">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency14" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Transportation Fees</label>
                                    <input type="text" required name="tutionfee" id="tutionfee" class="form-control fee14">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency14" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>

                                        <option>NA</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Others Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee14">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency14" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Total Cost</label>
                                    <input type="number" placeholder="enter total cost" required name="totalcost" id="totalcost" class="form-control fee14">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency14">
                                        <option value="onetime" selected>onetime</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Monthly Cost</label>
                                    <input type="number" placeholder="enter monthly cost" required name="totalcost" id="totalcost" class="form-control fee14">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency14">
                                        <option selected>Monthly</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success m-3 w-50">Submit</button>
                            </div>



                        </form>

                    </div>
                </div>
                <div id="tab-UKG" class="tab">
                    <div class="d-flex justify-content-center">
                        <form id="15" class="my-5 formsubmitfee" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">
                            <h1>Class UKG</h1>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Registration Fees</label>
                                    <input type="number" required name="Registrationfee" id="Registrationfee" class="form-control fee15">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency15" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Admission Fees</label>
                                    <input type="number" required name="Admissionfee" id="Admissionfee" class="form-control fee15">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency15" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Tuitions Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee15">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency15" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Security Fees (Refundable)</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee15">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency15" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Annual Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee15">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency15" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Transportation Fees</label>
                                    <input type="text" required name="tutionfee" id="tutionfee" class="form-control fee15">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency15" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>

                                        <option>NA</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Others Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee15">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency15" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Total Cost</label>
                                    <input type="number" placeholder="enter total cost" required name="totalcost" id="totalcost" class="form-control fee15">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency15">
                                        <option value="onetime" selected>onetime</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Monthly Cost</label>
                                    <input type="number" placeholder="enter monthly cost" required name="totalcost" id="totalcost" class="form-control fee15">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency15">
                                        <option selected>Monthly</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success m-3 w-50">Submit</button>
                            </div>



                        </form>

                    </div>
                </div>
                <div id="tab-Prenursery" class="tab selected">
                    <div class="d-flex justify-content-center">
                        <form id="16" class="my-5 formsubmitfee" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">
                            <h1>Class Pre-Nursery</h1>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Registration Fees</label>
                                    <input type="number" required name="Registrationfee" id="Registrationfee" class="form-control fee16">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency16" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Admission Fees</label>
                                    <input type="number" required name="Admissionfee" id="Admissionfee" class="form-control fee16">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency16" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Tuitions Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee16">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency16" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Security Fees (Refundable)</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee16">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency16" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Annual Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee16">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency16" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Transportation Fees</label>
                                    <input type="text" required name="tutionfee" id="tutionfee" class="form-control fee16">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency16" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Others Fees</label>
                                    <input type="number" required name="tutionfee" id="tutionfee" class="form-control fee16">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">Frequency</label>
                                    <select required name="frequency" placeholder="Enter the frequency" class="form-control frequency16" id="frequency">
                                        <option>onetime</option>
                                        <option>quarterly</option>
                                        <option>monthly</option>
                                        <option>Halfyearly</option>

                                        <option>yearly</option>
                                        <option>NA</option>


                                    </select>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Total Cost</label>
                                    <input type="number" placeholder="enter total cost" required name="totalcost" id="totalcost" class="form-control fee16">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency16">
                                        <option value="onetime" selected>onetime</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>
                            <div class="row p-4">
                                <div class="col-md-6">
                                    <label for="registerationfee" class="form-label bold libre">Monthly Cost</label>
                                    <input type="number" placeholder="enter monthly cost" required name="totalcost" id="totalcost" class="form-control fee16">
                                </div>
                                <div class="col-md-6">
                                    <label for="frequency" class="form-label bold libre">frequency</label>
                                    <select class="form-control frequency16">
                                        <option selected>Monthly</option>
                                        <option>NA</option>

                                    </select>
                                </div>



                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-success m-3 w-50">Submit</button>
                            </div>



                        </form>

                    </div>


                </div>
            </div>

        </div>

        <!-- //Eligibility Criteria -->


        <div class="tab-pane fade" id="pills-fee" role="tabpanel" aria-labelledby="pills-fee-tab">
            <div class="row d-flex justify-content-center w-50  mx-auto p-3" style="width:60%!important;box-shadow: 0 0 10px rgba(0,0,0,0.1);">

                <h3 class="bold ">Select Class</h3>

                <select class="form-control" id="classSelect_new">
                    <option value="">Select a class</option>
                    <option value="prenursery" selected>Pre-Nursery</option>
                    <option value="Nursery">Nursery</option>
                    <option value="LKG">LKG </option>
                    <option value="UKG">UKG</option>
                    <option value="I">Grade I</option>
                    <option value="II">Grade II</option>
                    <option value="III">Grade III</option>
                    <option value="IV">Grade IV</option>
                    <option value="V">Grade V</option>
                    <option value="VI">Grade VI</option>
                    <option value="VII">Grade VII</option>
                    <option value="VIII">Grade VIII</option>
                    <option value="IX">Grade IX</option>
                    <option value="X">Grade X</option>
                    <option value="XI">Grade XI</option>
                    <option value="XII">Grade XII</option>











                </select>



            </div>
            <div id="prenursery" class="class-div">
                <div class="d-flex justify-content-center">
                    <form class="my-5 formeligible" id="one" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">

                        <h4 class="mx-3">Pre-Nursery</h4>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Eligibility (Age Qualification)</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control ageone">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Eligibility (Marks)</label>
                                <input type="text" required name="frequency" placeholder="Enter the frequency" class="form-control marksone" id="frequency">
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Total Seats</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control seatsone">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Written Test</label>
                                <select class="form-control writtentestone">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>

                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre ">Student Interaction</label>
                                <select class="form-control studentinteractionone">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>
                                    <option>Halfyearly</option>


                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Parent's Interaction</label>
                                <select class="form-control parentinteractionone">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>

                        </div>
                        <div class="row p-4">

                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form Availability</label>
                                <select class="form-control formavailabilityone">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form payment</label>
                                <select class="form-control onlinepaymentone">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>


                        </div>
                        <div class="row p-4">
                            <div class="col-md-12">
                                <label for="frequency" class="form-label bold libre ">School Timing</label>
                                <div>
                                    <span class="bold grey">From</span> <input class="form-control fromone" type="time">

                                </div>
                                <span class="bold grey">To</span> <input class="form-control toone" type="time">

                            </div>



                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success w-50 m-3">Submit</button>
                        </div>


                </div>





                </form>
            </div>

            <div id="Nursery" class="class-div">
                <div class="d-flex justify-content-center">
                    <form class="my-5 formeligible" id="one" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">

                        <h4 class="mx-3">Nursery</h4>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Eligibility (Age Qualification)</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control ageone">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Eligibility (Marks)</label>
                                <input type="text" required name="frequency" placeholder="Enter the frequency" class="form-control marksone" id="frequency">
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Total Seats</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control seatsone">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Written Test</label>
                                <select class="form-control writtentestone">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>

                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre ">Student Interaction</label>
                                <select class="form-control studentinteractionone">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Parent's Interaction</label>
                                <select class="form-control parentinteractionone">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>

                        </div>
                        <div class="row p-4">

                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form Availability</label>
                                <select class="form-control formavailabilityone">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form payment</label>
                                <select class="form-control onlinepaymentone">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>


                        </div>
                        <div class="row p-4">
                            <div class="col-md-12">
                                <label for="frequency" class="form-label bold libre ">School Timing</label>
                                <div>
                                    <span class="bold grey">From</span> <input class="form-control fromone" type="time">

                                </div>
                                <span class="bold grey">To</span> <input class="form-control toone" type="time">

                            </div>



                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success w-50 m-3">Submit</button>
                        </div>


                </div>





                </form>
            </div>
            <div id="LKG" class="class-div">
                <div class="d-flex justify-content-center">
                    <form class="my-5 formeligible" id="two" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">

                        <h4 class="mx-3">LKG</h4>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Eligibility (Age Qualification)</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control agetwo">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Eligibility (Marks)</label>
                                <input type="text" required name="frequency" placeholder="Enter the frequency" class="form-control markstwo" id="frequency">
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Total Seats</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control seatstwo">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Written Test</label>
                                <select class="form-control writtentesttwo">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>

                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre ">Student Interaction</label>
                                <select class="form-control studentinteractiontwo">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Parent's Interaction</label>
                                <select class="form-control parentinteractiontwo">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>

                        </div>
                        <div class="row p-4">

                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form Availability</label>
                                <select class="form-control formavailabilitytwo">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form payment</label>
                                <select class="form-control onlinepaymenttwo">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>


                        </div>
                        <div class="row p-4">
                            <div class="col-md-12">
                                <label for="frequency" class="form-label bold libre ">School Timing</label>
                                <div>
                                    <span class="bold grey">From</span> <input class="form-control fromtwo" type="time">

                                </div>
                                <span class="bold grey">To</span> <input class="form-control totwo" type="time">

                            </div>



                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success w-50 m-3">Submit</button>
                        </div>


                </div>





                </form>
            </div>
            <div id="UKG" class="class-div">
                <div class="d-flex justify-content-center">
                    <form class="my-5 formeligible" id="three" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">

                        <h4 class="mx-3">UKG</h4>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Eligibility (Age Qualification)</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control agethree ">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Eligibility (Marks)</label>
                                <input type="text" required name="frequency" placeholder="Enter the frequency" class="form-control marksthree" id="frequency">
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Total Seats</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control seatsthree">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Written Test</label>
                                <select class="form-control writtentestthree">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>

                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Student Interaction</label>
                                <select class="form-control studentinteractionthree">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Parent's Interaction</label>
                                <select class="form-control parentinteractionthree">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>

                        </div>
                        <div class="row p-4">

                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form Availability</label>
                                <select class="form-control formavailabilitythree">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form payment</label>
                                <select class="form-control onlinepaymentthree">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>


                        </div>
                        <div class="row p-4">
                            <div class="col-md-12">
                                <label for="frequency" class="form-label bold libre ">School Timing</label>
                                <div>
                                    <span class="bold grey">From</span> <input class="form-control fromthree" type="time">

                                </div>
                                <span class="bold grey">To</span> <input class="form-control tothree" type="time">

                            </div>



                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success w-50 m-3">Submit</button>
                        </div>


                </div>





                </form>
            </div>
            <div id="I" class="class-div">
                <div class="d-flex justify-content-center">
                    <form class="my-5 formeligible" id="four" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">

                        <h4 class="mx-3">Grade I</h4>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Eligibility (Age Qualification)</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control agefour">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Eligibility (Marks)</label>
                                <input type="text" required name="frequency" placeholder="Enter the frequency" class="form-control marksfour" id="frequency">
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Total Seats</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control seatsfour">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Written Test</label>
                                <select class="form-control writtentestfour">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>

                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Student Interaction</label>
                                <select class="form-control studentinteractionfour">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Parent's Interaction</label>
                                <select class="form-control parentinteractionfour">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>

                        </div>
                        <div class="row p-4">

                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form Availability</label>
                                <select class="form-control formavailabilityfour">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form payment</label>
                                <select class="form-control onlinepaymentfour">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>


                        </div>
                        <div class="row p-4">
                            <div class="col-md-12">
                                <label for="frequency" class="form-label bold libre ">School Timing</label>
                                <div>
                                    <span class="bold grey">From</span> <input class="form-control fromfour" type="time">

                                </div>
                                <span class="bold grey">To</span> <input class="form-control tofour" type="time">

                            </div>



                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success w-50 m-3">Submit</button>
                        </div>


                </div>





                </form>
            </div>
            <div id="II" class="class-div">
                <div class="d-flex justify-content-center">
                    <form class="my-5 formeligible" id="five" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">

                        <h4 class="mx-3">Grade II</h4>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Eligibility (Age Qualification)</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control agefive">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Eligibility (Marks)</label>
                                <input type="text" required name="frequency" placeholder="Enter the frequency" class="form-control marksfive" id="frequency">
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Total Seats</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control seatsfive">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Written Test</label>
                                <select class="form-control writtentestfive">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>

                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Student Interaction</label>
                                <select class="form-control studentinteractionfive">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Parent's Interaction</label>
                                <select class="form-control parentinteractionfive">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>

                        </div>
                        <div class="row p-4">

                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form Availability</label>
                                <select class="form-control formavailabilityfive">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form payment</label>
                                <select class="form-control onlinepaymentfive">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>


                        </div>
                        <div class="row p-4">
                            <div class="col-md-12">
                                <label for="frequency" class="form-label bold libre ">School Timing</label>
                                <div>
                                    <span class="bold grey">From</span> <input class="form-control fromfive" type="time">

                                </div>
                                <span class="bold grey">To</span> <input class="form-control tofive" type="time">

                            </div>



                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success w-50 m-3">Submit</button>
                        </div>


                </div>





                </form>
            </div>




            <div id="III" class="class-div">
                <div class="d-flex justify-content-center">
                    <form class="my-5 formeligible" id="six" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">

                        <h4 class="mx-3">Grade III</h4>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Eligibility (Age Qualification)</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control agesix ">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Eligibility (Marks)</label>
                                <input type="text" required name="frequency" placeholder="Enter the frequency" class="form-control markssix" id="frequency">
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Total Seats</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control seatssix">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Written Test</label>
                                <select class="form-control writtentestsix">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>

                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Student Interaction</label>
                                <select class="form-control studentinteractionsix">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Parent's Interaction</label>
                                <select class="form-control parentinteractionsix">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>

                        </div>
                        <div class="row p-4">

                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form Availability</label>
                                <select class="form-control formavailabilitysix">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form payment</label>
                                <select class="form-control onlinepaymentsix">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>


                        </div>
                        <div class="row p-4">
                            <div class="col-md-12">
                                <label for="frequency" class="form-label bold libre timingfour">School Timing</label>
                                <div>
                                    <span class="bold grey">From</span> <input class="form-control fromsix" type="time">

                                </div>
                                <span class="bold grey">To</span> <input class="form-control tosix" type="time">

                            </div>



                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success w-50 m-3">Submit</button>
                        </div>


                </div>





                </form>
            </div>
            <div id="IV" class="class-div">
                <div class="d-flex justify-content-center">
                    <form class="my-5 formeligible" id="seven" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">

                        <h4 class="mx-3">Grade IV</h4>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Eligibility (Age Qualification)</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control ageseven ">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Eligibility (Marks)</label>
                                <input type="text" required name="frequency" placeholder="Enter the frequency" class="form-control marksseven" id="frequency">
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Total Seats</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control seatsseven">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Written Test</label>
                                <select class="form-control writtentestseven">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>

                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Student Interaction</label>
                                <select class="form-control studentinteractionseven">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Parent's Interaction</label>
                                <select class="form-control parentinteractionseven">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>

                        </div>
                        <div class="row p-4">

                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form Availability</label>
                                <select class="form-control formavailabilityseven">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form payment</label>
                                <select class="form-control onlinepaymentseven">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>


                        </div>
                        <div class="row p-4">
                            <div class="col-md-12">
                                <label for="frequency" class="form-label bold libre timingfour">School Timing</label>
                                <div>
                                    <span class="bold grey">From</span> <input class="form-control fromseven" type="time">

                                </div>
                                <span class="bold grey">To</span> <input class="form-control toseven" type="time">

                            </div>



                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success w-50 m-3">Submit</button>
                        </div>


                </div>





                </form>
            </div>
            <div id="V" class="class-div">
                <div class="d-flex justify-content-center">
                    <form class="my-5 formeligible" id="eight" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">

                        <h4 class="mx-3">Grade V</h4>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Eligibility (Age Qualification)</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control ageeight">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Eligibility (Marks)</label>
                                <input type="text" required name="frequency" placeholder="Enter the frequency" class="form-control markseight" id="frequency">
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Total Seats</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control seatseight">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Written Test</label>
                                <select class="form-control writtentesteight">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>

                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Student Interaction</label>
                                <select class="form-control studentinteractioneight">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Parent's Interaction</label>
                                <select class="form-control parentinteractioneight">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>

                        </div>
                        <div class="row p-4">

                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form Availability</label>
                                <select class="form-control formavailabilityeight">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form payment</label>
                                <select class="form-control onlinepaymenteight">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>


                        </div>
                        <div class="row p-4">
                            <div class="col-md-12">
                                <label for="frequency" class="form-label bold libre timingfour">School Timing</label>
                                <div>
                                    <span class="bold grey">From</span> <input class="form-control fromeight" type="time">

                                </div>
                                <span class="bold grey">To</span> <input class="form-control toeight" type="time">

                            </div>



                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success w-50 m-3">Submit</button>
                        </div>


                </div>





                </form>
            </div>
            <div id="VI" class="class-div">
                <div class="d-flex justify-content-center">
                    <form class="my-5 formeligible" id="nine" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">

                        <h4 class="mx-3">Grade VI</h4>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Eligibility (Age Qualification)</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control agenine">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Eligibility (Marks)</label>
                                <input type="text" required name="frequency" placeholder="Enter the frequency" class="form-control marksnine" id="frequency">
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Total Seats</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control seatsnine">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Written Test</label>
                                <select class="form-control writtentestnine">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>

                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Student Interaction</label>
                                <select class="form-control studentinteractionnine">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Parent's Interaction</label>
                                <select class="form-control parentinteractionnine">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>

                        </div>
                        <div class="row p-4">

                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form Availability</label>
                                <select class="form-control formavailabilitynine">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form payment</label>
                                <select class="form-control onlinepaymentnine">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>


                        </div>
                        <div class="row p-4">
                            <div class="col-md-12">
                                <label for="frequency" class="form-label bold libre ">School Timing</label>
                                <div>
                                    <span class="bold grey">From</span> <input class="form-control fromnine" type="time">

                                </div>
                                <span class="bold grey">To</span> <input class="form-control tonine" type="time">

                            </div>



                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success w-50 m-3">Submit</button>
                        </div>


                </div>





                </form>
            </div>
            <div id="VII" class="class-div">
                <div class="d-flex justify-content-center">
                    <form class="my-5 formeligible" id="ten" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">

                        <h4 class="mx-3">Grade VII</h4>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Eligibility (Age Qualification)</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control ageten">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Eligibility (Marks)</label>
                                <input type="text" required name="frequency" placeholder="Enter the frequency" class="form-control marksten" id="frequency">
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Total Seats</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control seatsten">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Written Test</label>
                                <select class="form-control writtentestten">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>

                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Student Interaction</label>
                                <select class="form-control studentinteractionten">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Parent's Interaction</label>
                                <select class="form-control parentinteractionten">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>

                        </div>
                        <div class="row p-4">

                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form Availability</label>
                                <select class="form-control formavailabilityten">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form payment</label>
                                <select class="form-control onlinepaymentten">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>


                        </div>
                        <div class="row p-4">
                            <div class="col-md-12">
                                <label for="frequency" class="form-label bold libre ">School Timing</label>
                                <div>
                                    <span class="bold grey">From</span> <input class="form-control fromten" type="time">

                                </div>
                                <span class="bold grey">To</span> <input class="form-control toten" type="time">

                            </div>



                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success w-50 m-3">Submit</button>
                        </div>


                </div>





                </form>
            </div>

            <div id="VIII" class="class-div">
                <div class="d-flex justify-content-center">
                    <form class="my-5 formeligible" id="eleven" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">

                        <h4 class="mx-3">Grade VIII</h4>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Eligibility (Age Qualification)</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control ageeleven">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Eligibility (Marks)</label>
                                <input type="text" required name="frequency" placeholder="Enter the frequency" class="form-control markseleven" id="frequency">
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Total Seats</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control seatseleven">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Written Test</label>
                                <select class="form-control writtentesteleven">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>

                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Student Interaction</label>
                                <select class="form-control studentinteractioneleven">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Parent's Interaction</label>
                                <select class="form-control parentinteractioneleven">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>

                        </div>
                        <div class="row p-4">

                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form Availability</label>
                                <select class="form-control formavailabilityeleven">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form payment</label>
                                <select class="form-control onlinepaymenteleven">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>


                        </div>
                        <div class="row p-4">
                            <div class="col-md-12">
                                <label for="frequency" class="form-label bold libre ">School Timing</label>
                                <div>
                                    <span class="bold grey">From</span> <input class="form-control fromeleven" type="time">

                                </div>
                                <span class="bold grey">To</span> <input class="form-control toeleven" type="time">

                            </div>



                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success w-50 m-3">Submit</button>
                        </div>


                </div>





                </form>
            </div>
            <div id="IX" class="class-div">
                <div class="d-flex justify-content-center">
                    <form class="my-5 formeligible" id="tweleve" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">

                        <h4 class="mx-3">Grade IX</h4>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Eligibility (Age Qualification)</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control agetweleve">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Eligibility (Marks)</label>
                                <input type="text" required name="frequency" placeholder="Enter the frequency" class="form-control markstweleve" id="frequency">
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Total Seats</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control seatstweleve">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Written Test</label>
                                <select class="form-control writtentesttweleve">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>

                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Student Interaction</label>
                                <select class="form-control studentinteractiontweleve">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Parent's Interaction</label>
                                <select class="form-control parentinteractiontweleve">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>

                        </div>
                        <div class="row p-4">

                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form Availability</label>
                                <select class="form-control formavailabilitytweleve">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form payment</label>
                                <select class="form-control onlinepaymenttweleve">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>


                        </div>
                        <div class="row p-4">
                            <div class="col-md-12">
                                <label for="frequency" class="form-label bold libre ">School Timing</label>
                                <div>
                                    <span class="bold grey">From</span> <input class="form-control fromtweleve" type="time">

                                </div>
                                <span class="bold grey">To</span> <input class="form-control totweleve" type="time">

                            </div>



                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success w-50 m-3">Submit</button>
                        </div>


                </div>





                </form>
            </div>
            <div id="X" class="class-div">
                <div class="d-flex justify-content-center">
                    <form class="my-5 formeligible" id="thirteen" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">

                        <h4 class="mx-3">Grade X</h4>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Eligibility (Age Qualification)</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control agethirteen">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Eligibility (Marks)</label>
                                <input type="text" required name="frequency" placeholder="Enter the frequency" class="form-control marksthirteen" id="frequency">
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Total Seats</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control seatsthirteen">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Written Test</label>
                                <select class="form-control writtentestthirteen">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>

                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Student Interaction</label>
                                <select class="form-control studentinteractionthirteen">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Parent's Interaction</label>
                                <select class="form-control parentinteractionthirteen">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>

                        </div>
                        <div class="row p-4">

                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form Availability</label>
                                <select class="form-control formavailabilitythirteen">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form payment</label>
                                <select class="form-control onlinepaymentthirteen">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>


                        </div>
                        <div class="row p-4">
                            <div class="col-md-12">
                                <label for="frequency" class="form-label bold libre ">School Timing</label>
                                <div>
                                    <span class="bold grey">From</span> <input class="form-control fromthirteen" type="time">

                                </div>
                                <span class="bold grey">To</span> <input class="form-control tothirteen" type="time">

                            </div>



                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success w-50 m-3">Submit</button>
                        </div>


                </div>





                </form>
            </div>
            <div id="XI" class="class-div">
                <div class="d-flex justify-content-center">
                    <form class="my-5 formeligible" id="fourteen" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">

                        <h4 class="mx-3">Grade XI</h4>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Eligibility (Age Qualification)</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control agefourteen">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Eligibility (Marks)</label>
                                <input type="text" required name="frequency" placeholder="Enter the frequency" class="form-control marksfourteen" id="frequency">
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Total Seats</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control seatsfourteen">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Written Test</label>
                                <select class="form-control writtentestfourteen">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>

                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Student Interaction</label>
                                <select class="form-control studentinteractionfourteen">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Parent's Interaction</label>
                                <select class="form-control parentinteractionfourteen">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>

                        </div>
                        <div class="row p-4">

                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form Availability</label>
                                <select class="form-control formavailabilityfourteen">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form payment</label>
                                <select class="form-control onlinepaymentfourteen">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>


                        </div>
                        <div class="row p-4">
                            <div class="col-md-12">
                                <label for="frequency" class="form-label bold libre ">School Timing</label>
                                <div>
                                    <span class="bold grey">From</span> <input class="form-control fromfourteen" type="time">

                                </div>
                                <span class="bold grey">To</span> <input class="form-control tofourteen" type="time">

                            </div>



                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success w-50 m-3">Submit</button>
                        </div>


                </div>





                </form>
            </div>
            <div id="XII" class="class-div">
                <div class="d-flex justify-content-center">
                    <form class="my-5 formeligible" id="fifteen" style="width:60%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">

                        <h4 class="mx-3">Grade XII</h4>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Eligibility (Age Qualification)</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control agefifteen">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Eligibility (Marks)</label>
                                <input type="text" required name="frequency" placeholder="Enter the frequency" class="form-control marksfifteen" id="frequency">
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Total Seats</label>
                                <input type="text" required name="tutionfee" id="tutionfee" class="form-control seatsfifteen">
                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Written Test</label>
                                <select class="form-control writtentestfifteen">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>

                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Student Interaction</label>
                                <select class="form-control studentinteractionfifteen">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="registerationfee" class="form-label bold libre">Parent's Interaction</label>
                                <select class="form-control parentinteractionfifteen">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>NA</option>

                                </select>
                            </div>

                        </div>
                        <div class="row p-4">

                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form Availability</label>
                                <select class="form-control formavailabilityfifteen">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>
                            <div class="col-md-6">
                                <label for="frequency" class="form-label bold libre">Form payment</label>
                                <select class="form-control onlinepaymentfifteen">
                                    <option>Online</option>
                                    <option>Offline</option>
                                    <option>NA</option>

                                </select>

                            </div>


                        </div>
                        <div class="row p-4">
                            <div class="col-md-12">
                                <label for="frequency" class="form-label bold libre ">School Timing</label>
                                <div>
                                    <span class="bold grey">From</span> <input class="form-control fromfifteen" type="time">

                                </div>
                                <span class="bold grey">To</span> <input class="form-control tofifteen" type="time">

                            </div>



                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success w-50 m-3">Submit</button>
                        </div>


                </div>





                </form>
            </div>








        </div>
        <div class="tab-pane fase" id="pills-school_information" role="tabpanel" aria-labelledby="pills-school-information">
            <div class="row d-flex justify-content-center w-50  mx-auto p-3 m-3" style="width:60%!important;box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                <h3>Facilities</h3>
                <div class="">
                    <form id="school_information" class="my-5" style="width:100%;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);">



                        <div class="row p-4">
                            <div class="col-md-6">
                                <div style="display: flex; flex-direction: column;">
                                    <label class="bold grey libre" style="margin-bottom: 8px;">Class Facilities</label>
                                    <select id="class_facilities" class=" form-control facility" multiple style="height: 38px;">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div style="display: flex; flex-direction: column;">
                                    <label class="bold grey libre" style="margin-bottom: 8px;">Boarding</label>
                                    <select id="boarding" class=" form-control facility" id="boarding" style="height: 38px;" multiple>

                                        <option value="girls hostel">Girls hostel</option>
                                        <option value="girls hostel">Boys hostel</option>
                                        <option value="NA">NA</option>


                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <div style="display: flex; flex-direction: column;">
                                    <label class="bold grey libre" style="margin-bottom: 8px;">Infrastructure</label>
                                    <select id="infrastructure" class=" form-control facility" multiple style="height: 38px;">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div style="display: flex; flex-direction: column;">
                                    <label class="bold grey libre" style="margin-bottom: 8px;">Safety & security</label>
                                    <select id="safety_and_security" class="form-control facility" style="height: 38px;" multiple>


                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6">
                                <div style="display: flex; flex-direction: column;">
                                    <label class="bold grey libre" style="margin-bottom: 8px;">Advance facilities</label>
                                    <select id="advanced_facilities" class="form-control facility" multiple style="height: 38px;">


                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div style="display: flex; flex-direction: column;">
                                    <label class="bold grey libre" style="margin-bottom: 8px;">Extra curricular</label>
                                    <select id="extra_curricular" class="form-control facility" multiple style="height: 38px;">

                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="row p-4">
                            <div class="col-md-6">
                                <div style="display: flex; flex-direction: column;">
                                    <label class="bold grey libre" style="margin-bottom: 8px;">Sports & fitness</label>
                                    <select id="sports_and_fitness" class="form-control facility" multiple style="height: 38px;">


                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div style="display: flex; flex-direction: column;">
                                    <label class="bold grey libre" style="margin-bottom: 8px;">Lab</label>
                                    <select id="lab" class="form-control facility" multiple style="height: 38px;">


                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-12">
                                <div style="display: flex; flex-direction: column;">
                                    <label class="bold grey libre" style="margin-bottom: 8px;">Disabled Friendly</label>
                                    <select id="disabled_friendly" class="form-control facility" style="height: 38px;" multiple>
                                    </select>
                                </div>
                            </div>


                        </div>

                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success w-50 m-3">Submit</button>

                        </div>


                    </form>

                </div>


            </div>





        </div>
        <div class="tab-pane fase" id="pills-school_gallery" role="tabpanel" aria-labelledby="pills-school-gallery">
            <div class="row d-flex justify-content-center w-50  mx-auto p-3 m-3" style="width:60%!important;box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                <h1>Gallery</h1>
                <form id="gllery_form">
                    <select name="gallery_category" class="form-control my-3">
                        <option select>Select Image type</option>
                        <option>Infrastructure</option>
                        <option>Classroom</option>
                        <option>Library</option>
                        <option>Playground</option>

                    </select>
                    <input class="form-control" type="file" name="image_file">
                    <div class="d-flex justify-content-center">
                        <button id="gallery_submit" class="btn btn-success w-50 m-3">Submit</button>

                    </div>
                </form>



            </div>








        </div>


    </div>





</div>
<div>





    <?php $this->load->view("common/footer") ?>
    <script>
        $("#school_type_first_tab").select2();

        //gallery form
        $("#gllery_form").on("submit", function(e) {
            e.preventDefault();
            var formdata = new FormData($(this)[0]);
            $.ajax({
                url: "<?php echo base_url('welcome/send_gallery_image') ?>",
                method: "post",
                processData: false,
                contentType: false,
                dataType: "json",
                data: formdata,
                success: function(data) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'image added successfully'
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






        })


        $(document).on("submit", "#basic_detail_form", function(e) {
            e.preventDefault();
            console.log("sfsdf");

            var selectedTags = $('#tags_school').select2('data');
            var selectedString = selectedTags.map(tag => tag.text).join(', ');
            var school_type = $('#school_type_first_tab').select2('data');
            var school_type_string = school_type.map(tag => tag.text).join(', ');



            var formdata = new FormData($(this)[0]);
            formdata.append('tags_school', selectedString);
            formdata.append('school_type', school_type_string);
            $.ajax({
                url: "<?php echo base_url('welcome/add_basic_detail'); ?>", // Fixed the concatenation issue
                type: "POST", // Specify the type of request
                dataType: "json",
                data: formdata,
                processData: false, // Ensure this is false for FormData
                contentType: false, // Ensure this is false for FormData
                success: function(response) {
                    console.log("Success:", response);
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Basic Detail added successfully'
                    });

                    $('#tags_school').val(null).trigger('change'); // Reset tags
                    $('.tab-pane').removeClass('active');
                    $('.nav-link').removeClass('active');
                    $("#pills-profile-tab").addClass('active');
                    $("#pills-profile").addClass('active');
                    $("#pills-profile").addClass('show');








                },
                error: function(xhr, status, error) {

                }
            });
        });
        //overviewform

        $("#school_format").on("change", function() {



        })
        $(document).on("submit", "#overview_form", function(e) {
            e.preventDefault();

            var selected_school_format = $('#school_format').select2('data');

            var selected_school_format_string = selected_school_format.map(tag => tag.text).join(', ');
            console.log(selected_school_format_string);
            var form_overview_data = $("#overview_form").serialize() + '&' + $.param({
                school_format: selected_school_format_string
            });

            $.ajax({
                url: "<?php echo base_url("welcome/send_overview_data"); ?>",
                type: "post",
                dataType: "json",
                data: form_overview_data,
                success: function(data) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'overview data submitted successfully'
                    });

                    console.log("this is the success");


                }


            })



        })


        //school tags upload krne ke liye
        $('#tags_school').select2({
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
            templateResult: function(tag) {
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

        //class form
        $(document).on("submit", ".formsubmitfee", function(e) {
            e.preventDefault();


            var formId = e.target.id;
            console.log(formId);







            var feesArray = []; // Initialize an empty array
            var frequencyarrays = [];
            var class_name = "";




            $(`.fee${formId}`).each(function() {
                var value = $(this).val().trim(); // Trim whitespace and get the value

                if (value !== '') {
                    feesArray.push(value); // Push the value into feesArray if not empty
                }
            });
            $(`.frequency${formId}`).each(function() {
                var value = $(this).val().trim(); // Trim whitespace and get the value

                if (value !== '') {
                    frequencyarrays.push(value); // Push the value into feesArray if not empty
                }
            });

            console.log(feesArray);
            $.ajax({
                url: "<?php echo base_url("welcome/sendfeedetail") ?>",
                method: "post",
                data: {
                    fee: feesArray,
                    frequency: frequencyarrays,
                    class_name: $("#classSelect").val(),

                },
                dataType: "json",
                success: function(data) {
                    console.log("rohtisinfh");
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: `submitted fee of classs${$("#classSelect").val()}`,
                    });









                }





            })







        })
        $(document).on("submit", ".formeligible", function(e) {
            e.preventDefault();


            var formId = e.target.id;







            var eligibilityage = []; // Initialize an empty array
            var eligibilitymarks = [];
            var totalseats = [];
            var written_test = [];
            var student_interaction = [];
            var parents_interaction = [];
            var form_availability = [];
            var form_payment = [];
            var from = [];
            var to = []


            var class_name_new = "";




            $(`.age${formId}`).each(function() {
                var value = $(this).val().trim(); // Trim whitespace and get the value

                if (value !== '') {
                    eligibilityage.push(value); // Push the value into feesArray if not empty
                }
            });
            $(`.marks${formId}`).each(function() {
                var value = $(this).val().trim(); // Trim whitespace and get the value

                if (value !== '') {
                    eligibilitymarks.push(value); // Push the value into feesArray if not empty
                }
            });
            $(`.seats${formId}`).each(function() {
                var value = $(this).val().trim(); // Trim whitespace and get the value

                if (value !== '') {
                    totalseats.push(value); // Push the value into feesArray if not empty
                }
            });

            $(`.writtentest${formId}`).each(function() {
                var value = $(this).val().trim(); // Trim whitespace and get the value

                if (value !== '') {
                    written_test.push(value); // Push the value into feesArray if not empty
                }
            });
            $(`.studentinteraction${formId}`).each(function() {
                var value = $(this).val().trim(); // Trim whitespace and get the value

                if (value !== '') {
                    student_interaction.push(value); // Push the value into feesArray if not empty
                }
            });
            $(`.parentinteraction${formId}`).each(function() {
                var value = $(this).val().trim(); // Trim whitespace and get the value

                if (value !== '') {
                    parents_interaction.push(value); // Push the value into feesArray if not empty
                }
            });
            $(`.formavailability${formId}`).each(function() {
                var value = $(this).val().trim(); // Trim whitespace and get the value

                if (value !== '') {
                    form_availability.push(value); // Push the value into feesArray if not empty
                }
            });
            $(`.onlinepayment${formId}`).each(function() {
                var value = $(this).val().trim(); // Trim whitespace and get the value

                if (value !== '') {
                    form_payment.push(value); // Push the value into feesArray if not empty
                }
            });
            $(`.from${formId}`).each(function() {
                var value = $(this).val().trim(); // Trim whitespace and get the value

                if (value !== '') {
                    from.push(value); // Push the value into feesArray if not empty
                }
            });
            $(`.to${formId}`).each(function() {
                var value = $(this).val().trim(); // Trim whitespace and get the value

                if (value !== '') {
                    to.push(value); // Push the value into feesArray if not empty
                }
            });






            $.ajax({
                url: "<?php echo base_url("welcome/sendeligibilitydetail") ?>",
                method: "post",
                data: {
                    class_name: $("#classSelect_new").val(),
                    age: eligibilityage,
                    marks: eligibilitymarks,
                    totalseats: totalseats,
                    written_test: written_test,
                    parents_interaction: parents_interaction,
                    student_interaction: student_interaction,
                    form_availability: form_availability,
                    form_payment: form_payment,
                    from: from,
                    to: to,







                },
                dataType: "json",
                success: function(data) {



                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: `submitted eligibility criteria of classs${$("#classSelect_new").val()}`,
                    });





                }





            })







        })
        $("#boarding").select2({

            placeholder: 'Select a boarding', // Placeholder text
            minimumInputLength: 0,
        });
        $('#class_facilities').select2({
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
                    newTag: true // Indicate this is a new tag
                };
            },

            language: {
                searching: function() {
                    return 'Searching...';
                }
            },
            escapeMarkup: function(markup) {
                return markup;
            }
        });

        $('#infrastructure').select2({
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
                    newTag: true // Indicate this is a new tag
                };
            },

            language: {
                searching: function() {
                    return 'Searching...';
                }
            },
            escapeMarkup: function(markup) {
                return markup;
            }
        });
        $('#advanced_facilities').select2({

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

            language: {
                searching: function() {
                    return 'Searching...';
                }
            },
            escapeMarkup: function(markup) {
                return markup;
            },
        });
        $('#extra_curricular').select2({

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

            language: {
                searching: function() {
                    return 'Searching...';
                }
            },
            escapeMarkup: function(markup) {
                return markup;
            },
        });
        $('#sports_and_fitness').select2({

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

            language: {
                searching: function() {
                    return 'Searching...';
                }
            },
            escapeMarkup: function(markup) {
                return markup;
            },
        });
        $('#lab').select2({

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

            language: {
                searching: function() {
                    return 'Searching...';
                }
            },
            escapeMarkup: function(markup) {
                return markup;
            },
        });
        $('#safety_and_security').select2({

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

            language: {
                searching: function() {
                    return 'Searching...';
                }
            },
            escapeMarkup: function(markup) {
                return markup;
            },
        });

        $('#disabled_friendly').select2({

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

            language: {
                searching: function() {
                    return 'Searching...';
                }
            },
            escapeMarkup: function(markup) {
                return markup;
            },
        });
    </script>

    <script>
        var classSelect = document.getElementById("classSelect");

        var tabs = document.querySelectorAll(".tab");

        classSelect.addEventListener("change", function() {
            var selectedClass = classSelect.value;

            classSelect.querySelectorAll("option").forEach(function(option) {
                option.classList.remove("selected");
            });
            tabs.forEach(function(tab) {
                tab.classList.remove("selected");
            });

            var selectedOption = classSelect.querySelector('option[value="' + selectedClass + '"]');
            var selectedTab = document.getElementById("tab-" + selectedClass);
            if (selectedOption && selectedTab) {
                selectedOption.classList.add("selected");
                selectedTab.classList.add("selected");
            }
        });
        //for the preseleted option
        var selectedValue = $("#classSelect_new").val();
        console.log("Initially selected value:", selectedValue);
        $(`#${selectedValue}`).css("display", "block");


        $("#classSelect_new").on("change", function() {
            var selectedValue = $(this).val();

            $(".class-div").css("display", "none");
            $(`#${selectedValue}`).css("display", "block");


        });


        $(document).on("submit", "#school_information", function(e) {
            e.preventDefault();
            console.log("fsdfsd");

            var class_facilities = $("#class_facilities").val();
            var class_facilities_string = class_facilities.join(",");
            var boarding = $("#boarding").val();
            var boardingstring = boarding.join(",");

            var infrastructure = $("#infrastructure").val();
            var infrastructure_string = infrastructure.join(",");
            var safety_and_security = $("#safety_and_security").val();
            var safety_and_security_string = safety_and_security.join(",");
            var advanced_facilities = $("#advanced_facilities").val();
            var advanced_facilities_string = advanced_facilities.join(",");
            var extra_curricular = $("#extra_curricular").val();
            var extra_curricular_string = extra_curricular.join(",");
            var sports_and_fitness = $("#sports_and_fitness").val();
            var sports_and_fitness_string = sports_and_fitness.join(",");
            var lab = $("#lab").val();
            var lab_string = lab.join(",");
            var disables_friendly = $("#disabled_friendly").val();
            var disabled_friendly_string = disables_friendly.join(",");
            $.ajax({
                url: "<?php echo base_url("welcome/send_facility_data") ?>",
                type: "post",
                dataType: "json",
                data: {
                    class_facilities_string: class_facilities_string,
                    boarding: boardingstring,
                    infrastructure_string: infrastructure_string,
                    safety_and_security_string: safety_and_security_string,
                    advanced_facilities_string: advanced_facilities_string,
                    extra_curricular_string: extra_curricular_string,
                    sports_and_fitness_string: sports_and_fitness_string,
                    lab_string: lab_string,
                    disabled_friendly_string: disabled_friendly_string,
                    advanced_facilities_string: advanced_facilities_string,







                },
                success: function(data) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Facility data submitted successfully',
                    });


                }







            })










        })
        $('#india-states').select2({
            placeholder: 'Select a state',
            allowClear: true
        });
        $('#school_format').select2({
            placeholder: 'Select a state',
            allowClear: true,
            width: "100%",
        });
        $("#complete_Submission").on("click", function() {

            $(".formeligible").each(function() {
                this.reset();
            });
            $(".formsubmitfee").each(function() {
                this.reset();

            })
            $('.facility').val(null).trigger('change');

            $("#basic_detail_form")[0].reset();

            $("#overview_form")[0].reset();
            $("#school_type_first_tab").val(null).trigger('change');
            $("#tags_school").val(null).trigger("change");
            $("#india-states").val(null).trigger("change");
            $("#school_format").val(null).trigger("change");
            //this is for the change of the school
            $('.tab-pane').removeClass('active');
            $('.nav-link').removeClass('active');
            $("#pills-home-tab").addClass('active');
            $("#pills-home").addClass('active');
            $("#pills-home").addClass('show');

        })
    </script>