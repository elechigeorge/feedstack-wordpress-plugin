
<?php



function feedstack_plugin_settings_page() {
  ?>
  <div class="wrap container">
      <h1><?php _e( 'Dashboard', 'settings' ); ?></h1>
      <!-- Add form fields for the result and analytics settings here -->


            <div class="">
                <div class="row ">
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-blue order-card">
                            <div class="card-block">
                                <h6 class="m-b-20 text-uppercase">Submissions</h6>
                                <div class="d-flex justify-content-between">
                                  <h2 class="text-right"><span>486</span></h2>
                                  <i class="fa fa-paper-plane f-left"></i>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-green order-card">
                            <div class="card-block">
                                <h6 class="m-b-20 text-uppercase">Sessions</h6>
                                <div class="d-flex justify-content-between">
                                  <h2 class="text-right"><span>486</span></h2>
                                  <i class="fa fa-database f-left"></i>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-yellow order-card">
                            <div class="card-block">
                                <h6 class="m-b-20 text-uppercase">Contact</h6>
                                <div class="d-flex justify-content-between">
                                  <h2 class="text-right"><span>486</span></h2>
                                  <i class="fa fa-user f-left"></i>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    
              </div>
            </div>

            <div class="">
                <h1><?php _e( 'Submissions', 'settings' ); ?></h1>
                
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Session</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody id="submissionTable">
                        <!-- Table rows will be populated here -->
                    </tbody>
                </table>
              </div>

     
  </div>
  <?php
  
}

