<?php
require("../config/commandes.php");
$Produits=afficher();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" rel="stylesheet"></script>
    <title>Document</title>
</head>
<body>
<div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
<form method="post">
  <div class="mb-3">

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Identifiant du produit</label>
    <input type="number" class="form-control" name="idproduit" require>
  </div>
  <button type="submit" name="valider" class="btn btn-primary">Supprimer un produit</button>
</form>
</div>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
<?php foreach($Produits as $produit): ?>
        <div class="col">
          <div class="card shadow-sm">
              
              <img src="<?= $produit->image ?>">
              <h2><?= $produit->id ?></h2>

            <div class="card-body">
            
              
              </div>
            </div>
          </div>
        </div>
    <?php endforeach; ?>
</div>
</div>
</div>

</body>
</html>
<?php
    if(isset($_POST['valider']))
    {
        if( isset($_POST['idproduit']))
        {
            if( !empty($_POST['idproduit']))
            {
               
                $idproduit = htmlspecialchars(strip_tags($_POST['idproduit']));
                

                try
                {
                    supprimer($idproduit);
                }
                catch (Exception $e)
                {
                    $e->getMessage();
                }
            }   
        }
    }
?>