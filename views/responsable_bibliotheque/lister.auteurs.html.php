<div class="conteneur">
    <h2>Lister AUTEURS</h2>

    <table>
            <tr>
                <th>ID</th>
                <th>PRENOM</th>
                <th>NOM</th>
                <th>PROFESSION</th>
                <th>OUVRAGE ID</th>
            </tr>
            <?php foreach ($auteurs as $val):  ?>
                <tr>
                    <th><?php echo($val["id"]); ?> </th>
                    <th><?php echo($val["prenom"]); ?></th>
                    <th><?php echo($val["nom"]); ?></th>
                    <th><?php echo($val["profession"]); ?></th>
                    <th><?php echo($val["ouvrage_id"]); ?></th>
                    
                </tr>
            <?php endforeach ?>
        </table>

</div>