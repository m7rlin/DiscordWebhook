# DiscordWebhook

Discord Webhook lightweight library for PHP

Language: [English](README.md), [Polski](README.pl.md)

> Feel free to extend the library:
> Discord Webhook Documentation: https://discordapp.com/developers/docs/resources/webhook#execute-webhook

## Requirements

Software you need to have installed before you can use this project:

**Local or dedicated server:**

They work almost the same way.

- [WAMP](http://www.wampserver.com/) — v3 or [XAMPP](https://www.apachefriends.org)

Then you need the right PHP version. Below v7 won't work.

- PHP — version 7+

## Installation

Download or clone the repository. Place the project in your server folder — folder `www` for WAMP server and folder `http` for XAMPP server (when not changed).

## Examples

> I created many examples to show you how you can use this library. I'm sure that everyone will find something for yourself.

Open your browser and type:

`http://localhost/DiscordWebhook/examples/send-message`

or

`http://localhost:80/DiscordWebhook/examples/send-message`

- `localhost:80` — host and the port that your server is listening on; it can be changed in server configuration
- `DiscordWebhook` — folder with the project
- `examples` — folder with all examples
- `send-message` — example folder; you can change the name of the folder and modify the URL

## Usage

https://www.youtube.com/playlist?list=PLyBTvYfUy4lGoC9R1-Db_3OWZlevO8Hpv

**Simple example:**

```
// load Webhook
require_once "../../LoadWebhook.php";

$username = "__BOT_USERNAME__";
$avatar_url = "__LINK_TO_AVATAR__";

$msg = new DiscordWebhook($webhook["url"]);

$msg->setUsername($username)->setAvatar($avatar_url)->send();
```

**Simple embed example:**

```
// load Webhook
require_once "../../LoadWebhook.php";

$username = "__BOT_USERNAME__";
$avatar_url = "__LINK_TO_AVATAR__";

$embed = new DiscordEmbed();
// basic settings
$embed->setTitle("title", "https://www.magictm.com/")->setDescription("description");

$msg->setUsername($username)->setAvatar($avatar_url)->setEmbed($embed)->send();
```

The library supports **method chaining**. This is optional, so you can use both options.

**No-Method-Chaining:**

```
...
$msg = new DiscordWebhook($webhook["url"]);

$msg->setUsername($username);
$msg->setAvatar($avatar_url);
$msg->send();
...
```

**Method-Chaining:**

```
...
$msg = new DiscordWebhook($webhook["url"]);

$msg->setUsername($username)->setAvatar($avatar_url)->send();
...
```

## License

[MIT](https://github.com/m7rlin/DiscordWebhook/blob/master/LICENSE)
