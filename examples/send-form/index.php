<?php

if (isset($_POST["action"]) && $_POST["action"] === "Wyślij") {

  require_once "../../LoadWebhook.php";

  $discord = new DiscordWebhook($webhook["url"]);

  $username = $_POST["username"];
  $rank = $_POST["rank"];
  $description = $_POST["description"];

  $form = <<<FORM
Nazwa użytkownika: **$username**
Ranga: `$rank`
Opis:
```
$description
```
FORM;

  $discord->setMessage($form)->send();

}

include "inc/page.inc.php";