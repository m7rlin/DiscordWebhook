<?php
/**
 * Discord Webhook
 * v1.0.0
 * Updated: 20.01.2019
 * www.magictm.com
 * (c) Marcin Stawowczyk 2019
 * License: MIT
 */
final class DiscordWebhook
{
    private $msg;
    private $url;
    private $username;
    private $avatar;
    private $tts;
    /**
     * @param string $msg           message to send
     * @param string $url           Discord Webhook URL
     * @param string|null $username username
     * @param string|null $avatar   bot avatar
     * @param boolean $tts          text-to-speech - the message will be readed
     */
    public function __construct(
        string $msg,
        string $url = null,
        string $username = null,
        string $avatar = null,
        bool $tts = null
    )
    {
        $this->msg = $msg;
        $this->url = $url ??
            'https://discordapp.com/api/webhooks/536576089582075936/QkY4y6xDDlrPXXtnSXLiAOnIo961w6BXl1SLTE0bj-t0--A-P3thhos5tskW_lIhiRfG';
        $this->username = $username ?? 'www.magictm.com';
        $this->avatar = $avatar ??
            'https://i.ytimg.com/vi/JrQkgLLL9XQ/hqdefault.jpg';
        $this->tts = $tts ?? false;
    }

    public function tts(
        bool $tts
    ): void
    {
        $this->tts = $tts;
    }

    public function send(): void
    {
        echo $this->tts;
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
            'content' => $this->msg,
            'username' => $this->username,
            'avatar_url' => $this->avatar,
            'tts' => $this->tts
        ]));
        $output = json_decode(
            curl_exec($curl),
            true
        );
        if (curl_getinfo($curl, CURLINFO_HTTP_CODE) != 204) {
            curl_close($curl);
            throw new Exception("Wystąpił błąd podczas przesyłania wiadomości na Discorda: " . $output['message']);
        }
        curl_close($curl);
    }
}

?>