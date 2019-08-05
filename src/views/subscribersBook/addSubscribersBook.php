<html>
<form action="index.php?model=subscriberBook&method=new&id=<?= $donnees['id']?>" method='post'>
<input type="text" title="" size="20" value="title" maxlength="135"> <input type="text" name="author" size="20" value="author" maxlength="135"><br>
<input type="submit" value="Envoyer" name="envoyer">
</form>
</html>