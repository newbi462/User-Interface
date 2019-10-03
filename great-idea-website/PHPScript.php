<?php
  if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["reason"]) || empty($_POST["comments"])) {
    $fail = "failcontact.php";

    $location = "Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/" . $fail;
    header($location);

//    echo "To help prevent SPAM all * fields are required to make a submission<br /><br />";
//    echo "";
  }
  else {
    $email_to      = "sendtoemail@test.com"; // Enter valid email address here.
    $email_subject = "Great Idea Contact From" . $_POST["reason"] . " for " . "  ";
    $mesage_sent = "Unit1/User-Interface/great-idea-website/confirm.html";

// The body or text of the email
    $email_body .= "Name:  " . $_POST["name"] . "\n";
    $email_body .= "Email: " . $_POST["email"] . "\n\n";
//    $email_body .= "Budget: " . $_POST["budget"] . "\n\n";
    $email_body .= $_POST["comments"] . "\n";

// email form / sender
    $email_from = "From: " . $_POST["email"];

// Injection protection
    $email_from = urldecode($email_from);
      if (eregi("\r",$email_from) || eregi("\n",$email_from) || eregi(";",$email_from)) {
	die("Afraid that is not allowed!");
      }

// Send the email
  mail($email_to, $email_subject, $email_body, $email_from);

// Redirect to confirm page
  $location = "Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/" . $mesage_sent;
  header($location);

//    echo "Fields Correct<br /><br />";
  }



// below here is copy email

  if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["comments"])) {
    $fail = "Unit1/User-Interface/great-idea-website/failcontact.html";

    $location = "Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/" . $fail;
    header($location);

//    echo "To help prevent SPAM all * fields are required to make a submission<br /><br />";
//    echo "";
  }
  else {
    $email_toc      = "To: " . $_POST["email"]; // Enter valid email address here.
    $email_subjectc = "Thank you for contacting Great Idea Contact From" . $_POST["reason"] . " ";
    $mesage_sentc = "Unit1/User-Interface/great-idea-website/confirm.html";

// The body or text of the email
    $email_bodyc .= "Thank you. Your contact request has been received. In most cases you will hear back from us in 1-3 biz days. A copy of your message follows:" . "\n\n";


    $email_bodyc .= "Name:  " . $_POST["name"] . "\n";
    $email_body .= "Email: " . $_POST["email"] . "\n";
//    $email_body .= "Budget: " . $_POST["budget"] . "\n\n";
    $email_bodyc .= $_POST["comments"] . "\n";

// email form / sender
    $email_fromc = "From: " . $_POST["email"];

// Injection protection
    $email_fromc = urldecode($email_from);
      if (eregi("\r",$email_from) || eregi("\n",$email_from) || eregi(";",$email_from)) {
	die("Afraid that is not allowed!");
      }

// Send the email
  mail($email_toc, $email_subjectc, $email_bodyc, $email_fromc);

// Redirect to confirm page
  $location = "Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/" . $mesage_sent;
  header($location);

//    echo "Fields Correct<br /><br />";
  }
?>
