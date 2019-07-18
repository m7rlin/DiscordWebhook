<!DOCTYPE html>
<html>
<head>
  <title>Podanie o rangę na Discordzie</title>
</head>
<body>

<header>
  <h1>Podanie o rangę na Discordzie</h1>
</header>
<main>
  <form action="index.php" method="POST">
    <label for="username">Username:</label>
    <input id="username" type="text" name="username" placeholder="merlin#2222">
    <br>

    <label for="username">Wybierz rangę:</label>
    <select name="rank" id="rank">
      <option value="">Wybierz rangę</option>
      <option value="kidmod">Kid Moderator</option>
      <option value="mod">Moderator</option>
      <option value="kidadmin">Kid Administrator</option>
      <option value="admin">Administrator</option>
    </select>
    <br>
    <label for="description">Dlaczego chcesz mieć rangę na naszym serwerze Discord?</label><br>
    <textarea name="description" id="description" cols="30" rows="10">

    </textarea>
    <br>
    <input type="submit" name="action" value="Wyślij">

  </form>
</main>
<footer>
  &copy; 2019 — Marcin Stawowczyk
</footer>

</body>
</html>