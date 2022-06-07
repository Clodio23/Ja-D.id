<?php
  use PHPMailer\PHPMailer\PHPMailer;

  // URL Function
  $do = isset($_GET['do']) ? $_GET['do'] : $do = 'Index';

  // FOR: Index
  if ($do == 'Index') {
    header('location: 404.php');
    exit();
  }

  // FOR: DMCA Form
  elseif ($do == 'dmca') {
    if (isset($_POST['dmcaForm'])) {

      // Form vars
      $copyrightOwner     = isset($_POST['copyrightOwnerFullName']) ? $_POST['copyrightOwnerFullName'] : $copyrightOwner = '';
      $infringingContent  = isset($_POST['infringingContent']) ? $_POST['infringingContent'] : $infringingContent = '';
      $digitalSignature   = isset($_POST['digitalSignature']) ? $_POST['digitalSignature'] : $digitalSignature = '';
      $originalContent    = isset($_POST['originalContent']) ? $_POST['originalContent'] : $originalContent = '';
      $phoneNumber        = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : $phoneNumber = '';
      $fullName           = isset($_POST['fullName']) ? $_POST['fullName'] : $fullName = '';
      $address            = isset($_POST['address']) ? $_POST['address'] : $address = '';
      $email              = isset($_POST['email']) ? $_POST['email'] : $email = '';

      // Get PHPMailer's files
      require_once "PHPMailer/PHPMailer.php";
      require_once "PHPMailer/SMTP.php";
      require_once "PHPMailer/Exception.php";

      // Create new function
      $mail = new PHPMailer();

      // SMTP settings
      // $mail->SMTPDebug = 2;
      $mail->isSMTP();
      $mail->Host = 'host_host_host.com'; // Hosting server
      $mail->SMTPAuth = true;
      $mail->Username = 'username@username.com'; // Your username
      $mail->Password = ''; // Your password
      $mail->Port = 465;
      // $mail->Port = 587;
      $mail->SMTPSecure = 'ssl';
      // Email settings
      $mail->isHTML(true);
      $mail->setFrom("username@username.com", $fullName); // Your email
      $mail->addAddress("devzilla.ar@gmail.com"); // Recipient
      $mail->ClearReplyTos();
      $mail->addReplyTo($email, $fullName);
      $mail->Subject = ("DMCA Takedown");
      $message = '
        <table bgcolor="#ffffff" style="padding:15px;" class="es-content-body" cellpadding="0" cellspacing="0" width="600">
          <tbody>
            <tr>
              <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
                <table cellpadding="0" cellspacing="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="560" class="esd-container-frame" valign="top">
                        <table cellpadding="0" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <td class="esd-block-text es-p20b">
                                <h2>DMCA Takedown</h2>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
                <table cellpadding="0" cellspacing="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="560" class="esd-container-frame" valign="top">
                        <table cellpadding="0" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <td align="left" class="esd-block-text">
                                <p><strong>Details of your report:</strong></p>
                                <ul style="padding-left:20px">
                                  <li><span style="display: inline-block; min-width: 110px;">Copyright Owner Name:</span>'.$copyrightOwner.'</li>
                                  <li><span style="display: inline-block; min-width: 110px;">Full Name:</span>'.$fullName.'</li>
                                  <li><span style="display: inline-block; min-width: 110px;">Email Address:</span>'.$email.'</li>
                                  <li><span style="display: inline-block; min-width: 110px;">Digital Signature:</span>'.$digitalSignature.'</li>
                                </ul>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td width="560" class="esd-container-frame" valign="top">
                        <table cellpadding="0" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <td align="left" class="esd-block-text">
                                <p><b>URL(s) and/or a description of the infringing content</b></p>
                                <ul style="padding-left:20px">
                                  <li>'.$infringingContent.'</li>
                                </ul>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td width="560" class="esd-container-frame" valign="top">
                        <table cellpadding="0" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <td align="left" class="esd-block-text">
                                <p><b>URL(s) and/or a description of the original content</b></p>
                                <ul style="padding-left:20px">
                                  <li>'.$originalContent.'</li>
                                </ul>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td width="560" class="esd-container-frame" valign="top">
                        <table cellpadding="0" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <td align="left" class="esd-block-text">
                                <p><strong>Personal Information:</strong></p>
                                <ul style="padding-left:20px">
                                  <li><span style="display: inline-block; min-width: 110px;">Email:</span>'.$email.'</li>
                                  <li><span style="display: inline-block; min-width: 110px;">Full name:</span>'.$fullName.'</li>
                                  <li><span style="display: inline-block; min-width: 110px;">Phone:</span>'.$phoneNumber.'</li>
                                  <li><span style="display: inline-block; min-width: 110px;">Address:</span>'.$address.'</li>
                                  <li><span style="display: inline-block; min-width: 110px;">Signature:</span>'.$digitalSignature.'</li>
                                </ul>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>';
      $mail->Body = $message;

      // Check if mail sent
      if($mail->send()) {
        $status = 'success';
        $response = 'Email is sent!';
        header('Location: abuse.php?r=1');
      }
      else {
        $status = 'failed';
        $response = 'Something is wrong: <br>!' . $mail->ErrorInfo;
        header('Location: abuse.php?r=2');
      }

      exit(json_encode(array('status' => $status, 'response' => $response)));
    }
  }

  // FOR: Trademark Infringement Form
  elseif ($do == 'trademark') {
    if (isset($_POST['trademarkForm'])) {

    // Form vars
    $registrationOffice  = isset($_POST['f2_registrationOffice']) ? $_POST['f2_registrationOffice'] : $registrationOffice = '';
    $infringingContent   = isset($_POST['f2_infringingContent']) ? $_POST['f2_infringingContent'] : $infringingContent = '';
    $digitalSignature    = isset($_POST['f2_digitalSignature']) ? $_POST['f2_digitalSignature'] : $digitalSignature = '';
    $trademarkedWord     = isset($_POST['f2_trademarkedWord']) ? $_POST['f2_trademarkedWord'] : $trademarkedWord = '';
    $phoneNumber         = isset($_POST['f2_phoneNumber']) ? $_POST['f2_phoneNumber'] : $phoneNumber = '';
    $comments            = isset($_POST['f2_comments']) ? $_POST['f2_comments'] : $comments = '';
    $fullName            = isset($_POST['f2_fullName']) ? $_POST['f2_fullName'] : $fullName = '';
    $address             = isset($_POST['f2_address']) ? $_POST['f2_address'] : $address = '';
    $email               = isset($_POST['f2_email']) ? $_POST['f2_email'] : $email = '';

    // Get PHPMailer's files
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    // Create new function
    $mail = new PHPMailer();

    // SMTP settings
    // $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'host_host_host.com'; // Hosting server
    $mail->SMTPAuth = true;
    $mail->Username = 'username@username.com'; // Your username
    $mail->Password = ''; // Your password
    $mail->Port = 465;
    // $mail->Port = 587;
    $mail->SMTPSecure = 'ssl';
    // Email settings
    $mail->isHTML(true);
    $mail->setFrom("username@username.com", $fullName); // Your email
    $mail->addAddress("devzilla.ar@gmail.com"); // Recipient
    $mail->ClearReplyTos();
    $mail->addReplyTo($email, $fullName);
    $mail->Subject = ("Trademark Infringement");
    $message = '
      <table bgcolor="#ffffff" style="padding:15px;" class="es-content-body" cellpadding="0" cellspacing="0" width="600">
        <tbody>
          <tr>
            <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td class="esd-block-text es-p20b">
                              <h2>Trademark Infringement</h2>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr>
            <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><strong>Details of your report:</strong></p>
                              <ul style="padding-left:20px">
                                <li><span style="display: inline-block; min-width: 110px;">Trademarked word/symbol:</span>'.$trademarkedWord.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Registration office, Country:</span>'.$registrationOffice.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Full Name:</span>'.$fullName.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Email Address:</span>'.$email.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Digital Signature:</span>'.$digitalSignature.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><b>URL(s) and/or a description of the infringing content</b></p>
                              <ul style="padding-left:20px">
                                <li>'.$infringingContent.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><b>Comments/Commercial Nexus</b></p>
                              <ul style="padding-left:20px">
                                <li>'.$comments.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><strong>Personal Information:</strong></p>
                              <ul style="padding-left:20px">
                                <li><span style="display: inline-block; min-width: 110px;">Email:</span>'.$email.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Full name:</span>'.$fullName.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Phone:</span>'.$phoneNumber.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Address:</span>'.$address.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Signature:</span>'.$digitalSignature.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>';
    $mail->Body = $message;

    // Check if mail sent
    if($mail->send()) {
      $status = 'success';
      $response = 'Email is sent!';
      header('Location: abuse.php?r=1');
    }
    else {
      $status = 'failed';
      $response = 'Something is wrong: <br>!' . $mail->ErrorInfo;
      header('Location: abuse.php?r=2');
    }

    exit(json_encode(array('status' => $status, 'response' => $response)));

  }
  }

  // FOR: Spam Form
  elseif ($do == 'spam') {
    if (isset($_POST['spamForm'])) {

      // Form vars
      $digitalSignature = isset($_POST['f3_digitalSignature']) ? $_POST['f3_digitalSignature'] : $digitalSignature = '';
      $message          = isset($_POST['f3_messageBody']) ? $_POST['f3_messageBody'] : $message = '';
      $fullName         = isset($_POST['f3_fullName']) ? $_POST['f3_fullName'] : $fullName = '';
      $headers          = isset($_POST['f3_headers']) ? $_POST['f3_headers'] : $headers = '';
      $email            = isset($_POST['f3_email']) ? $_POST['f3_email'] : $email = '';
      $urls             = isset($_POST['f3_urls']) ? $_POST['f3_urls'] : $urls = '';

      // Get PHPMailer's files
      require_once "PHPMailer/PHPMailer.php";
      require_once "PHPMailer/SMTP.php";
      require_once "PHPMailer/Exception.php";

      // Create new function
      $mail = new PHPMailer();

      // SMTP settings
      // $mail->SMTPDebug = 2;
      $mail->isSMTP();
      $mail->Host = 'host_host_host.com'; // Hosting server
      $mail->SMTPAuth = true;
      $mail->Username = 'username@username.com'; // Your username
      $mail->Password = ''; // Your password
      $mail->Port = 465;
      // $mail->Port = 587;
      $mail->SMTPSecure = 'ssl';
      // Email settings
      $mail->isHTML(true);
      $mail->setFrom("username@username.com", $fullName); // Your email
      $mail->addAddress("devzilla.ar@gmail.com"); // Recipient
      $mail->ClearReplyTos();
      $mail->addReplyTo($email, $fullName);
      $mail->Subject = ("Spam");
      $message = '
        <table bgcolor="#ffffff" style="padding:15px;" class="es-content-body" cellpadding="0" cellspacing="0" width="600">
          <tbody>
            <tr>
              <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
                <table cellpadding="0" cellspacing="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="560" class="esd-container-frame" valign="top">
                        <table cellpadding="0" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <td class="esd-block-text es-p20b">
                                <h2>Spam</h2>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
                <table cellpadding="0" cellspacing="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="560" class="esd-container-frame" valign="top">
                        <table cellpadding="0" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <td align="left" class="esd-block-text">
                                <p><strong>Details of your report:</strong></p>
                                <ul style="padding-left:20px">
                                  <li><span style="display: inline-block; min-width: 110px;">Full Name:</span>'.$fullName.'</li>
                                  <li><span style="display: inline-block; min-width: 110px;">Email Address:</span>'.$email.'</li>
                                  <li><span style="display: inline-block; min-width: 110px;">Digital Signature:</span>'.$digitalSignature.'</li>
                                </ul>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td width="560" class="esd-container-frame" valign="top">
                        <table cellpadding="0" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <td align="left" class="esd-block-text">
                                <p><b>Headers from email received</b></p>
                                <ul style="padding-left:20px">
                                  <li>'.$headers.'</li>
                                </ul>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td width="560" class="esd-container-frame" valign="top">
                        <table cellpadding="0" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <td align="left" class="esd-block-text">
                                <p><b>Message Body</b></p>
                                <ul style="padding-left:20px">
                                  <li>'.$message.'</li>
                                </ul>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td width="560" class="esd-container-frame" valign="top">
                        <table cellpadding="0" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <td align="left" class="esd-block-text">
                                <p><b>Spamvertisement URLs</b></p>
                                <ul style="padding-left:20px">
                                  <li>'.$urls.'</li>
                                </ul>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td width="560" class="esd-container-frame" valign="top">
                        <table cellpadding="0" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <td align="left" class="esd-block-text">
                                <p><strong>Personal Information:</strong></p>
                                <ul style="padding-left:20px">
                                  <li><span style="display: inline-block; min-width: 110px;">Email:</span>'.$email.'</li>
                                  <li><span style="display: inline-block; min-width: 110px;">Full name:</span>'.$fullName.'</li>                                
                                  <li><span style="display: inline-block; min-width: 110px;">Signature:</span>'.$digitalSignature.'</li>
                                </ul>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>';
      $mail->Body = $message;

      // Check if mail sent
      if($mail->send()) {
        $status = 'success';
        $response = 'Email is sent!';
        header('Location: abuse.php?r=1');
      }
      else {
        $status = 'failed';
        $response = 'Something is wrong: <br>!' . $mail->ErrorInfo;
        header('Location: abuse.php?r=2');
      }

      exit(json_encode(array('status' => $status, 'response' => $response)));

    }
  }

  // FOR: Phishing Form
  elseif ($do == 'phishing') {
    if (isset($_POST['phishingForm'])) {

      // Form vars
      $digitalSignature = isset($_POST['f4_digitalSignature']) ? $_POST['f4_digitalSignature'] : $digitalSignature = '';
      $fullName         = isset($_POST['f4_fullName']) ? $_POST['f4_fullName'] : $fullName = '';
      $target           = isset($_POST['f4_target']) ? $_POST['f4_target'] : $target = '';
      $email            = isset($_POST['f4_email']) ? $_POST['f4_email'] : $email = '';
      $urls             = isset($_POST['f4_urls']) ? $_POST['f4_urls'] : $urls = '';
      $logs             = isset($_POST['f4_logs']) ? $_POST['f4_logs'] : $logs = '';

      // Get PHPMailer's files
      require_once "PHPMailer/PHPMailer.php";
      require_once "PHPMailer/SMTP.php";
      require_once "PHPMailer/Exception.php";

      // Create new function
      $mail = new PHPMailer();

      // SMTP settings
      // $mail->SMTPDebug = 2;
      $mail->isSMTP();
      $mail->Host = 'host_host_host.com'; // Hosting server
      $mail->SMTPAuth = true;
      $mail->Username = 'username@username.com'; // Your username
      $mail->Password = ''; // Your password
      $mail->Port = 465;
      // $mail->Port = 587;
      $mail->SMTPSecure = 'ssl';
      // Email settings
      $mail->isHTML(true);
      $mail->setFrom("username@username.com", $fullName); // Your email
      $mail->addAddress("devzilla.ar@gmail.com"); // Recipient
      $mail->ClearReplyTos();
      $mail->addReplyTo($email, $fullName);
      $mail->Subject = ("Phishing");
      $message = '
      <table bgcolor="#ffffff" style="padding:15px;" class="es-content-body" cellpadding="0" cellspacing="0" width="600">
        <tbody>
          <tr>
            <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td class="esd-block-text es-p20b">
                              <h2>Phishing</h2>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr>
            <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><strong>Details of your report:</strong></p>
                              <ul style="padding-left:20px">
                                <li><span style="display: inline-block; min-width: 110px;">Full Name:</span>'.$fullName.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Email Address:</span>'.$email.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Target of Phishing Campaign:</span>'.$target.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Digital Signature:</span>'.$digitalSignature.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><b>Evidence URLs</b></p>
                              <ul style="padding-left:20px">
                                <li>'.$urls.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><b>Additional Evidence or Logs</b></p>
                              <ul style="padding-left:20px">
                                <li>'.$logs.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><strong>Personal Information:</strong></p>
                              <ul style="padding-left:20px">
                                <li><span style="display: inline-block; min-width: 110px;">Email:</span>'.$email.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Full name:</span>'.$fullName.'</li>                                
                                <li><span style="display: inline-block; min-width: 110px;">Signature:</span>'.$digitalSignature.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>';
      $mail->Body = $message;

      // Check if mail sent
      if($mail->send()) {
        $status = 'success';
        $response = 'Email is sent!';
        header('Location: abuse.php?r=1');
      }
      else {
        $status = 'failed';
        $response = 'Something is wrong: <br>!' . $mail->ErrorInfo;
        header('Location: abuse.php?r=2');
      }

      exit(json_encode(array('status' => $status, 'response' => $response)));

    }
  }

  // FOR: Malware Form
  elseif ($do == 'malware') {
    if (isset($_POST['malwareForm'])) {

      // Form vars
      $digitalSignature = isset($_POST['f5_digitalSignature']) ? $_POST['f5_digitalSignature'] : $digitalSignature = '';
      $fullName         = isset($_POST['f5_fullName']) ? $_POST['f5_fullName'] : $fullName = '';
      $email            = isset($_POST['f5_email']) ? $_POST['f5_email'] : $email = '';
      $urls             = isset($_POST['f5_urls']) ? $_POST['f5_urls'] : $urls = '';
      $logs             = isset($_POST['f5_logs']) ? $_POST['f5_logs'] : $logs = '';

      // Get PHPMailer's files
      require_once "PHPMailer/PHPMailer.php";
      require_once "PHPMailer/SMTP.php";
      require_once "PHPMailer/Exception.php";

      // Create new function
      $mail = new PHPMailer();

      // SMTP settings
      // $mail->SMTPDebug = 2;
      $mail->isSMTP();
      $mail->Host = 'host_host_host.com'; // Hosting server
      $mail->SMTPAuth = true;
      $mail->Username = 'username@username.com'; // Your username
      $mail->Password = ''; // Your password
      $mail->Port = 465;
      // $mail->Port = 587;
      $mail->SMTPSecure = 'ssl';
      // Email settings
      $mail->isHTML(true);
      $mail->setFrom("username@username.com", $fullName); // Your email
      $mail->addAddress("devzilla.ar@gmail.com"); // Recipient
      $mail->ClearReplyTos();
      $mail->addReplyTo($email, $fullName);
      $mail->Subject = ("Malware");
      $message = '
      <table bgcolor="#ffffff" style="padding:15px;" class="es-content-body" cellpadding="0" cellspacing="0" width="600">
        <tbody>
          <tr>
            <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td class="esd-block-text es-p20b">
                              <h2>Malware</h2>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr>
            <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><strong>Details of your report:</strong></p>
                              <ul style="padding-left:20px">
                                <li><span style="display: inline-block; min-width: 110px;">Full Name:</span>'.$fullName.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Email Address:</span>'.$email.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Digital Signature:</span>'.$digitalSignature.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><b>Evidence URLs</b></p>
                              <ul style="padding-left:20px">
                                <li>'.$urls.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><b>Additional Evidence or Logs</b></p>
                              <ul style="padding-left:20px">
                                <li>'.$logs.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><strong>Personal Information:</strong></p>
                              <ul style="padding-left:20px">
                                <li><span style="display: inline-block; min-width: 110px;">Email:</span>'.$email.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Full name:</span>'.$fullName.'</li>                                
                                <li><span style="display: inline-block; min-width: 110px;">Signature:</span>'.$digitalSignature.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>';
      $mail->Body = $message;

      // Check if mail sent
      if($mail->send()) {
        $status = 'success';
        $response = 'Email is sent!';
        header('Location: abuse.php?r=1');
      }
      else {
        $status = 'failed';
        $response = 'Something is wrong: <br>!' . $mail->ErrorInfo;
        header('Location: abuse.php?r=2');
      }

      exit(json_encode(array('status' => $status, 'response' => $response)));

    }
  }

  // FOR: Botnet Form
  elseif ($do == 'botnet') {
    if (isset($_POST['botnetForm'])) {

      // Form vars
      $digitalSignature = isset($_POST['f6_digitalSignature']) ? $_POST['f6_digitalSignature'] : $digitalSignature = '';
      $fullName         = isset($_POST['f6_fullName']) ? $_POST['f6_fullName'] : $fullName = '';
      $email            = isset($_POST['f6_email']) ? $_POST['f6_email'] : $email = '';
      $urls             = isset($_POST['f6_urls']) ? $_POST['f6_urls'] : $urls = '';

      // Get PHPMailer's files
      require_once "PHPMailer/PHPMailer.php";
      require_once "PHPMailer/SMTP.php";
      require_once "PHPMailer/Exception.php";

      // Create new function
      $mail = new PHPMailer();

      // SMTP settings
      // $mail->SMTPDebug = 2;
      $mail->isSMTP();
      $mail->Host = 'host_host_host.com'; // Hosting server
      $mail->SMTPAuth = true;
      $mail->Username = 'username@username.com'; // Your username
      $mail->Password = ''; // Your password
      $mail->Port = 465;
      // $mail->Port = 587;
      $mail->SMTPSecure = 'ssl';
      // Email settings
      $mail->isHTML(true);
      $mail->setFrom("username@username.com", $fullName); // Your email
      $mail->addAddress("devzilla.ar@gmail.com"); // Recipient
      $mail->ClearReplyTos();
      $mail->addReplyTo($email, $fullName);
      $mail->Subject = ("Botnet");
      $message = '
      <table bgcolor="#ffffff" style="padding:15px;" class="es-content-body" cellpadding="0" cellspacing="0" width="600">
        <tbody>
          <tr>
            <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td class="esd-block-text es-p20b">
                              <h2>Botnet</h2>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr>
            <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><strong>Details of your report:</strong></p>
                              <ul style="padding-left:20px">
                                <li><span style="display: inline-block; min-width: 110px;">Full Name:</span>'.$fullName.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Email Address:</span>'.$email.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Digital Signature:</span>'.$digitalSignature.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><b>Evidence URLs</b></p>
                              <ul style="padding-left:20px">
                                <li>'.$urls.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><strong>Personal Information:</strong></p>
                              <ul style="padding-left:20px">
                                <li><span style="display: inline-block; min-width: 110px;">Email:</span>'.$email.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Full name:</span>'.$fullName.'</li>                                
                                <li><span style="display: inline-block; min-width: 110px;">Signature:</span>'.$digitalSignature.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>';
      $mail->Body = $message;

      // Check if mail sent
      if($mail->send()) {
        $status = 'success';
        $response = 'Email is sent!';
        header('Location: abuse.php?r=1');
      }
      else {
        $status = 'failed';
        $response = 'Something is wrong: <br>!' . $mail->ErrorInfo;
        header('Location: abuse.php?r=2');
        header('Location: abuse.php?r=2');
      }

      exit(json_encode(array('status' => $status, 'response' => $response)));

    }
  }

  // FOR: Intrusion Form
  elseif ($do == 'intrusion') {
    if (isset($_POST['intrusionForm'])) {

      // Form vars
      $digitalSignature = isset($_POST['f7_digitalSignature']) ? $_POST['f7_digitalSignature'] : $digitalSignature = '';
      $timezone         = isset($_POST['f7_timezone']) ? $_POST['f7_timezone'] : $timezone = '';
      $fullName         = isset($_POST['f7_fullName']) ? $_POST['f7_fullName'] : $fullName = '';
      $email            = isset($_POST['f7_email']) ? $_POST['f7_email'] : $email = '';
      $logs             = isset($_POST['f7_logs']) ? $_POST['f7_logs'] : $logs = '';

      // Get PHPMailer's files
      require_once "PHPMailer/PHPMailer.php";
      require_once "PHPMailer/SMTP.php";
      require_once "PHPMailer/Exception.php";

      // Create new function
      $mail = new PHPMailer();

      // SMTP settings
      // $mail->SMTPDebug = 2;
      $mail->isSMTP();
      $mail->Host = 'host_host_host.com'; // Hosting server
      $mail->SMTPAuth = true;
      $mail->Username = 'username@username.com'; // Your username
      $mail->Password = ''; // Your password
      $mail->Port = 465;
      // $mail->Port = 587;
      $mail->SMTPSecure = 'ssl';
      // Email settings
      $mail->isHTML(true);
      $mail->setFrom("username@username.com", $fullName); // Your email
      $mail->addAddress("devzilla.ar@gmail.com"); // Recipient
      $mail->ClearReplyTos();
      $mail->addReplyTo($email, $fullName);
      $mail->Subject = ("Intrusion/exploit attempts (Bruteforce, Scans etc)");
      $message = '
      <table bgcolor="#ffffff" style="padding:15px;" class="es-content-body" cellpadding="0" cellspacing="0" width="600">
        <tbody>
          <tr>
            <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td class="esd-block-text es-p20b">
                              <h2>Intrusion/exploit attempts (Bruteforce, Scans etc)</h2>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr>
            <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><strong>Details of your report:</strong></p>
                              <ul style="padding-left:20px">
                                <li><span style="display: inline-block; min-width: 110px;">Full Name:</span>'.$fullName.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Email Address:</span>'.$email.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Digital Signature:</span>'.$digitalSignature.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><b>Evidence or logs of the activity showing source IP.</b></p>
                              <ul style="padding-left:20px">
                                <li>'.$logs.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><b>Your servers time zone</b></p>
                              <ul style="padding-left:20px">
                                <li>'.$timezone.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><strong>Personal Information:</strong></p>
                              <ul style="padding-left:20px">
                                <li><span style="display: inline-block; min-width: 110px;">Email:</span>'.$email.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Full name:</span>'.$fullName.'</li>                                
                                <li><span style="display: inline-block; min-width: 110px;">Signature:</span>'.$digitalSignature.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>';
      $mail->Body = $message;

      // Check if mail sent
      if($mail->send()) {
        $status = 'success';
        $response = 'Email is sent!';
        header('Location: abuse.php?r=1');
      }
      else {
        $status = 'failed';
        $response = 'Something is wrong: <br>!' . $mail->ErrorInfo;
        header('Location: abuse.php?r=2');
      }

      exit(json_encode(array('status' => $status, 'response' => $response)));

    }
  }

  // FOR: Child Abuse Form
  elseif ($do == 'child') {
    if (isset($_POST['childForm'])) {

      // Form vars
      $digitalSignature = isset($_POST['f8_digitalSignature']) ? $_POST['f8_digitalSignature'] : $digitalSignature = '';
      $fullName         = isset($_POST['f8_fullName']) ? $_POST['f8_fullName'] : $fullName = '';
      $email            = isset($_POST['f8_email']) ? $_POST['f8_email'] : $email = '';
      $urls             = isset($_POST['f8_urls']) ? $_POST['f8_urls'] : $urls = '';

      // Get PHPMailer's files
      require_once "PHPMailer/PHPMailer.php";
      require_once "PHPMailer/SMTP.php";
      require_once "PHPMailer/Exception.php";

      // Create new function
      $mail = new PHPMailer();

      // SMTP settings
      // $mail->SMTPDebug = 2;
      $mail->isSMTP();
      $mail->Host = 'host_host_host.com'; // Hosting server
      $mail->SMTPAuth = true;
      $mail->Username = 'username@username.com'; // Your username
      $mail->Password = ''; // Your password
      $mail->Port = 465;
      // $mail->Port = 587;
      $mail->SMTPSecure = 'ssl';
      // Email settings
      $mail->isHTML(true);
      $mail->setFrom("username@username.com", $fullName); // Your email
      $mail->addAddress("devzilla.ar@gmail.com"); // Recipient
      $mail->ClearReplyTos();
      $mail->addReplyTo($email, $fullName);
      $mail->Subject = ("Child Abuse");
      $message = '
      <table bgcolor="#ffffff" style="padding:15px;" class="es-content-body" cellpadding="0" cellspacing="0" width="600">
        <tbody>
          <tr>
            <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td class="esd-block-text es-p20b">
                              <h2>Child Abuse</h2>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr>
            <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><strong>Details of your report:</strong></p>
                              <ul style="padding-left:20px">
                                <li><span style="display: inline-block; min-width: 110px;">Full Name:</span>'.$fullName.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Email Address:</span>'.$email.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Digital Signature:</span>'.$digitalSignature.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><b>Evidence URLs</b></p>
                              <ul style="padding-left:20px">
                                <li>'.$urls.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><strong>Personal Information:</strong></p>
                              <ul style="padding-left:20px">
                                <li><span style="display: inline-block; min-width: 110px;">Email:</span>'.$email.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Full name:</span>'.$fullName.'</li>                                
                                <li><span style="display: inline-block; min-width: 110px;">Signature:</span>'.$digitalSignature.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>';
      $mail->Body = $message;

      // Check if mail sent
      if($mail->send()) {
        $status = 'success';
        $response = 'Email is sent!';
        header('Location: abuse.php?r=1');
      }
      else {
        $status = 'failed';
        $response = 'Something is wrong: <br>!' . $mail->ErrorInfo;
        header('Location: abuse.php?r=2');
      }

      exit(json_encode(array('status' => $status, 'response' => $response)));

    }
  }

  // FOR: Violent Threats and Harassment Form
  elseif ($do == 'violent') {
    if (isset($_POST['violentForm'])) {

      // Form vars
      $digitalSignature = isset($_POST['f9_digitalSignature']) ? $_POST['f9_digitalSignature'] : $digitalSignature = '';
      $fullName         = isset($_POST['f9_fullName']) ? $_POST['f9_fullName'] : $fullName = '';
      $email            = isset($_POST['f9_email']) ? $_POST['f9_email'] : $email = '';
      $info             = isset($_POST['f9_info']) ? $_POST['f9_info'] : $info = '';
      $urls             = isset($_POST['f9_urls']) ? $_POST['f9_urls'] : $urls = '';

      // Get PHPMailer's files
      require_once "PHPMailer/PHPMailer.php";
      require_once "PHPMailer/SMTP.php";
      require_once "PHPMailer/Exception.php";

      // Create new function
      $mail = new PHPMailer();

      // SMTP settings
      // $mail->SMTPDebug = 2;
      $mail->isSMTP();
      $mail->Host = 'host_host_host.com'; // Hosting server
      $mail->SMTPAuth = true;
      $mail->Username = 'username@username.com'; // Your username
      $mail->Password = ''; // Your password
      $mail->Port = 465;
      // $mail->Port = 587;
      $mail->SMTPSecure = 'ssl';
      // Email settings
      $mail->isHTML(true);
      $mail->setFrom("username@username.com", $fullName); // Your email
      $mail->addAddress("devzilla.ar@gmail.com"); // Recipient
      $mail->ClearReplyTos();
      $mail->addReplyTo($email, $fullName);
      $mail->Subject = ("Violent Threats and Harassment");
      $message = '
      <table bgcolor="#ffffff" style="padding:15px;" class="es-content-body" cellpadding="0" cellspacing="0" width="600">
        <tbody>
          <tr>
            <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td class="esd-block-text es-p20b">
                              <h2>Violent Threats and Harassment</h2>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr>
            <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><strong>Details of your report:</strong></p>
                              <ul style="padding-left:20px">
                                <li><span style="display: inline-block; min-width: 110px;">Full Name:</span>'.$fullName.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Email Address:</span>'.$email.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Digital Signature:</span>'.$digitalSignature.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><b>Evidence URLs</b></p>
                              <ul style="padding-left:20px">
                                <li>'.$urls.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><b>Additional information</b></p>
                              <ul style="padding-left:20px">
                                <li>'.$info.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><strong>Personal Information:</strong></p>
                              <ul style="padding-left:20px">
                                <li><span style="display: inline-block; min-width: 110px;">Email:</span>'.$email.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Full name:</span>'.$fullName.'</li>                                
                                <li><span style="display: inline-block; min-width: 110px;">Signature:</span>'.$digitalSignature.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>';
      $mail->Body = $message;

      // Check if mail sent
      if($mail->send()) {
        $status = 'success';
        $response = 'Email is sent!';
        header('Location: abuse.php?r=1');
      }
      else {
        $status = 'failed';
        $response = 'Something is wrong: <br>!' . $mail->ErrorInfo;
        header('Location: abuse.php?r=2');
      }

      exit(json_encode(array('status' => $status, 'response' => $response)));

    }
  }

  // FOR: Other Form
  elseif ($do == 'other') {
    if (isset($_POST['otherForm'])) {

      // Form vars
      $digitalSignature = isset($_POST['f10_digitalSignature']) ? $_POST['f10_digitalSignature'] : $digitalSignature = '';
      $fullName         = isset($_POST['f10_fullName']) ? $_POST['f10_fullName'] : $fullName = '';
      $comments         = isset($_POST['f10_comments']) ? $_POST['f10_comments'] : $comments = '';
      $email            = isset($_POST['f10_email']) ? $_POST['f10_email'] : $email = '';
      $urls             = isset($_POST['f10_urls']) ? $_POST['f10_urls'] : $urls = '';
      $des              = isset($_POST['f10_des']) ? $_POST['f10_des'] : $des = '';

      // Get PHPMailer's files
      require_once "PHPMailer/PHPMailer.php";
      require_once "PHPMailer/SMTP.php";
      require_once "PHPMailer/Exception.php";

      // Create new function
      $mail = new PHPMailer();

      // SMTP settings
      // $mail->SMTPDebug = 2;
      $mail->isSMTP();
      $mail->Host = 'host_host_host.com'; // Hosting server
      $mail->SMTPAuth = true;
      $mail->Username = 'username@username.com'; // Your username
      $mail->Password = ''; // Your password
      $mail->Port = 465;
      // $mail->Port = 587;
      $mail->SMTPSecure = 'ssl';
      // Email settings
      $mail->isHTML(true);
      $mail->setFrom("username@username.com", $fullName); // Your email
      $mail->addAddress("devzilla.ar@gmail.com"); // Recipient
      $mail->ClearReplyTos();
      $mail->addReplyTo($email, $fullName);
      $mail->Subject = ("Other");
      $message = '
      <table bgcolor="#ffffff" style="padding:15px;" class="es-content-body" cellpadding="0" cellspacing="0" width="600">
        <tbody>
          <tr>
            <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td class="esd-block-text es-p20b">
                              <h2>Other</h2>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr>
            <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><strong>Details of your report:</strong></p>
                              <ul style="padding-left:20px">
                                <li><span style="display: inline-block; min-width: 110px;">Full Name:</span>'.$fullName.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Email Address:</span>'.$email.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Digital Signature:</span>'.$digitalSignature.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><b>Description of issue</b></p>
                              <ul style="padding-left:20px">
                                <li>'.$des.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><b>Evidence URLs</b></p>
                              <ul style="padding-left:20px">
                                <li>'.$urls.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><b>Comments</b></p>
                              <ul style="padding-left:20px">
                                <li>'.$comments.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td width="560" class="esd-container-frame" valign="top">
                      <table cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td align="left" class="esd-block-text">
                              <p><strong>Personal Information:</strong></p>
                              <ul style="padding-left:20px">
                                <li><span style="display: inline-block; min-width: 110px;">Email:</span>'.$email.'</li>
                                <li><span style="display: inline-block; min-width: 110px;">Full name:</span>'.$fullName.'</li>                                
                                <li><span style="display: inline-block; min-width: 110px;">Signature:</span>'.$digitalSignature.'</li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>';
      $mail->Body = $message;

      // Check if mail sent
      if($mail->send()) {
        $status = 'success';
        $response = 'Email is sent!';
        header('Location: abuse.php?r=1');
      }
      else {
        $status = 'failed';
        $response = 'Something is wrong: <br>!' . $mail->ErrorInfo;
        header('Location: abuse.php?r=2');
      }

      exit(json_encode(array('status' => $status, 'response' => $response)));

    }
  }

?>