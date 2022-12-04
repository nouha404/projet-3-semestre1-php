    <div class="container">
        <h2>Lister les Rayons</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>NOM</th>
                <th>OUVRAGE ID</th>
            </tr>
            <?php
                foreach($RAYONS as $value ): ?>
                    <tr>
                        <td><?php echo $value['id'] ?></td>
                        <td><?php echo $value['nom'] ?></td>
                        <td><?php echo $value['ouvrage_id'] ?></td>
                    </tr>
            <?php endforeach ?>
        </table>
    </div>