<?php 
if(isset($_POST['submit'])){
  echo $_FILES['file']['name'];
}

?>
<html>
<body>
<form action="" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file" value="hello"/> 
<br />
<input type="submit" name="submit" value="Submit" />
</form>

</body>
</html>