<?php
/**
 * @example https://docs.phpmyadmin.net/en/latest/config.html
 */
$cfg['blowfish_secret']='multiServerExample70518';

$i = 0;

$i++; // server 1 :
$cfg['Servers'][$i]['verbose']   = 'docker';
$cfg['Servers'][$i]['host']      = 'mysql';


$i++;
$cfg['Servers'][$i]['verbose']   = 'localhost docker';
$cfg['Servers'][$i]['host']      = '127.0.0.1';
$cfg['Servers'][$i]['port']      = '3305';


$i++;
$cfg['Servers'][$i]['verbose']   = '10.93.192.205:3307';
$cfg['Servers'][$i]['host']      = '10.93.192.205';
$cfg['Servers'][$i]['port']      = '3307';

