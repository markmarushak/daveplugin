<?php
require_once ('autoload.php');
?>
<div class="tab-pane fade show active" id="step-1" role="tabpanel" aria-labelledby="nav-home-tab">
    <form>
        <div class="main">


            <div class="step-1">

                <div class="container">

                    <div class="row">

                        <div class="col-sm-4 col-xs-12">
                            <div class="form-group">
                            <label>Mouth</label>
                            <select name="mouth" id="mouth" class="form-control" required>
                                <option value="-">mouth</option>
                                <?php numberSelect(1, 12)?>
                            </select>
                            </div>
                        </div>

                        <div class="col-sm-4 col-xs-12">
                            <div class="form-group">
                            <label>Day</label>
                            <select name="day" id="day" class="form-control" required>
                                <option value="-">day</option>
                                <?php numberSelect(1, 31)?>
                            </select>
                            </div>
                        </div>

                        <div class="col-sm-4 col-xs-12">
                            <div class="form-group">
                            <label>Year</label>
                            <select name="year" id="Year" class="form-control" required>
                                <option value="-">Year</option>
                                <?php numberSelect(1999, 2025)?>

                            </select>
                            </div>
                        </div>

                        <div class="col-sm-12">

                            <header class="main-color p-b-10"><h4>Select the school district, the school, and then grade.</h4></header>

                            <div class="row">
                                <div class="col-sm-3 col-xs-12">
                                    <div class="form-group">
                                    <label for="zipCode">
                                        zipCode
                                    </label>
                                    <input type="text" name="zipCode" id="zipCode" class="form-control" onkeypress='validate(event)' required>
                                    </div>

                                </div>
                                <div class="col-sm-3 col-xs-12">
                                    <div class="form-group">
                                    <label for="school-district">District</label>
                                    <select name="school-district" class="form-control"
                                            id="school-district">
                                        <option value="-">select</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="col-sm-3 col-xs-12">
                                    <div class="form-group">
                                    <label for="school">School</label>
                                    <select name="school" class="form-control" id="school">
                                        <option value="-">select</option>
                                    </select>
                                    </div>

                                </div>

                                <div class="col-sm-3 col-xs-12">
                                    <div class="form-group">
                                    <label for="grade">Grade</label>
                                    <select name="grade" class="form-control" id="grade">
                                        <option value="-">select</option>
                                    </select>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-sm-10">

                            <header class="main-color p-b-10"><h4>Student and parent information</h4></header>

                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Mark" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Otto" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <label for="parent-firstname"><b>Parent</b> First Name</label>
                                    <input type="text" name="parent-firstname" id="parent-firstname" class="form-control" placeholder="Mark" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <label for="parent-lastname"><b>Parent</b> First Name</label>
                                    <input type="text" name="parent-lastname" id="parent-lastname" class="form-control" placeholder="Otto" required>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                    <label for="email">First Name</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="test@gmail.com" required>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="1234 Main St" required>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                            <label for="address2">Address</label>
                            <input type="text" name="address-2" id="address2" class="form-control" placeholder="Apartment, studio, or floor" required>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="row">

                                <div class="col-sm-4 col-xs-12">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" name="city" id="city" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-xs-12">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                        <label for="address2">State</label>
                                        <select name="state" id="state" class="form-control" required>
                                            <option value="-">select</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-xs-12">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                        <label for="zip">Zip</label>
                                        <input type="text" name="zip" id="zip" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <br>
        <div class="col-sm-12">
            <button class="btn btn-primary">Next</button>
        </div>
    </form>


</div>