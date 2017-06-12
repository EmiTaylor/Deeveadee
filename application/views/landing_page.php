<!-- Page Content -->
   <div class="container">
       <!-- Jumbotron Header -->
       <header class="jumbotron hero-spacer">
           <h1>Où louer un dvd</h1>
           <p>Retrouvez le plus grand choix de location de Dvd dans la région</p>
           <p>Consultez nos offres et contactez nos boutiques en ligne</p>
           <p><a class="btn btn-primary btn-large">Go!</a></p>
       </header>
       <hr>
       <!-- Title -->
       <div class="row">
           <div class="col-lg-12">
               <h3>Trouvez la Société la plus proche de chez vous</h3>
           </div>

       <!-- /.row -->
       <!-- Page Features -->
        <div class="row text-center">
       <?php foreach($societe as $societe_item): ?>
           <div class="col-md-3 col-sm-6 hero-feature">
               <div class="thumbnail">
                   <?php if (!empty($societe_item['cover'])): ?>
                       <img src="/<?= $societe_item['cover']; ?>"
                   <?php else : ?>
                       <a href="http://placeholder.com"><img src="http://via.placeholder.com/240x200"></a>
                   <?php endif ?>
                   <div class="caption">
                       <h3><?php echo $societe_item['nomS']; ?></h3>
                       <p><?php echo $societe_item['presentation']; ?></p>
                       <a href="#" class="btn btn-primary">Y aller</a> <a href="#" class="btn btn-default">Appeler</a>
                   </div>
               </div>
               </div>
        <?php endforeach; ?>
           </div>
       <!-- /.row -->
        <hr> <hr>
       <!-- Nouveautés -->
       <div class="row">
           <div class="col-lg-12">
               <h3>Les nouveautées</h3>
           </div>
       </div>
       <!-- /.row -->
       <!-- Page Features -->

       <?php foreach($dvd as $dvd_item): ?>
           <div class="col-md-3 col-sm-6 hero-feature">
               <div class="thumbnail">
                   <?php if (!empty($dvd_item['cover'])): ?>
                       <img src="/<?= $dvd_item['cover']; ?>"
                   <?php else : ?>
                       <a href="http://placeholder.com"><img src="http://via.placeholder.com/150x200"></a>
                   <?php endif ?>
                   <div class="caption">
                       <h3><?php echo $dvd_item['titreD']; ?></h3>
                       <strong><?php echo $dvd_item['categorieD']; ?></strong>
                       <p><?php echo $dvd_item['anneeD']; ?></p>
                       <p><?php echo $dvd_item['resume']; ?></p>
                       <a href="#" class="btn btn-primary">Voir la BO</a> <a href="#" class="btn btn-default">Dans le panier</a>
                   </div>
               </div>
               </div>
        <?php endforeach; ?>
           </div>
       </div>
