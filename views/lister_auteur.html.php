    <div class="container">
        <h2>Lister les Auteurs</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>PROFESSION</th>
                <th>OUVRAGE ID</th>
            </tr>
            <?php
                foreach($AUTEURS as $value ): ?>
                    <tr>
                        <td><?php echo $value['id'] ?></td>
                        <td><?php echo $value['nom'] ?></td>
                        <td><?php echo $value['prenom'] ?></td>
                        <td><?php echo $value['profession'] ?></td>
                        <td><?php echo $value['ouvrage_id'] ?></td>
                    </tr>
            <?php endforeach ?>
        </table>
    </div>
