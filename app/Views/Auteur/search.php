<div class="card-body">
    <form method="POST" action="more">
        <table class="table">
            <tbody>
                <?php
                foreach ($data["wikis"] as $wiki) {
                    echo "<tr>";
                    echo "<td class='align-middle'><button type='submit' name='more' value='{$wiki->__get('idWiki')}' style='cursor:pointer'><img style='width:50px; height:50px' src='data:image/jpeg;base64,{$wiki->__get('image')}' alt='Wiki Image'></button></td>";
                    echo "<td class='text-center align-middle'><button type='submit' name='more' value='{$wiki->__get('idWiki')}' style='cursor:pointer'><strong>{$wiki->__get('nameWiki')}</strong></button></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </form>
</div>
