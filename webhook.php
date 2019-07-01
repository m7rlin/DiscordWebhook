<?php

/**
 * Użyta wersja PHP: 7.2.14
 * DOKUMENTACJA DISCORD WEBHOOK: https://discordapp.com/developers/docs/resources/webhook#execute-webhook
 */

require_once 'DiscordWebhook.php';

$url = "https://discordapp.com/api/webhooks/536576089582075936/QkY4y6xDDlrPXXtnSXLiAOnIo961w6BXl1SLTE0bj-t0--A-P3thhos5tskW_lIhiRfG";

$message 		= $_POST["content"];
$username 	= $_POST["username"] ?? "www.magictm.com";
$avatar_url = $_POST["avatar_url"] ?? NULL;
$tts 				= $_POST["tts"] ?? false;

$msg = new DiscordWebhook($message, $url, $username, $avatar_url);
$msg->send();

header("Location: .");