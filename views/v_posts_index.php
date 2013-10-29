<?php if (count($posts)==0) {
   echo  "<pageInstruction>".$user->first_name.", Curerntly there are no posts available to view </pageInstruction>";
   } else {
    echo  "<pageInstruction>".$user->first_name.", Here are the posts from the users you are following:</pageInstruction>";
    }
?>
 <br/>
<?php foreach($posts as $post): ?>

<article>

    <p > &#8226;<?=$post['first_name']?> <?=$post['last_name']?> posted:     
        <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
            <?=Time::display($post['created'])?>
        </time>
    </p>
    <p style='color:black'>&nbsp;&nbsp;<?=$post['content']?></p>
</article>

<?php endforeach; ?>
