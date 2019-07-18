<!DOCTYPE html>
<html>
<head>
  <title>Discord Webhook</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>Discord Webhook</h1>
    <p>&copy; Marcin "m7rlin" Stawowczyk</p>
    <div class="container">
      <form action="index.php" method="POST">
        <div class="row">
          <div class="col-25">
            <label for="content">Content:</label>
          </div>
          <div class="col-75">
            <textarea required autocomplete="off" name="content" id="content" cols="30" rows="10"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="username">Username:</label>
          </div>
          <div class="col-75">
            <input autocomplete="off" type="text" name="username" id="username">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="avatar_url">Avatar URL:</label>
          </div>
          <div class="col-75">
            <input autocomplete="off" type="text" name="avatar_url" id="avatar_url" value="">
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




        <div class="row">
          <input type="submit" name="action" value="Submit">
        </div>

      </form>
    </div>
  </main>
</body>
</html>