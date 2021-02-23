<?php
/**
 * @example https://docs.phpmyadmin.net/en/latest/config.html
 */
$cfg['blowfish_secret']='multiServerExample70518';

$i = 0;

//不能用localhost，需要本机ip
$i++;
$cfg['Servers'][$i]['verbose']   = 'localhost docker';
$cfg['Servers'][$i]['host']      = '10.222.101.182';
$cfg['Servers'][$i]['port']      = '3306';


$i++;
$cfg['Servers'][$i]['verbose']   = '10.77.96.29:3308';
$cfg['Servers'][$i]['host']      = '10.77.96.29';
$cfg['Servers'][$i]['port']      = '3308';

