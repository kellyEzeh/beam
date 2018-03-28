<?php

$page_type = "notindex";
include('header.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3 class="pt-5 text-center faq">Fill the form below</h3>
                <p class="text-center pt-2">Fill this form and one of our representatives will call you soon</p>
            </div>
            <div class="col-md-4"></div>
        </div>

        <div class="row pt-4 pb-5">
            <div class="col-md-3"></div>
            <div class="col-md-6 part-one pb-5">
                <div class="row pt-4">

                <!-- first-column -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="email" class="form-control border rounded-0" placeholder="" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="email" class="form-control border rounded-0" placeholder="" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="lastname" class="form-control border rounded-0" placeholder="" required="">
                            </div>
                        </div>

                        <!-- second-column -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Company Name</label>
                                <input type="lastname" class="form-control border rounded-0" placeholder="" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Company Email</label>
                                <input type="lastname" class="form-control border rounded-0" placeholder="" required="">
                            </div>
                        </div>
                        <div class="col-md-6 select-body">
                            <label>Preferred Plan</label>
                            <select class="select-item">
                                <option value="Deluxe">Deluxe</option>
                                <option value="Basic">Basic</option>
                                <option value="Pro">pro</option>
                                <option value="Beginner">beginner</option>
                            </select>
                        </div>
                </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-default font-weight-normal button-color text-white ml-2 mt-2 btn-lg rounded-0 contact-button">
                            CONTACT ME</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>

</div>


<?php include('footer.php'); ?>