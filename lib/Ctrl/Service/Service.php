<?php

namespace Ctrl\Service;

abstract class Service implements IService
{
    protected $_options = array();

    public function __construct(array $options = array())
    {
        $this->_setOptions($options);
        $this->init();
    }

    /**
     * Constructs a Service instance
     *
     * @param array $options
     * @return Ctrl\Service\Service
     */
    public static function factory(array $options = array())
    {
        $class = get_called_class();
        return new $class($options);
    }

    protected function _setOptions(array $options)
    {
        $this->_options = $options;
    }

    public function getOptions()
    {
        return $this->_options;
    }

    protected function init()
    {

    }

    public static function getType()
    {
        return get_called_class();
    }
}