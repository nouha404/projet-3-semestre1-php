<div class="conteneur">
    <h1>Lister Pret Adherent</h1>
    <form action="index.php?x=lb" method="POST">
                <div class="form-control">
                    <label for="">STATUT</label>
                    <select name="statuts" id="">
                        <option value="retourner">retourner</option>
                        <option value="en-cours">en-cours</option>
                    </select>
                </div>
                <div class="form-control">
                    <button name="btn-save" value="filtre-rayon">Filtrer</button>
                </div>
                
    </form>

    <table>
            <tr>
                <th>ID</th>
                <th>DATE D'ENREGISTREMENT</th>
                <th>DATE DE RETOUR</th>
                <th>STATUT</th>
             
            </tr>
            <?php foreach ($prets as $val):  ?>
                <tr>
                    <th><?= $val["id"]; ?> </th>
                    <th><?= $val["date-enregistrement"]; ?></th>
                    <th><?= $val["retour"]; ?></th>
                    <th><?= $val["statut"]; ?></th>
                </tr>
            <?php endforeach ?>
        </table>
</div>