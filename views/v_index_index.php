<script type="text/javascript" >
   document.getElementById("homeButton").style.display="none";
</script>
<pageInstruction>Welcome to <?=APP_NAME?><?php if($user) echo '.'.$user->first_name."!"; ?></pageInstruction>
<div id="mainContent"> In this monkeyland, you can: <br/>
       post your notes  (publicly or privately)<br/>
       follow others      <br/> 
</div>

