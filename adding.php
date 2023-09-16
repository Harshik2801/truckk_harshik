<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Treck</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Adding the Treck</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="forms-sample" method="post" enctype="multipart/form-data" id="submit-form" action="save_details.php">
                      <div class="form-group">
                        <label for="exampleInputDest1">Destination</label>
                        <input type="text" class="form-control" id="exampleInputDest1" placeholder="Destination" name="destination">
                      
                        <label for="exampleSelectsar">State and Region</label>
                        <input type="text" class="form-control" id="exampleSelectsar" placeholder="State" name="state">
                        <label for="exampleInputPrice">Price</label>
                        <input type="text" class="form-control" id="exampleInputPrice" placeholder="Price" name="price">
                
                      
                        <label for="exampleInputPplAllowed">Number of people allowed</label>
                        <input type="text" class="form-control" id="exampleInputPplAllowed" placeholder="Number of people allowed" name="number">
                      
                    
                        <label for="stdate">Start Date</label>
                        <input type="text" class="form-control" id="stdate" placeholder="YYYY-MM-DD" name="start_date">
                      
                   
                        <label for="enddate">End Date</label>
                        <input type="text" class="form-control" id="enddate" placeholder="YYYY-MM-DD" name="end_date">
                   
                        <label>Photo 1</label>
                        <input type="file" name="image1" accept="image/*">
                        <br>
                        <label>Photo 2</label>
                        <input type="file" name="image2" accept="image/*">
                        <br>
                        <label>Photo 3</label>
                        <input type="file" name="image3" accept="image/*">
                        <br>
                        <label for="overview">Overviews</label>
                        <textarea class="form-control" id="overview" rows="10" cols="15" name="overview"></textarea>
                   
                        <label for="itenary">Itenary</label>
                        <textarea class="form-control" id="itenary" rows="10" cols="15" name="itenary"></textarea>
                
                        <label for="hilights">Highlights</label>
                        <textarea class="form-control" id="hilights" rows="10" cols="15" name="highlights"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                    <div id="response-container"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
              </div>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/select2/select2.min.js"></script>
    <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/file-upload.js"></script>
    <script src="../../assets/js/typeahead.js"></script>
    <script src="../../assets/js/select2.js"></script>
    <!-- End custom js for this page -->

    
<script>
$(document).ready(function() {
    $("#submit-form").submit(function(event) {
        event.preventDefault(); // Prevent form from submitting normally

        var formData = new FormData(this);

        $.ajax({
            url: "save_details.php", // Path to your PHP script
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response); // Display the response from the server
            }
        });
    });
});
</script>
  </body>
</html>