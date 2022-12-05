<!-- o   Ajouter les ouvrages/rayons/auteurs
o   Lister les ouvrages/rayons/auteurs
o   Ajouter des exemplaires à un ouvrage
o   Archiver les exemplaires perdus ou détériorés
o    
o   Lister les exemplaires des œuvres disponibles
o   Lister les rayons où se trouves les exemplaires (des œuvres disponibles)
o   Lister les exemplaires indisponibles (en prêt ou détériorés) -->


<div class="conteneur">
    <h1>Lister Ouvrage</h1>
    <table>
            <tr>
                <th>ID</th>
                <th>TITRE</th>
                <th>DATE EDITION</th>
            </tr>
            <?php foreach ($ouvrages as $val):  ?>
                <tr>
                    <th><?php echo($val['id']); ?> </th>
                    <th><?php echo($val['titre']); ?> </th>
                    <th><?php echo($val["date-d'édition"]); ?> </th>
                </tr>
            <?php endforeach ?>
        </table>

</div>