<div class="card-body">
    <table class="table">
        <tbody>
            <?php
            $count = 1;
            foreach ($data["wikis"] as $wiki) {
                echo "<tr>";
                echo "<td><img style='width:50px ; height:50px' src='data:image/jpeg;base64,{$wiki->__get('image')}' alt='Wiki Image'></td>";
                echo "<td>{$wiki->__get('nameWiki')}</td>";
                echo "</tr>";
                $count++;
            }
            ?>
        </tbody>
    </table>
</div>
