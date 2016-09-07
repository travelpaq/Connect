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
 * Class Departure
 *
 * @package TravelPAQ
 */
class Departure
{
    var $date;
    var $transport_kind;
    var $Route;
    var $Place;
    /**
     * Constructor
     * @param Array data datos de la salida
     */
    public function __construct($data)
    {
		$this->Route = [];
		foreach ($data['Route'] as $key => $value) {
			$this->Route[] = new Route($value);
		}
        $this->Place = new Place($data['Place']);

        if(!array_key_exists('date', $data))
            $data['date'] = "";
        $this->date = $data['date'];

        if(!array_key_exists('transport_kind', $data))
            $data['transport_kind'] = "";
        $this->transport_kind = $data['transport_kind'];
    }

}