<?php
require "header.php";
?>
<h1 class="setupH1 setup"><?php i18n("write_title"); ?></h1>
<form method="post" action="<?php if (isset($post['title'])) {
                                echo $router->generate('editPost', ['id' => $post['_id']]);
                            } else {
                                echo $router->generate('write');
                            } ?>">
    <fieldset>
        <input type="text" name="blogPostTitle" class="blogPostTitle" placeholder="<?php i18n("write_post_title_placeholder"); ?>" required value="<?php echo $post['title']; ?>" />
        <input type="text" name="blogPostAuthor" class="blogPostAuthor" placeholder="<?php i18n("write_post_author_placeholder"); ?>" required value="<?php echo $post['author']; ?>" />
        <input type="url" name="blogPostImage" class="blogPostImage" placeholder="<?php i18n("write_post_image_placeholder"); ?>" value="<?php echo $post['image']; ?>" />
        <input type="text" name="blogPostPassword" class="blogPostTitle" placeholder="<?php i18n("write_post_password_placeholder"); ?>" value="<?php echo $post['password']; ?>" />
        <textarea name="blogPostContent" id="blogPostContent" placeholder="<?php i18n("write_post_markdown_placeholder"); ?>"><?php echo $post['content']; ?></textarea>
    </fieldset>
    <?php if (isset($post['title'])) { ?>
        <input class="btn" type="submit" value="Save Edits" />
    <?php } else { ?>
        <input class="btn" type="submit" value="Save Post" />
    <?php } ?>
</form>
<div style="text-align: center; padding-top: 25px;">
    <a href="<?php echo $router->generate('dashboard'); ?>" class="btn btn-sm btn-secondary">Return To Dashboard</a>
</div>
<script>
    var simplemde = new SimpleMDE({
        element: document.getElementById("blogPostContent")
    });
</script>
<?php
require "footer.php";
?>