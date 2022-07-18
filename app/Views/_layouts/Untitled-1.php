<?php if (date('M') < 7) { ?>
    <?= date('Y') - 1; ?>/<?= date('Y'); ?> - Genap
<?php } elseif (date('M') >= 7) { ?>
    <?= date('Y'); ?>/<?= date('Y') + 1; ?> - Ganjil
<?php } ?>