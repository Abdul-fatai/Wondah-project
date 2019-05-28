<?php 
 include_once'header2.php';
?>

  <!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">Job</h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Opportunities</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
  <div class="blog-page area-padding">
    <div class="container">
   <!-- Start  contact -->
   <div class="float-center col-md-8"> 
   <h5 class="pull-center">
    Complete application documents must include both a CV.
    Incomplete submissions will not be considered.</h5>
    <hr>
    <h4>Apply now</h4>
    </div>
   <div class="col-md-10 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="includes/job.inc.php" method="post" enctype="multipart/form-data" role="form" class="contactForm">
                <div class="form-group col-md-6">
                  <input type="text" name="sname" class="form-control" id="name" placeholder="Surname" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Name" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                  <input type="text" name="street" class="form-control" id="name" placeholder="street" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                  <input type="text" name="country" class="form-control" id="name" placeholder="country" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                  <input type="text" name="postal" class="form-control" id="name" placeholder="postal code / city" data-rule="minlen:3" data-msg="this field is required" />
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                  <input type="text"  name="tel" class="form-control" id="name" placeholder="telephone" data-rule="minlen:4" data-msg="Please enter at least 3 chars" autocomplete="no" />
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                  <select class="form-group" name="select" style="width: 100%; height: 40px;">
                  <option disabled selected>Field</option>
                  <option>Engneer</option>
                  <option>Cleaner</option>
                  <option>Cleaner</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <textarea class="form-control" name="message" style="width: 100%; height: 50%" rows="4" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                 <label>Upload CV</label>
                 <p>maximum size is 8mb</p>
                  <input type="file" name="file" class="form-control" style="width: 100%; height: 40px" id="name" data-msg="Please upload a cv" />
                  <div class="validation"></div>
                </div>

                <div class="text-center"><button type="submit" name="submit">Submit</button></div>
              </form>
            </div>
          </div>
          <!-- End job form -->
    </div>
  </div>
  <!-- End Blog Area -->

  <div class="clearfix"></div>
<?php 

include_once 'footer.php';

?>