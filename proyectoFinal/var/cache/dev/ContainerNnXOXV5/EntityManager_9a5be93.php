<?php

namespace ContainerNnXOXV5;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2afc7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer58fc7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb958b = [
        
    ];

    public function getConnection()
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'getConnection', array(), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'getMetadataFactory', array(), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'getExpressionBuilder', array(), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'beginTransaction', array(), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'getCache', array(), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->getCache();
    }

    public function transactional($func)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'transactional', array('func' => $func), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->transactional($func);
    }

    public function commit()
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'commit', array(), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->commit();
    }

    public function rollback()
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'rollback', array(), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'getClassMetadata', array('className' => $className), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'createQuery', array('dql' => $dql), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'createNamedQuery', array('name' => $name), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'createQueryBuilder', array(), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'flush', array('entity' => $entity), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'clear', array('entityName' => $entityName), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->clear($entityName);
    }

    public function close()
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'close', array(), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->close();
    }

    public function persist($entity)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'persist', array('entity' => $entity), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'remove', array('entity' => $entity), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'refresh', array('entity' => $entity), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'detach', array('entity' => $entity), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'merge', array('entity' => $entity), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'getRepository', array('entityName' => $entityName), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'contains', array('entity' => $entity), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'getEventManager', array(), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'getConfiguration', array(), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'isOpen', array(), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'getUnitOfWork', array(), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'getProxyFactory', array(), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'initializeObject', array('obj' => $obj), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'getFilters', array(), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'isFiltersStateClean', array(), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'hasFilters', array(), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return $this->valueHolder2afc7->hasFilters();
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

        $instance->initializer58fc7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2afc7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2afc7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2afc7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, '__get', ['name' => $name], $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        if (isset(self::$publicPropertiesb958b[$name])) {
            return $this->valueHolder2afc7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2afc7;

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

        $targetObject = $this->valueHolder2afc7;
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
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2afc7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2afc7;
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
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, '__isset', array('name' => $name), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2afc7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2afc7;
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
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, '__unset', array('name' => $name), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2afc7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2afc7;
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
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, '__clone', array(), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        $this->valueHolder2afc7 = clone $this->valueHolder2afc7;
    }

    public function __sleep()
    {
        $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, '__sleep', array(), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;

        return array('valueHolder2afc7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer58fc7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer58fc7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer58fc7 && ($this->initializer58fc7->__invoke($valueHolder2afc7, $this, 'initializeProxy', array(), $this->initializer58fc7) || 1) && $this->valueHolder2afc7 = $valueHolder2afc7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2afc7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2afc7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
