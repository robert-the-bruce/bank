<div class="container">
    <div class="row">
        <div class="eleven columns">
            <table class="u-full-width">
                <thead>
                <tr>
                    <?php for ($i=0; $i<$stmt->columnCount(); $i++):
                        $meta[$i] = $stmt->getColumnMeta($i)?>
                        <th><?php echo $meta[$i]['name']?></th>
                    <?php endfor; ?>
                </tr>
                </thead>
                <tbody>
                <?php while($rows = $stmt->fetch(PDO::FETCH_NUM)):?>
                    <tr>
                        <?php foreach ($rows as $row):?>
                            <td><?php echo $row?></td>
                        <?php endforeach; ?>
                        <td>
                            <form action="" method="POST">
                                <input type="hidden" name="per_id" value="<?php echo $rows[0]; ?>">
                                <input type="submit" name="delete" value="Delete">
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
