<?php
    
  // Page vars    
  $__title      = "Support Center";
  $__meta_title = "HostX | HTML5 Hosting Template";    
  $__meta_description = "Your all in one solution to grow online. Start a free trial to create a beautiful website, get a domain name, fast hosting, online marketing and award-winning 24/7 support.";
  $__meta_keywords    = "Buy VPS, Buy VPS Hosting,Buy Cheap VPS, Free VPS, Trial VPS";

  // Page class & id
  $__class  = "abuse-page";
  $__id     = "abuse-page";

  // Include (init.php) file.
  include 'core/init.php';
      
?>

  <!-- Section I -->
  <div class="se-i py-120">
    <div class="container">
      <!-- content -->
      <div class="content">
        <!-- title-1 -->
        <h1 class="title-1">Report abuse and illegal content</h1>
        <!-- para-1 -->
        <p class="para-1">If you want to report an Internet breach to HostX, select an option below to create your report. Please provide the necessary details so that our team can investigate your complaint.<br>If you have submitted a report by e-mail and have been forwarded to this form, your details are<br>incomplete. In order for us to process your request, you must complete the form below and provide all the necessary information.</p>
      </div>
      <!-- accordion -->
      <div class="accordion">
        <!-- item -->
        <div class="item">
          <!-- item-head -->
          <div class="item-head">
            <h4 class="accordion-title">DMCA Takedown</h4>
            <p class="accordion-para">DMCA—is a federal law that helps copyright holders.</p>
          </div>
          <!-- item-body -->
          <div class="item-body">
            <!-- abuse-form -->
            <form class="abuse-form" action="mail.php?do=dmca" method="POST" name="dmcaForm" id="dmcaForm">
              <!-- row -->
              <div class="row">
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="copyrightOwnerFullName">
                    <span class="input-title">Copyright Owners Full Name</span>
                    <input class="form-input" type="text" name="copyrightOwnerFullName" id="copyrightOwnerFullName" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="fullName">
                    <span class="input-title">Your Full Name</span>
                    <input class="form-input" type="text" name="fullName" id="fullName" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="address">
                    <span class="input-title">Address</span>
                    <input class="form-input" type="text" name="address" id="address" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="phoneNumber">
                    <span class="input-title">Phone Number</span>
                    <input class="form-input" type="tel" name="phoneNumber" id="phoneNumber" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="email">
                    <span class="input-title">Email Address</span>
                    <input class="form-input" type="email" name="email" id="email" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="digitalSignature">
                    <span class="input-title">Digital Signature</span>
                    <input class="form-input" type="text" name="digitalSignature" id="digitalSignature" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-6">
                  <!-- form-label -->
                  <label class="form-label" for="infringingContent">
                    <span class="input-title">URL(s) and/or a description of the infringing content</span>
                    <textarea class="form-textarea" name="infringingContent" id="infringingContent" required></textarea>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-6">
                  <!-- form-label -->
                  <label class="form-label" for="originalContent">
                    <span class="input-title">URL(s) and/or a description of the original content</span>
                    <textarea class="form-textarea" name="originalContent" id="originalContent" required></textarea>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-12 mb-3">
                  <!-- form-para -->
                  <p class="form-para">By submiting this form, you attest, under penalty of perjury, that (1) you have a good faith belief that use of the material in this report is not authorized by the copyright owner, its agent, or the law; (2) you are the copyright owner or authorized to act on behalf of the copyright owner; and (3) you understand, under 17 U.S.C. § 512(f), that you may be liable for any damages, including costs and attorneys fees, if you knowingly materially misrepresent that the material you are reporting is infringing.</p>
                </div>
                <!-- col -->
                <div class="col-12">
                  <button type="submit" class="btn btn-fill-primary shadow-off" name="dmcaForm">Report Abuse</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- item -->
        <div class="item">
          <!-- item-head -->
          <div class="item-head">
            <h4 class="accordion-title">Trademark Infringement</h4>
            <p class="accordion-para">Trademark abuse is the unauthorized use of a trademark in connection with services in a way that is likely to cause confusion about the source of the goods or services.</p>
          </div>
          <!-- item-body -->
          <div class="item-body">
            <!-- abuse-form -->
            <form class="abuse-form" action="mail.php?do=trademark" method="POST" name="trademarkForm" id="trademarkForm">
              <!-- row -->
              <div class="row">
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f2_fullName">
                    <span class="input-title">Your Full Name</span>
                    <input class="form-input" type="text" name="f2_fullName" id="f2_fullName" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f2_address">
                    <span class="input-title">Address</span>
                    <input class="form-input" type="text" name="f2_address" id="f2_address" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f2_phoneNumber">
                    <span class="input-title">Phone Number</span>
                    <input class="form-input" type="tel" name="f2_phoneNumber" id="f2_phoneNumber" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f2_email">
                    <span class="input-title">Email Address</span>
                    <input class="form-input" type="email" name="f2_email" id="f2_email" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f2_trademarkedWord">
                    <span class="input-title">Trademarked word/symbol</span>
                    <input class="form-input" type="text" name="f2_trademarkedWord" id="f2_trademarkedWord" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f2_registrationOffice">
                    <span class="input-title">Registration office, Country</span>
                    <input class="form-input" type="text" name="f2_registrationOffice" id="f2_registrationOffice" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-6">
                  <!-- form-label -->
                  <label class="form-label" for="f2_infringingContent">
                    <span class="input-title">URL(s) and/or a description of the infringing content</span>
                    <textarea class="form-textarea" name="f2_infringingContent" id="f2_infringingContent" required></textarea>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-6">
                  <!-- form-label -->
                  <label class="form-label" for="f2_comments">
                    <span class="input-title">Comments/Commercial Nexus</span>
                    <textarea class="form-textarea" name="f2_comments" id="f2_comments" required></textarea>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-4">
                  <!-- form-label -->
                  <label class="form-label" for="f2_digitalSignature">
                    <span class="input-title">Digital Signature</span>
                    <input class="form-input" type="text" name="f2_digitalSignature" id="f2_digitalSignature" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-12 mb-3">
                  <!-- form-para -->
                  <p class="form-para">By entering your name, you affirm all information is true and accurate.<br>All information submitted to us may be relayed to the customer during our remediation process.</p>
                </div>
                <!-- col -->
                <div class="col-12">
                  <button type="submit" class="btn btn-fill-primary shadow-off" name="trademarkForm">Report Abuse</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- item -->
        <div class="item">
          <!-- item-head -->
          <div class="item-head">
            <h4 class="accordion-title">Spam</h4>
            <p class="accordion-para">Spam is Unsolicited Bulk Email distributed to recipients who have not provided direct consent.</p>
          </div>
          <!-- item-body -->
          <div class="item-body">
            <!-- abuse-form -->
            <form class="abuse-form" action="mail.php?do=spam" method="POST" name="spamForm" id="spamForm">
              <!-- row -->
              <div class="row">
                <!-- col -->
                <div class="col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f3_fullName">
                    <span class="input-title">Your Full Name</span>
                    <input class="form-input" type="text" name="f3_fullName" id="f3_fullName" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f3_email">
                    <span class="input-title">Email Address</span>
                    <input class="form-input" type="email" name="f3_email" id="f3_email" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-6">
                  <!-- form-label -->
                  <label class="form-label" for="f3_headers">
                    <span class="input-title">Headers from email received</span>
                    <textarea class="form-textarea" name="f3_headers" id="f3_headers" required></textarea>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-6">
                  <!-- form-label -->
                  <label class="form-label" for="f3_messageBody">
                    <span class="input-title">Message Body</span>
                    <textarea class="form-textarea" name="f3_messageBody" id="f3_messageBody" required></textarea>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-12">
                  <!-- form-label -->
                  <label class="form-label" for="f3_urls">
                    <span class="input-title">Spamvertisement URLs</span>
                    <textarea class="form-textarea" name="f3_urls" id="f3_urls" required></textarea>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-4">
                  <!-- form-label -->
                  <label class="form-label" for="f3_digitalSignature">
                    <span class="input-title">Digital Signature</span>
                    <input class="form-input" type="text" name="f3_digitalSignature" id="f3_digitalSignature" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-12 mb-3">
                  <!-- form-para -->
                  <p class="form-para">By entering your name, you affirm all information is true and accurate.<br>All information submitted to us may be relayed to the customer during our remediation process.</p>
                </div>
                <!-- col -->
                <div class="col-12">
                  <button type="submit" class="btn btn-fill-primary shadow-off" name="spamForm">Report Abuse</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- item -->
        <div class="item">
          <!-- item-head -->
          <div class="item-head">
            <h4 class="accordion-title">Phishing</h4>
            <p class="accordion-para">Phishing is the fraudulent practice of sending emails purporting to be from reputable companies in order to induce individuals to reveal personal information.</p>
          </div>
          <!-- item-body -->
          <div class="item-body">
            <!-- abuse-form -->
            <form class="abuse-form" action="mail.php?do=phishing" method="POST" name="phishingForm" id="phishingForm">
              <!-- row -->
              <div class="row">
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f4_fullName">
                    <span class="input-title">Your Full Name</span>
                    <input class="form-input" type="text" name="f4_fullName" id="f4_fullName" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f4_email">
                    <span class="input-title">Email Address</span>
                    <input class="form-input" type="email" name="f4_email" id="f4_email" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-xl-4">
                  <!-- form-label -->
                  <label class="form-label" for="f4_target">
                    <span class="input-title">Target of Phishing Campaign</span>
                    <input class="form-input" type="text" name="f4_target" id="f4_target" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-6">
                  <!-- form-label -->
                  <label class="form-label" for="f4_urls">
                    <span class="input-title">Evidence URLs</span>
                    <textarea class="form-textarea" name="f4_urls" id="f4_urls" required></textarea>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-6">
                  <!-- form-label -->
                  <label class="form-label" for="f4_logs">
                    <span class="input-title">Additional Evidence or Logs</span>
                    <textarea class="form-textarea" name="f4_logs" id="f4_logs" required></textarea>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-4">
                  <!-- form-label -->
                  <label class="form-label" for="f4_digitalSignature">
                    <span class="input-title">Digital Signature</span>
                    <input class="form-input" type="text" name="f4_digitalSignature" id="f4_digitalSignature" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-12 mb-3">
                  <!-- form-para -->
                  <p class="form-para">By entering your name, you affirm all information is true and accurate.<br>All information submitted to us may be relayed to the customer during our remediation process.</p>
                </div>
                <!-- col -->
                <div class="col-12">
                  <button type="submit" class="btn btn-fill-primary shadow-off" name="phishingForm">Report Abuse</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- item -->
        <div class="item">
          <!-- item-head -->
          <div class="item-head">
            <h4 class="accordion-title">Malware</h4>
            <p class="accordion-para">Malware is software that is intended to damage or disable computers and computer systems.</p>
          </div>
          <!-- item-body -->
          <div class="item-body">
            <!-- abuse-form -->
            <form class="abuse-form" action="mail.php?do=malware" method="POST" name="malwareForm" id="malwareForm">
              <!-- row -->
              <div class="row">
                <!-- col -->
                <div class="col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f5_fullName">
                    <span class="input-title">Your Full Name</span>
                    <input class="form-input" type="text" name="f5_fullName" id="f5_fullName" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f5_email">
                    <span class="input-title">Email Address</span>
                    <input class="form-input" type="email" name="f5_email" id="f5_email" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-6">
                  <!-- form-label -->
                  <label class="form-label" for="f5_urls">
                    <span class="input-title">Evidence URLs</span>
                    <textarea class="form-textarea" name="f5_urls" id="f5_urls" required></textarea>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-6">
                  <!-- form-label -->
                  <label class="form-label" for="f5_logs">
                    <span class="input-title">Additional Evidence or Logs</span>
                    <textarea class="form-textarea" name="f5_logs" id="f5_logs" required></textarea>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-4">
                  <!-- form-label -->
                  <label class="form-label" for="f5_digitalSignature">
                    <span class="input-title">Digital Signature</span>
                    <input class="form-input" type="text" name="f5_digitalSignature" id="f5_digitalSignature" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-12 mb-3">
                  <!-- form-para -->
                  <p class="form-para">By entering your name, you affirm all information is true and accurate.<br>All information submitted to us may be relayed to the customer during our remediation process.</p>
                </div>
                <!-- col -->
                <div class="col-12">
                  <button type="submit" class="btn btn-fill-primary shadow-off" name="malwareForm">Report Abuse</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- item -->
        <div class="item">
          <!-- item-head -->
          <div class="item-head">
            <h4 class="accordion-title">Botnet</h4>
            <p class="accordion-para">A botnet is a network of private computers infected with malicious software and controlled as a group without the owners' knowledge.</p>
          </div>
          <!-- item-body -->
          <div class="item-body">
            <!-- abuse-form -->
            <form class="abuse-form" action="mail.php?do=botnet" method="POST" name="botnetForm" id="botnetForm">
              <!-- row -->
              <div class="row">
                <!-- col -->
                <div class="col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f6_fullName">
                    <span class="input-title">Your Full Name</span>
                    <input class="form-input" type="text" name="f6_fullName" id="f6_fullName" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f6_email">
                    <span class="input-title">Email Address</span>
                    <input class="form-input" type="email" name="f6_email" id="f6_email" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-12">
                  <!-- form-label -->
                  <label class="form-label" for="f6_urls">
                    <span class="input-title">Evidence URLs</span>
                    <textarea class="form-textarea" name="f6_urls" id="f6_urls" required></textarea>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-4">
                  <!-- form-label -->
                  <label class="form-label" for="f6_digitalSignature">
                    <span class="input-title">Digital Signature</span>
                    <input class="form-input" type="text" name="f6_digitalSignature" id="f6_digitalSignature" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-12 mb-3">
                  <!-- form-para -->
                  <p class="form-para">By entering your name, you affirm all information is true and accurate.<br>All information submitted to us may be relayed to the customer during our remediation process.</p>
                </div>
                <!-- col -->
                <div class="col-12">
                  <button type="submit" class="btn btn-fill-primary shadow-off" name="botnetForm">Report Abuse</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- item -->
        <div class="item">
          <!-- item-head -->
          <div class="item-head">
            <h4 class="accordion-title">Intrusion/exploit attempts (Bruteforce, Scans etc)</h4>
            <p class="accordion-para">Intrusion/exploit attempts (Bruteforce, Scans etc) attacks are when malicious applications makes several attempts to access, crack, or locate vulnerabilities on machines they have no right accessing. This is a technique commonly employed by malicious actors in order to find an attack vector to utilize against a server/website.</p>
          </div>
          <!-- item-body -->
          <div class="item-body">
            <!-- abuse-form -->
            <form class="abuse-form" action="mail.php?do=intrusion" method="POST" name="intrusionForm" id="intrusionForm">
              <!-- row -->
              <div class="row">
                <!-- col -->
                <div class="col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f7_fullName">
                    <span class="input-title">Your Full Name</span>
                    <input class="form-input" type="text" name="f7_fullName" id="f7_fullName" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f7_email">
                    <span class="input-title">Email Address</span>
                    <input class="form-input" type="email" name="f7_email" id="f7_email" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-6">
                  <!-- form-label -->
                  <label class="form-label" for="f7_logs">
                    <span class="input-title">Evidence or logs of the activity showing source IP.</span>
                    <textarea class="form-textarea" name="f7_logs" id="f7_logs" placeholder="Example:- Feb 13 22:41:11 username sshd[20654]: Received disconnect from 1.1.1.1 port 35070:11: Normal Shutdown" required></textarea>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-6">
                  <!-- form-label -->
                  <label class="form-label" for="f7_timezone">
                    <span class="input-title">Your servers time zone</span>
                    <textarea class="form-textarea" name="f7_timezone" id="f7_timezone" required></textarea>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-4">
                  <!-- form-label -->
                  <label class="form-label" for="f7_digitalSignature">
                    <span class="input-title">Digital Signature</span>
                    <input class="form-input" type="text" name="f7_digitalSignature" id="f7_digitalSignature" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-12 mb-3">
                  <!-- form-para -->
                  <p class="form-para">By entering your name, you affirm all information is true and accurate.<br>All information submitted to us may be relayed to the customer during our remediation process.</p>
                </div>
                <!-- col -->
                <div class="col-12">
                  <button type="submit" class="btn btn-fill-primary shadow-off" name="intrusionForm">Report Abuse</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- item -->
        <div class="item">
          <!-- item-head -->
          <div class="item-head">
            <h4 class="accordion-title">Child Abuse</h4>
            <p class="accordion-para">Child Abuse is physical maltreatment or sexual molestation of a child.</p>
          </div>
          <!-- item-body -->
          <div class="item-body">
            <!-- abuse-form -->
            <form class="abuse-form" action="mail.php?do=child" method="POST" name="childForm" id="childForm">
              <!-- row -->
              <div class="row">
                <!-- col -->
                <div class="col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f8_fullName">
                    <span class="input-title">Your Full Name</span>
                    <input class="form-input" type="text" name="f8_fullName" id="f8_fullName" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f8_email">
                    <span class="input-title">Email Address</span>
                    <input class="form-input" type="email" name="f8_email" id="f8_email" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-12">
                  <!-- form-label -->
                  <label class="form-label" for="f8_urls">
                    <span class="input-title">Evidence URLs</span>
                    <textarea class="form-textarea" name="f8_urls" id="f8_urls" required></textarea>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-4">
                  <!-- form-label -->
                  <label class="form-label" for="f8_digitalSignature">
                    <span class="input-title">Digital Signature</span>
                    <input class="form-input" type="text" name="f8_digitalSignature" id="f8_digitalSignature" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-12 mb-3">
                  <!-- form-para -->
                  <p class="form-para">By entering your name, you affirm all information is true and accurate.<br>All information submitted to us may be relayed to the customer during our remediation process.</p>
                </div>
                <!-- col -->
                <div class="col-12">
                  <button type="submit" class="btn btn-fill-primary shadow-off" name="childForm">Report Abuse</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- item -->
        <div class="item">
          <!-- item-head -->
          <div class="item-head">
            <h4 class="accordion-title">Violent Threats and Harassment</h4>
            <p class="accordion-para">Violent threats and harassment are any sort of content pertaining to intent to harm a person(s). These can be threats of physical altercation or content to cause emotional distress.</p>
          </div>
          <!-- item-body -->
          <div class="item-body">
            <!-- abuse-form -->
            <form class="abuse-form" action="mail.php?do=violentForm" method="POST" name="violentForm" id="violentForm">
              <!-- row -->
              <div class="row">
                <!-- col -->
                <div class="col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f9_fullName">
                    <span class="input-title">Your Full Name</span>
                    <input class="form-input" type="text" name="f9_fullName" id="f9_fullName" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f9_email">
                    <span class="input-title">Email Address</span>
                    <input class="form-input" type="email" name="f9_email" id="f9_email" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-6">
                  <!-- form-label -->
                  <label class="form-label" for="f9_urls">
                    <span class="input-title">Evidence URLs</span>
                    <textarea class="form-textarea" name="f9_urls" id="f9_urls" required></textarea>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-6">
                  <!-- form-label -->
                  <label class="form-label" for="f9_info">
                    <span class="input-title">Additional information</span>
                    <textarea class="form-textarea" name="f9_info" id="f9_info" required></textarea>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-4">
                  <!-- form-label -->
                  <label class="form-label" for="f9_digitalSignature">
                    <span class="input-title">Digital Signature</span>
                    <input class="form-input" type="text" name="f9_digitalSignature" id="f9_digitalSignature" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-12 mb-3">
                  <!-- form-para -->
                  <p class="form-para">By entering your name, you affirm all information is true and accurate.<br>All information submitted to us may be relayed to the customer during our remediation process.</p>
                </div>
                <!-- col -->
                <div class="col-12">
                  <button type="submit" class="btn btn-fill-primary shadow-off" name="violentForm">Report Abuse</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- item -->
        <div class="item">
          <!-- item-head -->
          <div class="item-head">
            <h4 class="accordion-title">Other</h4>
            <p class="accordion-para">Please utilize this form to provide HostX with evidence of any abuse outside of our categories listed.</p>
          </div>
          <!-- item-body -->
          <div class="item-body">
            <!-- abuse-form -->
            <form class="abuse-form" action="mail.php?do=other" method="POST" name="otherForm" id="otherForm">
              <!-- row -->
              <div class="row">
                <!-- col -->
                <div class="col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f10_fullName">
                    <span class="input-title">Your Full Name</span>
                    <input class="form-input" type="text" name="f10_fullName" id="f10_fullName" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-md-6">
                  <!-- form-label -->
                  <label class="form-label" for="f10_email">
                    <span class="input-title">Email Address</span>
                    <input class="form-input" type="email" name="f10_email" id="f10_email" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-6">
                  <!-- form-label -->
                  <label class="form-label" for="f10_des">
                    <span class="input-title">Description of issue</span>
                    <textarea class="form-textarea" name="f10_des" id="f10_des" required></textarea>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-6">
                  <!-- form-label -->
                  <label class="form-label" for="f10_urls">
                    <span class="input-title">Evidence URLs</span>
                    <textarea class="form-textarea" name="f10_urls" id="f10_urls" required></textarea>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-12">
                  <!-- form-label -->
                  <label class="form-label" for="f10_comments">
                    <span class="input-title">Comments</span>
                    <textarea class="form-textarea" name="f10_comments" id="f10_comments" required></textarea>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-lg-4">
                  <!-- form-label -->
                  <label class="form-label" for="f10_digitalSignature">
                    <span class="input-title">Digital Signature</span>
                    <input class="form-input" type="text" name="f10_digitalSignature" id="f9_digitalSignature" required>
                    <span class="notify notify-valid"><img data-src="assets/images/pages/abuse/fi-sr-check.svg" class="lazy img-fluid" alt="Icon"></span>
                    <span class="notify notify-error"><img data-src="assets/images/pages/abuse/fi-sr-cross.svg" class="lazy img-fluid" alt="Icon"></span>
                  </label>
                </div>
                <!-- col -->
                <div class="col-12 mb-3">
                  <!-- form-para -->
                  <p class="form-para">By entering your name, you affirm all information is true and accurate.<br>All information submitted to us may be relayed to the customer during our remediation process.</p>
                </div>
                <!-- col -->
                <div class="col-12">
                  <button type="submit" class="btn btn-fill-primary shadow-off" name="otherForm">Report Abuse</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Notifications -->
  <div class="notifications">
    <!-- notify-i -->
    <div class="notify notify-1 success">
      <!-- div -->
      <div class="d-flex align-items-center">
        <!-- icon -->
        <img data-src="assets/images/theme/smile.gif" class="img-fluid mr-1" width="70" alt="Xerox">
        <!-- para-1 -->
        <p class="para-1 mb-0"><span>Success!,</span> your request has been successfully sent!, we will reply to you soon.</p>
      </div>
      <!-- close-btn -->
      <button class="close-notify-btn close__notify__btn d-flex align-items-center justify-content-center" type="button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" id="close">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2929 0.292893C10.6834 -0.0976311 11.3166 -0.0976311 11.7071 0.292893C12.0976 0.683417 12.0976 1.31658 11.7071 1.70711L7.41421 6L11.7071 10.2929C12.0976 10.6834 12.0976 11.3166 11.7071 11.7071C11.3166 12.0976 10.6834 12.0976 10.2929 11.7071L6 7.41421L1.70711 11.7071C1.31658 12.0976 0.683418 12.0976 0.292894 11.7071C-0.0976312 11.3166 -0.0976312 10.6834 0.292894 10.2929L4.58579 6L0.292893 1.70711C-0.0976309 1.31658 -0.0976309 0.683417 0.292893 0.292893C0.683418 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L6 4.58579L10.2929 0.292893Z"></path>
        </svg>
      </button>
    </div>
    <!-- notify-i -->
    <div class="notify notify-1 fail">
      <!-- div -->
      <div class="d-flex align-items-center">
        <!-- icon -->
        <img data-src="assets/images/theme/emoji_2.gif" class="img-fluid mr-1" width="70" alt="Xerox">
        <!-- para-1 -->
        <p class="para-1 mb-0"><span>Sorry!,</span> it seems to be a server problem right now!, please try again later.</p>
      </div>

      <!-- close-btn -->
      <button class="close-notify-btn close__notify__btn d-flex align-items-center justify-content-center" type="button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" id="close">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2929 0.292893C10.6834 -0.0976311 11.3166 -0.0976311 11.7071 0.292893C12.0976 0.683417 12.0976 1.31658 11.7071 1.70711L7.41421 6L11.7071 10.2929C12.0976 10.6834 12.0976 11.3166 11.7071 11.7071C11.3166 12.0976 10.6834 12.0976 10.2929 11.7071L6 7.41421L1.70711 11.7071C1.31658 12.0976 0.683418 12.0976 0.292894 11.7071C-0.0976312 11.3166 -0.0976312 10.6834 0.292894 10.2929L4.58579 6L0.292893 1.70711C-0.0976309 1.31658 -0.0976309 0.683417 0.292893 0.292893C0.683418 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L6 4.58579L10.2929 0.292893Z"></path>
        </svg>
      </button>
    </div>
  </div>

  <!-- Sounds -->
  <audio id="success-notify" preload="auto">
    <source src="assets/sounds/success_notification.mp3">
  </audio>
  <audio id="failure-notify" preload="auto">
    <source src="assets/sounds/failure_notification.mp3">
  </audio>

<?php
  // Footer
  include 'templates/footer.inc.php';
?>