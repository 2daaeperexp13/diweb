<?php

namespace ContainerCQbJrXY;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'getConnection', array(), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'getMetadataFactory', array(), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'getExpressionBuilder', array(), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'beginTransaction', array(), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'getCache', array(), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'transactional', array('func' => $func), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->transactional($func);
    }

    public function commit()
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'commit', array(), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->commit();
    }

    public function rollback()
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'rollback', array(), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'getClassMetadata', array('className' => $className), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'createQuery', array('dql' => $dql), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'createNamedQuery', array('name' => $name), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'createQueryBuilder', array(), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'flush', array('entity' => $entity), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'clear', array('entityName' => $entityName), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->clear($entityName);
    }

    public function close()
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'close', array(), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->close();
    }

    public function persist($entity)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'persist', array('entity' => $entity), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'remove', array('entity' => $entity), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'refresh', array('entity' => $entity), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'detach', array('entity' => $entity), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'merge', array('entity' => $entity), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'contains', array('entity' => $entity), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'getEventManager', array(), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'getConfiguration', array(), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'isOpen', array(), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'getUnitOfWork', array(), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'getProxyFactory', array(), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'initializeObject', array('obj' => $obj), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'getFilters', array(), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'isFiltersStateClean', array(), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, 'hasFilters', array(), $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        return $this->valueHolder6ba1e->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer25ee0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6ba1e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6ba1e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6ba1e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer25ee0 && ($this->initializer25ee0->__invoke($valueHolder6ba1e, $this, '__get', ['name' => $name], $this->initializer25ee0) || 1) && $this->valueHolder6ba1e = $valueHolder6ba1e;

        if (isset(self::$publicProperties40786[$name])) {
            return $this->valueHolder6ba1e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
