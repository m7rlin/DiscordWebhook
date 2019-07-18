<?php
/**
 * Discord Webhook
 * v1.1.0
 * Updated: 18.07.2019
 * www.magictm.com
 * (c) Marcin Stawowczyk 2019
 * License: MIT
 */


final class DiscordWebhook
{
    private $message;
    private $url;
    private $username = "www.magictm.com";
    private $avatar;
    private $embed = false;
    private $embeds;
    private $tts;

    private $file;

    private $errors = [];

    /**
     * @param string $url           Discord Webhook URL
     */
    public function __construct(
        string $url = null
    )
    {
        $this->url = $url;
    }

    public function send(): ?self
    {

      if (!$this->validate()) {
        $errors = "";
        foreach ($this->errors as $key => $value) {
          $errors .= "$value";
        }
        throw new Exception("Zanim wyślesz wiadomość na Discorda popraw błędy: ". $errors);
      }

        $curl = curl_init();
        //timeouts - 5 seconds
        curl_setopt($curl, CURLOPT_TIMEOUT, 5); // 5 seconds
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5); // 5 seconds
        curl_setopt($curl, CURLOPT_URL, $this->url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode([
            'content' => $this->message,
            'username' => $this->username,
            'avatar_url' => $this->avatar,
            'tts' => $this->tts,
            'file' => $this->file,
            'embeds' => $this->embeds
        ]));
        $output = json_decode(
            curl_exec($curl),
            true
        );
        if (curl_getinfo($curl, CURLINFO_HTTP_CODE) != 204) {
            curl_close($curl);
            $message = "";

            if (!isset($output["message"])) {
              foreach ($output as $key => $value) {
                $message .= ucfirst($key) . " - " .$value[0];
              }
            } else {
              $message = $output["message"];
            }

            throw new Exception("Wystąpił błąd podczas przesyłania wiadomości na Discorda: " . $message);
        }
        curl_close($curl);

        return $this;
    }



    function setMessage($message): ?self {
      $this->message = $message;
      return $this;
    }

    function getMessage() {
      return $this->message;
    }

    function setURL(?string $url): ?self {
      $this->url = $url;
      return $this;
    }

    function getURL(): ?string {
      return $this->url;
    }

    function setUsername(?string $username): ?self {
      $this->username = $username;
      return $this;
    }

    function getUsername(): ?string {
      return $this->username;
    }

    function setAvatar(?string $avatar): ?self {
      $this->avatar = $avatar;
      return $this;
    }

    function getAvatar(): ?string {
      return $this->avatar;
    }

    function setFile(?object $file): ?self {
      $this->file = curl_file_create($file->getFile(), null, $file->getFileName());
      return $this;
    }

    function getFile(): ?string {
      return $this->file;
    }

    function setTts(?bool $tts): ?self {
      $this->tts = $tts;
      return $this;
    }

    function getTts(): ?bool {
      return $this->tts;
    }

    function reset(): ?self {
      return $this;
    }

    private function validate(): bool {

      if (!$this->url || $this->url === "") {
        $this->errors["url"] = "URL is empty.";
      }
      if (!$this->message || $this->message === "") {
        $this->errors["message"] = "Message is empty.";
      } else if (strlen($this->message) >= 2000) {
        $this->errors["message"] = "Message is too long (max. 2000 characters).";
      }
      if (empty($this->errors)) {
        return true;
      }
      return false;
    }


}

?>