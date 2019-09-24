<!DOCTYPE html>
<html>
<head>
  <title>Discord Simple Embed</title>
  <meta charset="utf-8">
</head>
<body>
  <main>
    <h1>Discord Webhook</h1>
    <p>&copy; Marcin "m7rlin" Stawowczyk</p>
    <div class="container">
      <form action="index.php" method="POST">

        <fieldset>

          <legend>Embed</legend>

          <div class="row">
            <div class="col-25">
              <label for="title">Title:</label>
            </div>
            <div class="col-75">
              <input autocomplete="off" type="text" name="title" id="title" value="<?= input("title") ?>">
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="description">Description:</label>
            </div>
            <div class="col-75">
              <textarea autocomplete="off" name="description" id="description" cols="30" rows="4"><?= input("description") ?></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="title_url">Title URL:</label>
            </div>
            <div class="col-75">
              <input autocomplete="off" type="url" name="title_url" id="title_url" value="<?= input("title_url") ?>">
            </div>
          </div>

        </fieldset>

        <fieldset>

          <legend>Message</legend>

          <div class="row">
            <div class="col-25">
              <label for="message">Message — optional:</label>
            </div>
            <div class="col-75">
              <textarea autocomplete="off" name="message" id="message" cols="30" rows="4"><?= input("message") ?></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="username">Username:</label>
            </div>
            <div class="col-75">
              <input autocomplete="off" type="text" name="username" id="username" value="<?= input("username") ?>">
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="avatar_url">Avatar URL:</label>
            </div>
            <div class="col-75">
              <input autocomplete="off" type="url" name="avatar_url" id="avatar_url" value="<?= input("avatar_url") ?>">
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="tts">TTS:</label>
            </div>
            <div class="col-75">
              <input type="checkbox" name="tts" id="tts" value="true"> True<br>
            </div>
          </div>

        </fieldset>

        <div class="row">
          <input type="submit" name="action" value="Submit">
        </div>

      </form>
    </div>
  </main>
</body>
</html>