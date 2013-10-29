<pageInstruction>Add new Post </pageInstruction>
<form method='POST' action='/posts/p_add'>

  <?php if(isset($status)): ?>
  <status class="error">Your post saved successfully!</status>
  <br/>
   <?php endif; ?>
    
    <textarea rows="10" cols="100"  name='content' id='content'></textarea>
    <br><br>
    <div><button >Add </button></div>
</form> 