<div class="conteneur">
<h1>Liste des prets  <?php echo $statut;?></h1>
    <table>
        <th>ID</th>
        <th>DATE D'ENREGISTREMENT</th>
        <th>DATE DE RETOUR</th>
        <th>STATUT</th>
        <?php foreach ($prets as $pretKey):  ?>
            <tr>
                <th><?php echo($pretKey["id"]); ?> </th>
                <th><?php echo($pretKey["date-enregistrement"]); ?></th>
                <th><?php echo($pretKey["retour"]); ?></th>
                <th><?php echo($pretKey["statut"]); ?></th>
            </tr>
        <?php endforeach ?>
    </table>
</div>
