var app = new Vue({
  el: "#app",
  data: {
    title: "",
    description: "",
    title_url: "",
    color: "",
    author_name: "",
    author_link: "",
    author_icon: "",
    thumbnail: "",
    avatar_url: "",
    tts: false,
    fields: [
      {
        name: "",
        value: "",
        inline: false
      }
    ],
    footer: "",
    message: "",
    username: "",
    avatar: ""
  },
  methods: {
    addField() {
      var field = {
        name: "",
        value: "",
        inline: false
      };
      this.fields.push(field);
    },
    removeField(index) {
      this.fields.splice(index, 1);
    },
    submitForm() {
      var data = {
        title: this.title,
        description: this.description,
        title_url: this.title_url,
        color: this.color,
        author_name: this.author_name,
        author_link: this.author_link,
        author_icon: this.author_icon,
        thumbnail: this.thumbnail,
        avatar_url: this.avatar_url,
        tts: this.tts,
        fields: this.fields,
        footer: this.footer,
        message: this.message,
        username: this.username,
        avatar: this.avatar
      };
      var dataJSON = JSON.stringify(data);
      // send request to webhook.php

      axios.post("webhook.php", dataJSON).then(res => {
        console.log(res.data);
      });
    },
    reset() {
      this.title = "";
      this.description = "";
      this.title_url = "";
      this.color = "";
      this.author_name = "";
      this.author_link = "";
      this.author_icon = "";
      this.thumbnail = "";
      this.avatar_url = "";
      this.tts = false;
      this.fields = [
        {
          name: "",
          value: "",
          inline: false
        }
      ];
      this.footer = "";
      this.message = "";
      this.username = "";
      this.avatar = "";
      this.$refs.form.reset();
    },
    setValues() {
      this.title = "Discord Embed — Advanced";
      this.description =
        "MagicTM budują właśnie takie osoby jak Ty. Nie ważne czy jesteś dziewczyną czy chłopakiem. Dołącz do Nas. Wszyscy tutaj zobowiązują się do tego, aby MagicTM reprezentował świat, w którym chcemy żyć i grać.";
      this.color = "#7e5dd7";
      this.title_url = "https://www.magictm.com/register";
      this.author_name = "Marcin Stawowczyk";
      this.author_link = "https://www.magictm.com/merlin@2706/";
      this.author_icon = "https://i.imgur.com/AQp3Koe.png";
      this.thumbnail = "https://i.imgur.com/AQp3Koe.png";
      this.avatar_url = "https://i.imgur.com/AQp3Koe.png";
      this.tts = false;
      (this.fields = [
        {
          name: "Pole testowe",
          value: "Wartosc testowa",
          inline: false
        },
        {
          name: "Pole testowe inline",
          value: "Wartosc testowa inline",
          inline: true
        }
      ]),
        (this.footer = '© Marcin "m7rlin" Stawowczyk');
      this.message =
        "To jest przykładowa wiadomość! Podoba Ci się? Zostaw kciuka w górę.";
      this.username = "m7rlin";
      this.avatar = "https://i.imgur.com/AQp3Koe.png";
    }
  }
});
