# DiscordWebhook

Discord Webhook lekka biblioteka dla języka PHP

Language: [English](README.md), [Polski](README.pl.md)

> Czuj się swobodnie rozszerzając bibliotekę:
> Discord Webhook Dokumentacja: https://discordapp.com/developers/docs/resources/webhook#execute-webhook

## Wymagania

Oprogramowanie, które musisz zainstalować, zanim będziesz mógł korzystać z tego projektu:

**Serwer lokalny lub dedykowany:**

One działają prawie tak samo.

- [WAMP](http://www.wampserver.com/) — v3 or [XAMPP](https://www.apachefriends.org)

Następnie potrzebujesz odpowiedniej wersji PHP. Poniżej v7 nie będzie działać.

- PHP — wersja 7+

## Instalacja

Pobierz lub sklonuj repozytorium. Umieść projekt w folderze serwera — folder `www` dla serwera WAMP i folder `http` dla serwera XAMPP (jeżeli nie został zmieniony).

## Przykłady

> Przygotowałem przykłady, aby pokazać jak korzystać z biblioteki. Na pewno każdy znajdzie coś dla siebie.

Otwórz przeglądarkę i wpisz:

`http://localhost/DiscordWebhook/examples/send-message`

or

`http://localhost:80/DiscordWebhook/examples/send-message`

- `localhost:80` — host i port, na którym nasłuchuje serwer; można go zmienić w konfiguracji serwera
- `DiscordWebhook` — folder z projektem
- `examples` — folder z przykładami
- `send-message` — folder z jednym przykładem; możesz zmienić nazwę folderu i zmodyfikować adres URL

## Użycie

https://www.youtube.com/playlist?list=PLyBTvYfUy4lGoC9R1-Db_3OWZlevO8Hpv

**Prosty przykład:**

![Website example](https://i.imgur.com/inA39rv.png)

```
// load Webhook
require_once "../../LoadWebhook.php";

$username = "__BOT_USERNAME__";
$avatar_url = "__LINK_TO_AVATAR__";

$msg = new DiscordWebhook($webhook["url"]);

$msg->setUsername($username)->setAvatar($avatar_url)->send();
```

**Prosty przykład z embed:**

![Website example](https://i.imgur.com/WfhnmH2.png)

![Discord example](https://i.imgur.com/KKpPWxA.png)

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

Biblioteka wspiera **łączenie metod**. Jest to opcjonalne, dlatego możesz używać obydwu opcji.

**Bez łączenia metod(funkcji):**

```
...
$msg = new DiscordWebhook($webhook["url"]);

$msg->setUsername($username);
$msg->setAvatar($avatar_url);
$msg->send();
...
```

**Z łączeniem metod(funkcji):**

```
...
$msg = new DiscordWebhook($webhook["url"]);

$msg->setUsername($username)->setAvatar($avatar_url)->send();
...
```

## Licencja

[MIT](https://github.com/m7rlin/DiscordWebhook/blob/master/LICENSE)
