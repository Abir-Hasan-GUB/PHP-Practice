<?php
function displayOptions($options){
    foreach($options as $select){
        printf ("<option value = '%s'>%s</option>", strtolower($select),ucwords($select));
    }
}
