<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Blog</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <!-- Contenu -->
  <header>
    <nav class="menu">
      <ul>
        <li><a href="#"><h1>Super Blog</h1></a></li>
        <li><a href="#">Articles</a></li>
        <li><a href="#">Catégories</a></li>
      </ul>
    </nav>
  </header>
  <div class="content">
    <section class="articles">
    <?php for($i=0, $i<=5, $i++) : ?>
      <article class="article a">
        <h2>Article 1</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
          maecenas accumsan lacus vel facilisis. </p>
      </article>
    <?php endfor; ?>
    </section>
  </div>
  <!-- Scripts -->
</body>
</html>
