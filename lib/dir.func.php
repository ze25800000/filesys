<?php
/**读取目录下的信息
 * @param $path
 * @return mixed
 */
function read_directory($path) {
    if (!is_dir($path)) {
        return $path;
    }
    $info   = [];
    $handle = opendir($path);
    while (($item = readdir($handle)) !== false) {
        if ($item != '.' && $item != '..') {
            $filePath           = $path . DIRECTORY_SEPARATOR . $item;
            $info['fileName']   = $filePath;
            $info['showName']   = $item;
            $info['readable']   = is_readable($filePath) ? true : false;
            $info['writable']   = is_writable($filePath) ? true : false;
            $info['executable'] = is_executable(($filePath)) ? true : false;
            $info['atime']      = date('Y/m/d H:i:s', fileatime($filePath));
            if (is_file($filePath)) {
                $arr['file'][] = $info;
            } else {
                $arr['dir'][] = $info;
            }
        }
    }
    closedir($handle);
    return $arr;
}