<div class="conteneur">
<h1>Liste des Rayons <?php echo $rayonName;?></h1>
    <table>
            <tr>
                <th>ID</th>
                <th>TITRE</th>
                <th>RAYONS</th>
            </tr>
            <?php foreach ($rayons as $rayonKey):  ?>
                <tr>
                    <th><?php echo($rayonKey["id"]); ?> </th>
                    <th><?php echo($rayonKey["titre"]); ?></th>
                    <th><?php echo($rayonKey["rayon"]); ?></th>
                </tr>
            <?php endforeach ?>
    </table>
</div>