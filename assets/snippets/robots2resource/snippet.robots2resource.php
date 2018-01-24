<?php
/**
 * robots2resource
 *
 * robots.txt в ресурсе
 *
 * @category	snippet
 * @version 	1.0
 * @license 	http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @author      Wlatt1991
 * @internal	@properties
 * @internal	@modx_category add
 * @internal    @installset base
 */

if(!defined('MODX_BASE_PATH')){die('What are you doing? Get out of here!');}

$site_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') ? 'https' : 'http').'://'.$_SERVER['SERVER_NAME'].'/';

$out .= "User-agent: *".PHP_EOL;
$out .= "Sitemap: ".$site_url."sitemap.xml".PHP_EOL;
$out .= "Host: " . $site_url;

return $out;
