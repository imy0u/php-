<?php

/**
 * Class util这是写在php语句上方的多行注释
 *
 *
 * ssss
 * sss
 */

/**
 * Created by PhpStorm.
 * User: hhl91
 * Date: 2019/4/1
 * Time: 23:13
 */

    class util
    {
        /**
         * 方法说明：给字符串加前缀
         * 参数：string ￥str
         * 返回值 string
         */
        function addPrefix($str)
        {
            $str.='mingri';
            return $str;
        }
    }
    echo '这样会出错的的!!!!!!';
    $name="胡豪雷太帅了";
    $gender="女";
    $age="18";
    $height="181";
    $weight="66";
    echo "姓名:".$name."<br>";
    echo "性别:".$gender."<br>";
    echo "年龄:".$age."<br>";
    echo "身高:".$height."<br>";
    echo "体重:".$weight."<br>";
    ?>
