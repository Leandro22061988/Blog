<?php
  include_once("templates/header.php");

  if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
      if($post['id'] == $postId) {
        $currentPost = $post;
      }
    }

  }

?>
  <main id="post-container">
    <div class="content-container">
      <h1 id="main-title"><?= $currentPost['title'] ?></h1>
      <p id="post-description"><?= $currentPost['description'] ?></p>
      <div class="img-container">
        <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
      </div>
      <p class="post-content">Aprenda o paradigma de orientação a objetos com Java, uma linguagem que continua em alta no mercado de tecnologia. O conceito de orientação a objetos é fundamental para a criação de software robusto e escalável. Java, com sua sintaxe clara e rica em recursos, oferece um ambiente ideal para compreender e aplicar esses conceitos. Mergulhe em classes e objetos, explore a herança e a polimorfia, e entenda como encapsular dados de maneira eficiente. Java proporciona um sistema de tipos forte e gerenciamento automático de memória, facilitando a construção de aplicações confiáveis.
       Aprofunde-se nos princípios do paradigma, como a abstração e a composição, e veja como Java implementa esses conceitos de forma prática. Estude exemplos reais de código e desenvolva suas próprias aplicações utilizando os fundamentos da orientação a objetos. Com Java, você aprenderá a criar estruturas de dados complexas e interagir com bibliotecas poderosas, tudo isso enquanto melhora suas habilidades de programação e prepara-se para desafios no desenvolvimento de software.
       Seja você um iniciante buscando fundamentos ou um desenvolvedor experiente desejando aprimorar suas habilidades, Java oferece um terreno fértil para o aprendizado e a aplicação do paradigma de orientação a objetos. Explore o mundo da programação com uma das linguagens mais populares e requisitadas do mercado. Aproveite as oportunidades para aplicar seus conhecimentos em projetos reais e veja como Java pode transformar a maneira como você aborda a programação.
      </p>
    </div>
    <aside id="nav-container">
      <h3 id="tags-title">Tags</h3>
      <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
          <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
      </ul>
      <h3 id="categories-title">Categorias</h3>
      <ul id="categories-list">
        <?php foreach($categories as $category): ?>
          <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
      </ul>
    </aside>
  </main>
<?php
  include_once("templates/footer.php")
?>