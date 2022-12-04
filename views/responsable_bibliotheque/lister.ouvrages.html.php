<!-- o   Ajouter les ouvrages/rayons/auteurs
o   Lister les ouvrages/rayons/auteurs
o   Ajouter des exemplaires à un ouvrage
o   Archiver les exemplaires perdus ou détériorés
o    
o   Lister les exemplaires des œuvres disponibles
o   Lister les rayons où se trouves les exemplaires (des œuvres disponibles)
o   Lister les exemplaires indisponibles (en prêt ou détériorés) -->

<div class="menu">
    <ul>
        <li><a href="index.php?liste=1">Lister Ouvrage</a></li>
        <li><a href="index.php?liste=2">Lister Rayons</a></li>
        <li><a href="index.php?liste=3">Lister Auteurs</a></li>
        <li><a href="index.php?liste=4">Lister exemplaires</a></li>
    </ul>
</div>

<div class="conteneur">
    <h2>Lister Ouvrage</h2>

    <table>
            <tr>
                <th>ID</th>
                <th>TITRE</th>
                <th>DATE EDITION</th>
            </tr>
            <?php foreach ($ouvrages as $val):  ?>
                <tr>
                    <th><?php echo($val["id"]); ?> </th>
                    <th><?php echo($val["niveau"]); ?></th>
                    <th><?php echo($val["filiere"]); ?></th>
                    <th><?php echo($val["libelle"]); ?></th>
                </tr>
            <?php endforeach ?>
        </table>

</div>