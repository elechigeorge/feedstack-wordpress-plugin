
<?php


function feedstack_plugin_settings_page_form() {
  
  ?>
  <div class="wrap container">
  <h1><?php _e( 'Feedstack Settings', 'settings' ); ?></h1>
   


    <div class="mt-3">


        <ul class="nav nav-underline" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">General</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">Widget</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">Advance</button>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <h3>General settings</h3>
                <p>This is the content of general settings</p>
            </div>
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
            <?php include plugin_dir_path(__FILE__) . '../templates/widget_settings.php'; ?>
            </div>
            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                <h3>Advanced Settings happens here</h3>
                <p>This is the content of advanced settings</p>
            </div>
        </div>
    </div>
  <?php
}