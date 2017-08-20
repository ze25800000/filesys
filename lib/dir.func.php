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

/**创建目录
 * @param $path 目录名称
 * @return bool|string
 */
function create_dir($path) {
    if (is_dir($path)) {
        return $path . '当前目录已存在重名目录';
    }
    if (!mkdir($path, true)) {
        return $path . '目录创建失败';
    }
    return true;
}