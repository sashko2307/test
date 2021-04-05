<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<picture>
    <source type="image/webp" srcset="img/garanty-01.webp">
    <source type="image/jpeg" srcset="img/garanty-01.jpg">
    <img src="img/garanty-01.jpg" alt="Моя картинка">
</picture>
<picture>
    <source type="image/webp" srcset="img/logo.webp">
    <source type="image/png" srcset="img/logo.png">
    <img src="img/logo.png" alt="Моя картинка">
</picture>



<?php


/**
 * Получает пути всех файлов и папок в указанной папке.
 *
 * @param  string $dir             Путь до папки (на конце со слэшем или без).
 * @param  bool   $recursive       Включить вложенные папки или нет?
 * @param  bool   $include_folders Включить ли в список пути на папки?
 *
 * @return array Вернет массив путей до файлов/папок.
 */
//$dir = "img";
function get_dir_files( $dir, $recursive = true, $include_folders = false ){
    if( ! is_dir($dir) )
        return array();

    $files = array();

    $dir = rtrim( $dir, '/\\' ); // удалим слэш на конце

    foreach( glob( "$dir/{,.}[!.,!..]*", GLOB_BRACE ) as $file ){

        if( is_dir( $file ) ){
            if( $include_folders )
                $files[] = $file;
            if( $recursive )
                $files = array_merge( $files, call_user_func( __FUNCTION__, $file, $recursive, $include_folders ) );
        }
        else
            $files[] = $file;
    }
    return $files;

}
$files = get_dir_files("img");

function bugWebp($file) {
    $img = fopen($file, "a+");
    fwrite($img, chr(0x00));
    fclose($img);
}

foreach ($files as $file) {
    $infoType = pathinfo($file);
    if ($infoType['extension'] == "jpg" || $infoType['extension'] == "jpeg") {
        $src = $file;
        $info = pathinfo($src);
        $img = imageCreateFromJpeg($src);
        imageWebp($img, $info['dirname'] . '/' . $info['filename'] . '.' . 'webp');
        imagedestroy($img);
        bugWebp($src);
    }

    if ($infoType['extension'] == "png") {
        $src = $file;
        $info = pathinfo($src);


        $img = imagecreatefrompng($src);
        imagepalettetotruecolor($img);
        imagealphablending($img, true);
        imagesavealpha($img, true);
        imageWebp($img, $info['dirname'] . '/' . $info['filename'] . '.' . 'webp');
        imagedestroy($img);

        bugWebp($src);
    }




}
//echo "<pre>";



?>

</body>
</html>