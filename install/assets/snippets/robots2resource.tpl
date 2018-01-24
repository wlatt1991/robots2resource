<?php
/**
 * robots2resource
 *
 * robots.txt в ресурсе
 *
 * @category	snippet
 * @internal	@properties
 * @internal	@modx_category My Store
 * @internal    @installset base, sample
 */
$site_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') ? 'https' : 'http').'://'.$_SERVER['SERVER_NAME'].'/';

$out .= "User-agent: *".PHP_EOL;
$out .= "Sitemap: ".$site_url."sitemap.xml".PHP_EOL;
$out .= "Host: " . $site_url;

return $out;
