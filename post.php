<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;
    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
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
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat tempore rerum, officia recusandae id debitis magnam rem facilis. Perspiciatis accusantium qui et ipsum culpa mollitia, omnis magni dolorem id corrupti.
            Soluta eaque sequi adipisci maiores nemo! Neque tenetur alias minus dolor dolorum labore! Eveniet eius adipisci recusandae. Itaque, cumque molestias incidunt, perspiciatis, sequi maxime officia optio corporis at repellat ipsum.
            Ratione dolores sunt aliquid corrupti, minima dolorum dolor tenetur tempora illo minus accusantium assumenda porro, omnis suscipit? Earum inventore at repellendus odio quibusdam! Officiis pariatur blanditiis cupiditate aperiam, repudiandae nihil!
            Voluptatum laboriosam voluptas, culpa quas incidunt libero impedit at vel odio, maxime exercitationem, ducimus modi! Placeat nemo autem, dolor accusantium dolore itaque iste, incidunt beatae, et cum maiores! Ea, harum?
            Blanditiis dolorum fugiat quos quod reiciendis et laboriosam quaerat! Veritatis vero numquam voluptatibus velit voluptatem. Voluptas, dicta id explicabo placeat labore dolor, quidem quaerat temporibus nam expedita eaque voluptatem veritatis!</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat tempore rerum, officia recusandae id debitis magnam rem facilis. Perspiciatis accusantium qui et ipsum culpa mollitia, omnis magni dolorem id corrupti.
                Soluta eaque sequi adipisci maiores nemo! Neque tenetur alias minus dolor dolorum labore! Eveniet eius adipisci recusandae. Itaque, cumque molestias incidunt, perspiciatis, sequi maxime officia optio corporis at repellat ipsum.
                Ratione dolores sunt aliquid corrupti, minima dolorum dolor tenetur tempora illo minus accusantium assumenda porro, omnis suscipit? Earum inventore at repellendus odio quibusdam! Officiis pariatur blanditiis cupiditate aperiam, repudiandae nihil!
                Voluptatum laboriosam voluptas, culpa quas incidunt libero impedit at vel odio, maxime exercitationem, ducimus modi! Placeat nemo autem, dolor accusantium dolore itaque iste, incidunt beatae, et cum maiores! Ea, harum?
                Blanditiis dolorum fugiat quos quod reiciendis et laboriosam quaerat! Veritatis vero numquam voluptatibus velit voluptatem. Voluptas, dicta id explicabo placeat labore dolor, quidem quaerat temporibus nam expedita eaque voluptatem veritatis!</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
        <?php foreach ($categories as $category) : ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>       
        </ul>
    </aside>
</main>
<?php
include_once("templates/footer.php")
?>