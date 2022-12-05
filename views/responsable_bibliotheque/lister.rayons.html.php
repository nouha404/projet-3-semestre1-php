<div class="conteneur">
    <h1>Lister Rayons</h1>
   
        <form action="index.php?x=rayons" method="POST">
                <div class="form-control">
                    <label for="">RAYONS</label>
                    <select name="rayons" id="">
                        <option value="Fantasy">Fantasy</option>
                        <option value="Litterature">Litterature</option>
                        <option value="Shonen">Shonen</option>
                        <option value="Roman">Roman</option>    
                    </select>
                </div>
                <div class="form-control">
                    <button name="btn-save" value="filtre-rayon">Filtrer</button>
                </div>
                
            </form>
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