<?php if (count($posts)==0) {
   echo  "<h1>".$user->first_name.", Curerntly there is no posts available to view</h1>";
   } else {
    echo  "<h1>".$user->first_name.", Here are the posts from the users you are following</h1>";
    }
?>

<?php foreach($posts as $post): ?>

<article>

    <h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>

    <p><?=$post['content']?></p>

    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time>

</article>

<?php endforeach; ?>
