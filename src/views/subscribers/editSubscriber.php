<html>
<form action="index.php?model=subscriber&method=edit&id=<?= $donnees['id']?>" method='post'>
<input type="text" name="title" size="20" value="title" maxlength="135"> 
<input type="text" name="author" size="20" value="author" maxlength="135"><br>
<input type="submit" value="Editer" name="Editer">
</form>
</html>