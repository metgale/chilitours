
<?php
foreach ($data as $field => $value) {
    ?><br> <?php
    echo Inflector::humanize($field) . ': ' . h($value);
    ?><br> <?php
}
?>
