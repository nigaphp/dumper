<?php
/*
 * This file is part of the Nigatedev PHP framework package
 *
 * (c) Abass Ben Cheik <abass@todaysdev.com>
 */

namespace Nigatedev\Dumper\Template;

/**
* DumperTemplate class
*
* @author Abass Ben Cheik <abass@todaysdev.com>
*/
class DumperTemplate
{



  /**
  * @param mixed $data
  *
  * @return mixed data surround by <pre> and </pre> HTML tag
  */
    public function pre($data)
    {
    
        return $this->getDataType($data);
    }
  
  /**
   * @param mixed $data
   *
   * @return mixed
   */
    public function getDataType($data)
    {
        $dataType = gettype($data);
        switch ($dataType) {
            case 'string':
                echo $this->dataTypeIs(["Type" => "String", "Value" => $data, "Length" => strlen($data)]);
                break;
            case 'double':
                echo $this->dataTypeIs(["Type" => "Float", "Value" => $data]);
                break;
            case 'integer':
                echo $this->dataTypeIs(["Type" => "Integer", "Value" => $data]);
                break;
            case 'array':
                echo $this->dataTypeIs(["Type" => "Array", "Value" => $data]);
                break;
            case 'object':
                echo $this->dataTypeIs(["Type" => "Object", "Value" => $data::class."()"]);
                break;
            case 'boolean':
                if (!$data) {
                    $checkBool = "False";
                } else {
                    $checkBool = "True";
                }
                echo $this->dataTypeIs(["Type" => "Bool", "Value" => $checkBool]);
                break;
            case 'NULL':
                echo $this->dataTypeIs(["Type" => "NULL", []]);
        

            default:
                echo "This type of data is not implemented yet try default (var_dump())";
        }
    }
  
  
    public function dataTypeIs(mixed $params = []): mixed
    {
        foreach ($params as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $key => $arrayTypeValue) {
                    return "
         <i style='padding:0;background:#161a1a;'>
        <span style='color:#fff;'>
          <span style='color:#10ae00;'>
           [$key]
          </span>
           <span style='color:#960495'>=></span> Value => $arrayTypeValue
         </span> <br />
          </i>
          <br />
         ";
                }
            } else {
                return "
         <i style='padding:1px;background:#161a1a;'>
        <span style='color:#fff;'>
          <span style='color:#10ae00;'>
            $key
          </span>
           <span style='color:#960495'>=></span> $value
         </span> <br />
          </i>
          <br />
         ";
            }
        }
    }
}
