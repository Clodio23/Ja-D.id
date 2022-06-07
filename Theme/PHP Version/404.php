<?php
    
  // Page vars    
  $__title      = "404 Response Error Page - HostX.com";
  $__meta_description = "This is the Hostx 404 response page.";

  // Page class & id
  $__class  = "404-page";
  $__id     = "404-page";

  // Include (init.php) file.
  include 'core/init.php';
        
?>

  <!-- Section -->
  <div class="section">
    <div class="container-fluid">
      <!-- content -->
      <div class="content">
        <!-- row -->
        <div class="row justify-content-center align-items-center">
          <!-- col -->
          <div class="col-12 text-center mb-2">
            <!-- hero -->
            <img data-src="assets/images/pages/404/404.svg" class="lazy hero img-fluid" alt="Image">
          </div>
          <!-- col -->
          <div class="col-12 text-center">
            <!-- title-1 -->
            <h1 class="title-1">Look like you've found the<br>doorway to the great nothing.</h1>
            <!-- para-1 -->
            <p class="para-1 mb-4">You tried to access a page that isn't on out server.</p>
            <!-- links -->
            <div class="links d-flex align-items-center justify-content-center flex-wrap">
              <a href="#" class="link">Home</a>
              <a href="#" class="link">Help Center</a>
              <a href="#" class="link">Login</a>
              <a href="#" class="link">Knowledgebase</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
  // Footer
  include 'templates/footer.inc.php';
?>