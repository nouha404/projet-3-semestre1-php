<div class="conteneur">
    <h1>Lister Ouvrage</h1>
    <table>
            <tr>
                <th>ID</th>
                <th>TITRE</th>
                <th>DATE EDITION</th>
            </tr>
            <?php foreach ($ouvrages as $ouvrageKey):  ?>
                <tr>
                    <th><?php echo($ouvrageKey['id']); ?> </th>
                    <th><?php echo($ouvrageKey['titre']); ?> </th>
                    <th><?php echo($ouvrageKey["date-d'édition"]); ?> </th>
                </tr>
            <?php endforeach ?>
    </table>
</div>