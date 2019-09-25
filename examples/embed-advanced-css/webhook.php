<?php

header('Content-Type: application/json');
$body = file_get_contents('php://input');


$body = json_decode($body, true);


// load Webhook
require_once "../../LoadWebhook.php";

$message    = $body["message"] ?? "";
$username   = $body["username"] ?? "www.magictm.com";
$avatar_url = $body["avatar_url"] ?? null;
$tts        = $body["tts"] ?? false;

$title = $body["title"] ?? null;
$title_url = $body["title_url"] ?? null;
$description = $body["description"] ?? null;


$color = $body["color"] ?? null;

// author settings
$author_name = $body["author_name"] ?? null;
$author_link = $body["author_link"] ?? null;
$author_icon = $body["author_icon"] ?? null;

// thumbnail settings
$thumbnail = $body["thumbnail"] ?? null;

// footer settings
$footer = $body["footer"] ?? null;

$msg = new DiscordWebhook($webhook["url"]);

$embed = new DiscordEmbed();
// basic settings
$embed->setTitle($title, $title_url)->setDescription($description);

// advanced settigns
$embed->setColor($color)->setImage($thumbnail)->setAuthor($author_name,$author_link,$author_icon)->setFooter($footer);

// set all fields
foreach ($body["fields"] as $key) {
  $embed->setField($key["name"], $key["value"], $key["inline"]);
}


$msg->setMessage($message)->setUsername($username)->setAvatar($avatar_url)->setEmbed($embed)->send();



?>