<div class="menu">
    <ul>
        <li><a href="index.php?liste=1">Lister Ouvrage</a></li>
        <li><a href="index.php?liste=2">Lister Rayons</a></li>
        <li><a href="index.php?liste=3">Lister Auteurs</a></li>
        <li><a href="index.php?liste=4">Lister exemplaires</a></li>
    </ul>
</div>

<div class="conteneur">
    <h2>Lister EXEMPLAIRES</h2>

    <table>
            <tr>
                <th>ID</th>
                <th>TITRE</th>
                <th>DATE D'ENREGISTREMENT</th>
             
            </tr>
            <?php foreach ($exemplaires as $val):  ?>
                <tr>
                    <th><?php echo($val["id"]); ?> </th>
                    <th><?php echo($val["titre"]); ?></th>
                    <th><?php echo($val["date-enregistrement"]); ?></th>
               
                    
                </tr>
            <?php endforeach ?>
        </table>

</div>