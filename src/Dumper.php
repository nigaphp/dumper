<?php
/*
 * This file is part of the Nigatedev PHP framework package
 *
 * (c) Abass Ben Cheik <abass@todaysdev.com>
 */
 
namespace Nigatedev\Dumper;
 
 use Nigatedev\Dumper\Template\DumperTemplate;
 
 /**
  * Dumper class
  *
  * @author Abass Ben Cheik <abass@todaysdev.com>
  */
class Dumper extends DumperTemplate
{
   
    /**
     * @params mixed $dumper
     *
     * @return string
     */
    public function dumper(mixed $data)
    {
        return  $this->pre($data);
    }
}
