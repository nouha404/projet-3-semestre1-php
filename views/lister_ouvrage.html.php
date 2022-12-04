    <div class="container">
        <h2>Lister Ouvrage</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>TITRE</th>
                <th>DATE D'EDITION</th>
            </tr>
            <?php
                foreach($OUVRAGE as $value ): ?>
                    <tr>
                        <td><?php echo $value['id'] ?></td>
                        <td><?php echo $value['titre'] ?></td>
                        <td><?php echo $value["date-d'édition"] ?></td>
                    </tr>
            <?php endforeach ?>
        </table>
    </div>