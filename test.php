<?php

include './plug-in/swift-mailer/lib/swift_required.php';

$transport = Swift_MailTransport::newInstance();
$mailer = Swift_Mailer::newInstance($transport);
// Create the message
$message = Swift_Message::newInstance();

  // Give the message a subject
 $message ->setSubject('Your subject');

  // Set the From address with an associative array
  $message->setFrom(array('info@sgbcc.com.sg' => 'SBCC'));

  // Set the To addresses with an associative array
  $message->setTo(array('tracy1kobe@gmail.com' => 'Allen'));

  // Give it a body
  $message->setBody('Here is the message itself');

$result = $mailer->send($message);
?>
