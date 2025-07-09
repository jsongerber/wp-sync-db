#!/bin/bash

{
    echo '<?php'
    cd ./source/
    find . -type f -name "*.php" -exec bash -c 'echo "// {}"; cat "{}"; echo;' ";" | sed -e '/^<?php$/d'
} >./wordpress-globals.php
