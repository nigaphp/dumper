<?php
/*
 * This file is part of the Nigatedev PHP framework package 
 *
 * (c) Abass Ben Cheik <abass@todaysdev.com>
 */
 
namespace Nigatedev\Filesystem\Exceptions;

namespace Nigatedev\Dumper;

function dump($data) {
 return (new Dumper())->dumper($data);
}