<?php
/**
 *                    _ooOoo_
 *                   o8888888o
 *                   88" . "88
 *                   (| -_- |)
 *                   O\  =  /O
 *                ____/`---'\____
 *              .'  \|     |//  `.
 *             /  \|||  :  |||//  \
 *            /  _||||| -:- |||||-  \
 *            |   | \\  -  /// |   |
 *            | \_|  ''\---/''  |   |
 *            \  .-\__  `-`  ___/-. /
 *          ___`. .'  /--.--\  `. . __
 *       ."" '<  `.___\_<|>_/___.'  >'"".
 *      | | :  `- \`.;`\ _ /`;.`/ - ` : | |
 *      \  \ `-.   \_ __\ /__ _/   .-` /  /
 * ======`-.____`-.___\_____/___.-`____.-'======
 *                    `=---='
 * ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
 *         佛祖保佑       永无BUG        阿弥陀佛
 */

namespace core;

/**
 * 路由类
 */
class Rotate
{
    // URL 参数
    public static $url = null;

    /**
     * 获取 URL 参数并返回，并且为 $URL 赋值
     * @return string 返回解析后的 URL 参数
     */
    public static function getAddr()
    {
        //获取 index.php/action=login 这样的参数
        $path_info      = empty($_SERVER['PATH_INFO']) ? '' : $_SERVER['PATH_INFO'];
        $orig_path_info = empty($_SERVER['ORIG_PATH_INFO']) ? '' : $_SERVER['ORIG_PATH_INFO'];
        $url            = $path_info ? $path_info : $orig_path_info;
        //获取 ? 之后的参数
        if (!$url) {
            $url = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '';
        }

        return self::$url = $url;
    }
}


