<?php

  if (
    empty($_GET['firstname']) ||
    empty($_GET['lastname']) ||
    empty($_GET['phonenumber']) ||
    empty($_GET['email']) ||
    empty($_GET['streetaddr1']) ||
    empty($_GET['city']) ||
    empty($_GET['state']) ||
    empty($_GET['zipcode']) || (strlen($_GET['zipcode']) > 5) ||
    empty($_GET['agree']) ||
    (!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) ) {
    echo "<strong style=\"color:red;\">Required information is missing or incorrect.</strong>";
    exit();
  }

  include 'lib/meekrodb.2.3.class.php';
  include 'db-config.php';

  $firstname = $_GET['firstname'];
  $lastname = $_GET['lastname'];
  $phonenumber = $_GET['phonenumber'];
  $email = $_GET['email'];
  $streetaddr1 = $_GET['streetaddr1'];
  $streetaddr2 = $_GET['streetaddr2'];
  $city = $_GET['city'];
  $state = $_GET['state'];
  $zipcode = $_GET['zipcode'];

  // SQL insert statement
  DB::insert('entries', array(
    'firstname' => $firstname,
    'lastname' => $lastname,
    'phonenumber' => $phonenumber,
    'email' => $email,
    'streetaddress1' => $streetaddr1,
    'streetaddress2' => $streetaddr2,
    'city' => $city,
    'state' => $state,
    'zipcode' => $zipcode
  ));
?>

<div class="col-md-12">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Success</h3>
    </div>
    <div class="panel-body">
      <p class="lead">You have successfully opted out of receiving electronic giving records.</p>
      <p>You are set to receive a paper copy of your giving records. Let us know if you have any questions by calling April Guenther at (407) 949-4000. </p>
    </div>
  </div>
</div>

<?php
require_once 'lib/swiftmailer/swift_required.php';

  // Create the Transport
  $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, 'tls')
    // Needs to be changed to the correct info
    ->setUsername('XXXXXXXXX@northlandchurch.net')
    ->setPassword('XXXXXXXXX')
    ;

  // Message variables:
  $emailname = ucwords($firstname);

  //HTML email body
  $HTMLbody = <<<BODY
  We have received your request to opt out of receiving a paperless giving
  statment. You are now set to receive a paper copy of your giving records. Let
  us know if you have any questions by calling April Guenther at (407) 949-4000.

  Northland Finance Team.

BODY;


  // Create the message
  $message = Swift_Message::newInstance()
    ->setSubject('Optout of Paperless Giving Statements Confirmation')
    // Set the From address with an associative array
    ->setFrom(array('no-reply@northlandchurch.net' => 'Northland'))
    // Set the To addresses with an associative array
    ->setTo(array($email => $emailname))
    ->setBody($HTMLbody)
    // And optionally an alternative body
    ->addPart($HTMLbody)
    ;

    // Create the Mailer using your created Transport
    $mailer = Swift_Mailer::newInstance($transport);

    // send email!
    $result = $mailer->send($message);

 ?>
