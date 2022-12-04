## USE A REFAIRE
#### Rayons
```php

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
```
#### OUVRAGE
```php

  <div class="conteneur">
    <h2>Lister Ouvrage</h2>

    <table>
            <tr>
                <th>ID</th>
                <th>TITRE</th>
                <th>DATE EDITION</th>
            </tr>
            <?php foreach ($ouvrages as $val):  ?>
                <tr>
                    <th><?php echo($val["id"]); ?> </th>
                    <th><?php echo($val["niveau"]); ?></th>
                    <th><?php echo($val["filiere"]); ?></th>
                    <th><?php echo($val["libelle"]); ?></th>
                </tr>
            <?php endforeach ?>
        </table>

</div>
```
#### EXEMPLAIRES

```php


<div class="conteneur">
    <h2>Lister EXEMPLAIRES</h2>

    <table>
            <tr>
                <th>ID</th>
                <th>TITRE</th>
                <th>DATE D'ENREGISTREMENT</th>
             
            </tr>
            <?php foreach ($exemplaires as $val):  ?>
                <tr>
                    <th><?php echo($val["id"]); ?> </th>
                    <th><?php echo($val["titre"]); ?></th>
                    <th><?php echo($val["date-enregistrement"]); ?></th>                    
                </tr>
            <?php endforeach ?>
        </table>

</div>
```

#### Auteurs

```php
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
```