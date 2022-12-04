<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
</head>
<body>
    <h1>Page de Connexion</h1>
    <div class="container">
        <form action="index.php" method="POST">
    
            <div class="form-control">
                <label for="">nom</label>
                <input type="text" name="nom" id=""> 
            </div>
    
            <div class="form-control">
                <label for="">Password</label>
                <input type="password" name="password" id="">  
            </div>
    
            <div class="form-control">
                <button type="submit" name="btn-save" value="connexion">Se connecter</button>        
            </div>
        </form>
     
    </div>
</body>
</html>