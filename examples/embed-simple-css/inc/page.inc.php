<!DOCTYPE html>
<html>
<head>
  <title>Discord Simple Embed</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css" integrity="sha256-vK3UTo/8wHbaUn+dTQD0X6dzidqc5l7gczvH+Bnowwk=" crossorigin="anonymous" />
  <meta charset="utf-8">
</head>
<body>
  <header>
    <section class="section">
      <div class="container">
        <h1 class="title is-size-4-touch">Discord Embed</h1>
        <p class="subtitle is-size-6-touch">Simple</p>
        <p class="subtitle is-size-7">&copy; Marcin "m7rlin" Stawowczyk — <a href="https://www.magictm.com/register" target="_blank">www.magictm.com</a></p>
      </div>
    </section>
  </header>

  <main class="has-background-white-ter">
    <section class="section">

      <div class="container">
        <form action="index.php" method="POST" class="column is-4 is-paddingless">

          <h2 class="title is-size-4">Embed</h2>

          <div class="field">
            <label class="label">Title </label>
            <div class="control">
              <input class="input" type="text" name="title">
            </div>
          </div>

          <div class="field">
            <label class="label">Description <span class="has-text-grey-light has-text-weight-normal">— optional</span></label>
            <div class="control">
              <textarea autocomplete="off" name="description" class="textarea"></textarea>
            </div>
          </div>


          <div class="field">
            <label class="label">Title URL <span class="has-text-grey-light has-text-weight-normal">— optional</span></label>
            <div class="control">
              <input class="input" type="text" name="title_url" >
            </div>
          </div>


          <h2 class="title is-size-4">Message</h2>

            <div class="field">
              <label class="label">Message <span class="has-text-grey-light has-text-weight-normal">— optional</span></label>
              <div class="control">
                <textarea autocomplete="off" name="message" class="textarea" placeholder="Twoja wiadomość..."></textarea>
              </div>
            </div>

            <div class="field">
              <label class="label">Username</label>
              <div class="control">
                <input class="input" type="text" name="username" placeholder="MagicTM">
              </div>
            </div>

            <div class="field">
              <label class="label">Avatar URL</label>
              <div class="control">
                <input class="input" type="text" name="avatar_url" >
              </div>
            </div>

            <div class="field">
              <div class="control">
                <label class="checkbox">
                  <input type="checkbox" name="tts">
                  Send TTS
                </label>
              </div>
            </div>

          <div class="filed">
            <div class="control">
              <input class="button is-success" type="submit" name="action" value="Send webhook">
            </div>
          </div>

        </form>
      </div>
    </section>
  </main>
</body>
</html>