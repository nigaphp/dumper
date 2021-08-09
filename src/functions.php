<?php
/*
 * This file is part of the Nigatedev PHP framework package
 *
 * (c) Abass Ben Cheik <abass@todaysdev.com>
 */
 
 use Nigatedev\Dumper\Dumper;
 
 /**
  * @param mixed $data
  *
  * @return void
  */
function dump($data)
{
    echo (new Dumper())->dumper($data);
}
 
 /**
  * @param mixed $data
  *
  * @return void
  */
function dd($data)
{
    die((new dumper())->dumper($data));
}
