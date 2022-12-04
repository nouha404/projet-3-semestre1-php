
    <div class="container">
        <h2>Lister Exemplaire</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>DATE ENREGISTREMENT</th>
            </tr>
            <?php
                foreach($EXEMPLAIRE as $value ): ?>
                    <tr>
                        <td><?php echo $value['id'] ?></td>
                        <td><?php echo $value['date-enregistrement'] ?></td>
                    </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>