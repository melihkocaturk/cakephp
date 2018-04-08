<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * UrlValidate component
 */
class UrlValidateComponent extends Component
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function validLimit($limit, $default)
    {
    	if (is_numeric($limit)) {
    		return $limit;
    	}

    	return $default;
    }
}
