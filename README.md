# Steam Linux-Windows Symlinker

This script is designed to create symlinks between linux and windows steam
files to reduce disk usage.

It symlink .vpk files, used in Source Engine games, from windows to linux
(linux .vpk point o windows folder).

In my configuration, both linux and windows steamapps folders are in same
partition (ntfs). But I belive you can use other filesystems like ext4 for
linux games.

## Usage

Firt copy config.dist.php to config.php, then open and change the source
common folder, the destinations common folder, and the game list folder
where are placed .vpk files.

You have two options to symlink:
 * Option 1:
   * The windows steam game needs to be updated
   * Run createlink_force.php to force the link of all vpk files from windows
     to linux.
   * Run file integrity check on steam linux game to download the different
     files.
 * Option 2:
   * Download all updated game in windows and in linux.
   * Run createlink_ifequal.php to link only equal .vpk.
 * Test games in linux. If you get any error, run integrity file check.

## Additional info

 * To save more space, you can also symlink manually the "download" and the
"maps" folder (in kde dolphin is just drag windows folder and drop to linux,
selecting the "link here" option). Dont symlink resource folder, i get errors
doing this.

 * This script is meant to run in linux. I have troubles running on window link
and symlink function, while in linux they run ok.

 * After months, you games may update, and the symlink can be lost. I
recommend to run the second option.

 * In some cases vpk is really different between two systems. For example,
now my CS:GO have different pak01_008.vpk, pak01_009.vpk, while all other vpks
are equal. So follow all steps from the choosed option.
