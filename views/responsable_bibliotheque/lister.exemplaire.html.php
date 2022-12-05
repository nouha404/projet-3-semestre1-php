<div class="conteneur">
    <h1>Lister EXEMPLAIRES</h1>
    <table>
            <tr>
                <th>ID</th>
                <th>DATE D'ENREGISTREMENT</th>
             
            </tr>
            <?php foreach ($exemplaires as $val):  ?>
                <tr>
                    <th><?php echo($val["id"]); ?> </th>
                    <th><?php echo($val["date-enregistrement"]); ?></th>
                </tr>
            <?php endforeach ?>
        </table>
</div>