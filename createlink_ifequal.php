<?php

/* See README.md */

if (! file_exists("config.php"))
    die("Please copy config.dist.php to config.php and configure variables");
else {
    include "config.php";
}

foreach ($GAMES_DIRS as $game)
{
    foreach (glob($COMMON_WINDOWS_DIR . DIRECTORY_SEPARATOR . $game . DIRECTORY_SEPARATOR . "*.vpk") as $origin_file)
    {
        $dest_file = $COMMON_LINUX_DIR . DIRECTORY_SEPARATOR . $game . DIRECTORY_SEPARATOR . basename($origin_file);
        if (file_exists($dest_file)) {
            if (filesize($dest_file) !== filesize($origin_file)) {
                echo "Not create symlink from $origin_file because dest_file is different \n\n";
                continue;
            } else {
                unlink($dest_file);
            }
        }
        symlink($origin_file, $dest_file);

        echo "Created Symlink between $origin_file to $dest_file \n\n";
    }
}
