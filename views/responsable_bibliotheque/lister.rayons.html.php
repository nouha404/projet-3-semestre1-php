<div class="menu">
    <ul>
        <li><a href="index.php?liste=1">Lister Ouvrage</a></li>
        <li><a href="index.php?liste=2">Lister Rayons</a></li>
        <li><a href="index.php?liste=3">Lister Auteurs</a></li>
        <li><a href="index.php?liste=4">Lister exemplaires</a></li>
    </ul>
</div>

<div class="conteneur">
    <h2>Lister Rayons</h2>

    <table>
            <tr>
                <th>ID</th>
                <th>NOM</th>
                <th>Rayons</th>
            </tr>
            <?php foreach ($rayons as $val):  ?>
                <tr>
                    <th><?php echo($val["id"]); ?> </th>
                    <th><?php echo($val["nom"]); ?></th>
                    <th><?php echo($val["rayons"]); ?></th>
                </tr>
            <?php endforeach ?>
        </table>

</div>