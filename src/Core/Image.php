<?php
/**
 * TravelPAQ Connect Api 
 *
 * @package  TravelPAQ
 * 
 * @author   Facundo J Gonzalez <facujgg@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace TravelPAQ\PackagesAPI\Core;

use TravelPAQ\PackagesAPI\Exceptions\ValidationException;
/**
 * Class Image
 *
 * @package TravelPAQ
 */
class Image
{
    var $picture;
    var $thumbnail;
    /**
     * Constructor
     * @param Array data datos del servicio
     */
    public function __construct($data)
    {
        if(!array_key_exists('picture', $data))
            $data['picture'] = "";
        $this->picture = $data['picture'];
        if(!array_key_exists('thumbnail', $data))
            $data['thumbnail'] = "";
        $this->thumbnail = $data['thumbnail'];
    }

}