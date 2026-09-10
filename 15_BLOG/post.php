<?php
include_once("templates/header.php");

if (isset($_GET["id"])) {
    $postId = $_GET['id'];
    //$currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
            break;
        }
    }
}
?>
<div class="post-container">

    <main >
        
        <div class="content-container">
            
            <h1 class="main-title"><?= $currentPost['title'] ?></h1><br>
            
            <p class="post-description"><?= $currentPost['description'] ?></p><br>
        
            <div class="img-containe">
            
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            
            </div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque ex ipsum aut nesciunt quod dicta aspernatur explicabo exercitationem dolor, molestiae alias distinctio laborum dignissimos quas rerum earum. Magnam, aspernatur a?
            Nemo provident, fugit id nobis deserunt ad accusantium illo cum ipsum illum animi praesentium blanditiis totam expedita velit vel corporis nam explicabo saepe voluptatibus itaque? Veniam sit voluptatibus hic porro?
            Ad omnis voluptate nemo fuga sapiente, dignissimos pariatur impedit quas ipsa tenetur earum iste laborum architecto necessitatibus illo ullam, assumenda eveniet optio aliquid reprehenderit repudiandae totam quidem. Doloremque, est sequi!
            Cum ipsa ducimus harum saepe blanditiis perspiciatis ea dolorum, accusamus non quis qui enim sed iusto vitae iste eum repellendus itaque repellat, ipsam delectus ullam! Provident explicabo unde amet tenetur.
            Voluptate, officiis! Voluptas quos eius nulla ipsum temporibus dolor in quas illum beatae facere, necessitatibus adipisci atque officiis tempora at eveniet nemo repellat esse. Ad repudiandae cumque odio consectetur inventore?</p>
        </div>
    </main>
    <aside id="nav-container">
        
        <h3 class="tags-title">Tags</h3>
        
        <ul class="tag-list">
            
            <?php foreach ($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
                
        </ul>
            <h3 class="categories-title">Categorias</h3>
            <ul id="categories-list">
                
            <?php foreach ($categories as $categoria): ?>
                <li><a href="#"><?= $categoria ?></a></li>
                <?php endforeach; ?>
            </ul>             
                
    </aside>
            
            
            
</div>
        
<?php
include_once("templates/footer.php");
?>