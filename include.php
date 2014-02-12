<?php if (!isset($_GET['theme']) || $_GET['theme'] == 'mammoth'): ?>
    <link rel="stylesheet" type="text/css" href="<?= RAPTOR_THEMES_URI; ?>mammoth/theme.css" />
    <link rel="stylesheet" type="text/css" href="<?= RAPTOR_THEMES_URI; ?>mammoth/theme-icons.css" />
<?php elseif (isset($_GET['theme']) && $_GET['theme'] == 'redmond'): ?>
    <link rel="stylesheet" type="text/css" href="<?= RAPTOR_THEMES_URI; ?>redmond/jquery-ui.css" />
<?php elseif (isset($_GET['theme']) && $_GET['theme'] == 'smoothness'): ?>
    <link rel="stylesheet" type="text/css" href="<?= RAPTOR_THEMES_URI; ?>smoothness/jquery-ui.css" />
<?php elseif (isset($_GET['theme']) && $_GET['theme'] == 'aristo'): ?>
    <link rel="stylesheet" type="text/css" href="<?= RAPTOR_THEMES_URI; ?>aristo/jquery-ui.css" />
<?php endif; ?>