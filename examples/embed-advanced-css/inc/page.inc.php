<!DOCTYPE html>
<html>
<head>
  <title>Discord Embed Advanced</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css" integrity="sha256-vK3UTo/8wHbaUn+dTQD0X6dzidqc5l7gczvH+Bnowwk=" crossorigin="anonymous" />
  <meta charset="utf-8">
  <!-- dev version -->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <!-- production version -->
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="inc/app.js" defer></script>
</head>
<body>
  <div id="app">

    <header>
      <section class="section">
        <div class="container">
          <h1 class="title is-size-4-touch">Discord Embed</h1>
          <p class="subtitle is-size-6-touch">Advanced</p>
          <p class="subtitle is-size-7">&copy; Marcin "m7rlin" Stawowczyk — <a href="https://www.magictm.com/register" target="_blank">www.magictm.com</a></p>
          <div class="buttons">
            <button class="button is-info" @click="setValues">Set values</button>
            <button class="button is-danger" @click="reset">Reset</button>
          </div>
        </div>
      </section>
    </header>

    <main class="has-background-white-ter">
      <section class="section">

        <div class="container">
          <form action="index.php" method="POST" class="column is-5 is-paddingless" ref="form" @submit.prevent="submitForm">

            <h2 class="title is-size-4">Embed</h2>

            <div class="field">
              <label class="label">Title </label>
              <div class="control">
                <input class="input" type="text" name="title" v-model="title">
              </div>
            </div>

            <div class="field">
              <label class="label">Description <span class="has-text-grey-light has-text-weight-normal">— optional</span></label>
              <div class="control">
                <textarea autocomplete="off" name="description" class="textarea" v-model="description"></textarea>
              </div>
            </div>

            <div class="field">
              <label class="label">Title URL <span class="has-text-grey-light has-text-weight-normal">— optional</span></label>
              <div class="control">
                <input class="input" type="text" name="title_url" v-model="title_url">
              </div>
            </div>

            <div class="field">
              <label class="label">Color <span class="has-text-grey-light has-text-weight-normal">— optional</span></label>
              <div class="control">
                <input class="input" type="color" name="color" v-model="color">
              </div>
            </div>
            <hr>

            <h3 class="title is-size-5">Author settings</h3>

            <div class="field">
              <label class="label">Author name <span class="has-text-grey-light has-text-weight-normal">— optional</span></label>
              <div class="control">
                <input class="input" type="text" name="author_name" v-model="author_name">
              </div>
            </div>

            <div class="field">
              <label class="label">Author link <span class="has-text-grey-light has-text-weight-normal">— optional</span></label>
              <div class="control">
                <input class="input" type="text" name="author_link" v-model="author_link">
              </div>
            </div>

            <div class="field">
              <label class="label">Author icon <span class="has-text-grey-light has-text-weight-normal">— optional</span></label>
              <div class="control">
                <input class="input" type="text" name="author_icon" v-model="author_icon">
              </div>
            </div>
            <hr>

            <h3 class="title is-size-5">Thumbnail settings</h3>

            <div class="field">
              <label class="label">Thumbnail <span class="has-text-grey-light has-text-weight-normal">— optional</span></label>
              <div class="control">
                <input class="input" type="text" name="thumbnail" v-model="thumbnail">
              </div>
            </div>
            <hr>

            <h3 class="title is-size-5">Fields</h3>

            <div class="field is-horizontal" v-for="(field,index) of fields">
              <div class="field-body">
                <div class="field">
                  <p class="control is-expanded">
                    <input class="input" type="text" placeholder="Name" v-model="field.name">
                  </p>
                </div>
                <div class="field">
                  <p class="control is-expanded">
                    <input class="input" type="text" placeholder="Value" v-model="field.value">
                  </p>
                </div>
                <div class="field">
                  <p class="control is-expanded">
                    <label class="checkbox">
                      <input type="checkbox" v-model="field.inline">
                      Inline
                    </label>
                  </p>
                </div>
                <div class="field">
                  <p class="control is-expanded">
                    <button class="button is-danger" @click.prevent="removeField(index)">Delete</button>
                  </p>
                </div>
              </div>
            </div>

            <div class="field">
              <div class="control">
                <button class="button is-success" @click.prevent="addField">
                  Add new field
                </button>
              </div>
            </div>

            <hr>
            <h3 class="title is-size-5">Footer settings</h3>

            <div class="field">
              <label class="label">Footer <span class="has-text-grey-light has-text-weight-normal">— optional</span></label>
              <div class="control">
                <input class="input" type="text" name="footer" v-model="footer">
              </div>
            </div>


            <h2 class="title is-size-4">Message</h2>

              <div class="field">
                <label class="label">Message <span class="has-text-grey-light has-text-weight-normal">— optional</span></label>
                <div class="control">
                  <textarea autocomplete="off" name="message" class="textarea" placeholder="Twoja wiadomość..." v-model="message">{{ message }}</textarea>
                </div>
              </div>

              <div class="field">
                <label class="label">Username</label>
                <div class="control">
                  <input class="input" type="text" name="username" placeholder="MagicTM" v-model="username">
                </div>
              </div>

              <div class="field">
                <label class="label">Avatar URL</label>
                <div class="control">
                  <input class="input" type="text" name="avatar_url" v-model="avatar_url">
                </div>
              </div>

              <div class="field">
                <div class="control">
                  <label class="checkbox">
                    <input type="checkbox" name="tts" v-model="tts">
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
  </div>
</body>

</html>