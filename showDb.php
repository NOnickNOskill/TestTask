<?php require_once 'Db.php';?>
<?php $info = Db::getTableList(); ?>
            <?php foreach ($info as $infoShow): ?>
            <tr id="<?php echo $infoShow['id'].'row'; ?>">
                <td><?php echo $infoShow['id']; ?></td>
                <td><?php echo $infoShow['name']; ?></td>
                <td><?php echo $infoShow['price']; ?></td>
                <td><?php echo $infoShow['rating']; ?></td>
                <td style="width: 120px;">
                    <input type="button" value="delete" class="delete"
                           id="<?php echo $infoShow['id'].'del'; ?>" />
                    <input type="button" value="update" 
                            class="update" id="<?php echo $infoShow['id']; ?>" />
                </td>
            </tr>
            <?php endforeach; ?> 


