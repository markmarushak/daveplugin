<?php
require_once('autoload.php');
?>
<div class="tab-panel fade show active" id="step-1" role="tabpanel" aria-labelledby="nav-step-1">
    <form id="form_step_1" class="form-submit" data-tab="1" data-next-tab="2">
        <div class="main">


            <div class="step-1">

                <div class="container">

                    <div class="row">

                        <div class="col-sm-12">

                            <header class="main-color p-b-10"><h4>Select the school district, the school, and then
                                    grade.</h4></header>

                            <div class="row">
                                <div class="col-sm-3 col-xs-12">
                                    <div class="form-group">
                                        <label for="zipCode">
                                            zipCode
                                        </label>
                                        <input type="text" name="zipCode" id="zipCode" class="form-control"
                                               onkeypress='validate(event)' required>
                                    </div>

                                </div>
                                <div class="col-sm-3 col-xs-12">
                                    <div class="form-group">
                                        <label for="school-district">District</label>
                                        <select name="school-district" class="form-control"
                                                id="school-district" disabled>
                                            <option value="-">select</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-3 col-xs-12">
                                    <div class="form-group">
                                        <label for="school">School</label>
                                        <select name="school" class="form-control" id="school" disabled>
                                            <option value="-">select</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-sm-3 col-xs-12">
                                    <div class="form-group">
                                        <label for="grade">Grade</label>
                                        <select name="grade" class="form-control" id="grade" disabled>
                                            <option value="-">select</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <div class="col-sm-12">
                            <div id="plan-list"></div>
                        </div>


                    </div>

                </div>

            </div>

        </div>

        <div class="col-sm-12 text-right">
            <button type="submit" class="btn btn-primary btn-lg">Next</button>
        </div>

    </form>

    <!-- Modal -->
    <div class="modal fade" id="modal-benefit" tabindex="-1" role="dialog" aria-labelledby="modal-benefit-Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="content-benefit">
                
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


</div>