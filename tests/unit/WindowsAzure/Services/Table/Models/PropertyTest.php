<?php

/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * PHP version 5
 *
 * @category  Microsoft
 * @package   PEAR2\Tests\Unit\WindowsAzure\Services\Table\Models
 * @author    Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */
namespace PEAR2\Tests\Unit\WindowsAzure\Services\Table\Models;
use PEAR2\WindowsAzure\Services\Table\Models\Property;
use PEAR2\WindowsAzure\Services\Table\Models\EdmType;

/**
 * Unit tests for class Property
 *
 * @category  Microsoft
 * @package   PEAR2\Tests\Unit\WindowsAzure\Services\Table\Models
 * @author    Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */
class PropertyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers PEAR2\WindowsAzure\Services\Table\Models\Property::setEdmType
     * @covers PEAR2\WindowsAzure\Services\Table\Models\Property::getEdmType
     */
    public function testSetEdmType()
    {
        // Setup
        $pro = new Property();
        $expected = EdmType::BINARY;
        
        // Test
        $pro->setEdmType($expected);
        
        // Assert
        $this->assertEquals($expected, $pro->getEdmType());
    }
    
    /**
     * @covers PEAR2\WindowsAzure\Services\Table\Models\Property::setValue
     * @covers PEAR2\WindowsAzure\Services\Table\Models\Property::getValue
     */
    public function testSetValue()
    {
        // Setup
        $pro = new Property();
        $expected = 'wal3a';
        
        // Test
        $pro->setValue($expected);
        
        // Assert
        $this->assertEquals($expected, $pro->getValue());
    }
}

?>
