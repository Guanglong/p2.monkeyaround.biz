<section>Add new Post </section>
<form method='POST' action='/posts/p_add'>

  <?php if(isset($status)): ?>
  <status class="error">Your post saved successfully!</status>
  <br/>
   <?php endif; ?>
    
    <textarea rows="10" placeholder="Enter your post here. You can control the visiblity of your posts by using the 'Switch Visibility' button on the Profile page " 
       cols="100"  name='content' id='content'></textarea>
    <br><br>
    <div><button >Add </button></div>
</form> 