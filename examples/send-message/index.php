<?php

// clicked on submit
if (isset($_POST["action"]) && $_POST["action"] === "Submit") {

  // load Webhook
  require_once "../../LoadWebhook.php";

  $message    = $_POST["content"];
  $username   = $_POST["username"] ?? "www.magictm.com";
  $avatar_url = $_POST["avatar_url"] ?? NULL;
  $tts        = $_POST["tts"] ?? false;

  $msg = new DiscordWebhook($webhook["url"]);

  // $msg->setMessage($message);
  // $msg->setUsername($username);
  // $msg->setAvatar($avatar_url);

  // $msg->send();

  ///////////////////////////////
  // alternative with chaining //
  ///////////////////////////////

  $msg->setMessage($message)->setUsername($username)->setAvatar($avatar_url)->setTts($tts)->send();
}

// load website
include "inc/page.inc.php";

?>