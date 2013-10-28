<?php if (count($posts)==0) {
   echo  "<pageInstruction>".$user->first_name.", Curerntly there is no posts available to view </pageInstruction>";
   } else {
    echo  "<pageInstruction>".$user->first_name.", Here are the posts from the users you are following:</pageInstruction>";
    }
?>
 
<?php foreach($posts as $post): ?>

<article>

    <div name><?=$post['first_name']?> <?=$post['last_name']?> posted:     
        <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
            <?=Time::display($post['created'])?>
        </time>
        </div>
    <p style='color:black'>&nbsp;&nbsp;<?=$post['content']?></p>
</article>

<?php endforeach; ?>
