<html lang="pl">

<head>
  <title>Notatnik</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <link href="/theory - PHP7.4 UDEMY Mentorzy IT/System dodawania_przechowywania notatek/public/style.css" rel="stylesheet">
</head>

<body class="body">
  <div class="wrapper">
    <div class="header">
      <h1><i class="far fa-clipboard"></i>Moje notatki</h1>
    </div>

    <div class="container">
      <div class="menu">
        <ul>
          <li><a href="/theory - PHP7.4 UDEMY Mentorzy IT/System dodawania_przechowywania notatek/">Strona główna</a></li>
          <li><a href="/theory - PHP7.4 UDEMY Mentorzy IT/System dodawania_przechowywania notatek/?action=create">Nowa notatka</a></li>
        </ul>
      </div>

      <div class="page">
        <?php require_once("templates/pages/$page.php"); ?>
      </div>
    </div>

    <div class="footer">
      <p>Notatki - projekt w kursie PHP - Marek Wawoczny</p>
    </div>
  </div>
</body>

</html>