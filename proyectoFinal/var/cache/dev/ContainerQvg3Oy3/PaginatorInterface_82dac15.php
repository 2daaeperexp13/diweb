<?php

namespace ContainerQvg3Oy3;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6ba1e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer25ee0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties40786 = [
        
    ];

    public function paginate($target, int $page = 1, int $limit = 10, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        if ($this->valueHolder6ba1e === $returnValue = $this->valueHolder6ba1e->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializer25ee0 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder6ba1e) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder6ba1e = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, '__get', ['name' => $name], $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        if (isset(self::$publicProperties40786[$name])) {
            return $this->valueHolder6ba1e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6ba1e;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6ba1e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6ba1e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6ba1e;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, '__isset', array('name' => $name), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6ba1e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6ba1e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, '__unset', array('name' => $name), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6ba1e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6ba1e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, '__clone', array(), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        $this->valueHolder6ba1e = clone $this->valueHolder6ba1e;
    }

    public function __sleep()
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, '__sleep', array(), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return array('valueHolder6ba1e');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer25ee0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer25ee0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'initializeProxy', array(), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6ba1e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6ba1e;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
