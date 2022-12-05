<div class="conteneur">
    <h1>Lister AUTEURS</h1>
    <table>
            <tr>
                <th>ID</th>
                <th>PRENOM</th>
                <th>NOM</th>
                <th>PROFESSION</th>
                <th>OUVRAGE</th>
            </tr>
            <?php foreach ($authors as $val):  ?>
                <tr>
                    <th><?php echo($val["id"]); ?> </th>
                    <th><?php echo($val["prenom"]); ?></th>
                    <th><?php echo($val["nom"]); ?></th>
                    <th><?php echo($val["profession"]); ?></th>
                    <th><?php echo($val["livre"]); ?></th>              
                </tr>
            <?php endforeach ?>
        </table>
</div>