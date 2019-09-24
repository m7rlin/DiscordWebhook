<?php


// clicked on submit
if (isset($_POST["action"]) && $_POST["action"] === "Submit") {

  // load Webhook
  require_once "../../LoadWebhook.php";

  $message    = $_POST["message"] ?? "";
  $username   = $_POST["username"] ?? "www.magictm.com";
  $avatar_url = $_POST["avatar_url"] ?? null;
  $tts        = $_POST["tts"] ?? false;

  $title = $_POST["title"] ?? null;
  $title_url = $_POST["title_url"] ?? null;
  $description = $_POST["description"] ?? null;

  $msg = new DiscordWebhook($webhook["url"]);

  $embed = new DiscordEmbed();
  // basic settings
  $embed->setTitle($title, $title_url)->setDescription($description);

  $msg->setMessage($message)->setUsername($username)->setAvatar($avatar_url)->setEmbed($embed)->send();
}

// load website
include "inc/page.inc.php";

?>