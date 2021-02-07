<?php

namespace ContainerW66hSNb;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder91de4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf986e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7df94 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'getConnection', array(), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'getMetadataFactory', array(), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'getExpressionBuilder', array(), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'beginTransaction', array(), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'getCache', array(), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'transactional', array('func' => $func), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->transactional($func);
    }

    public function commit()
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'commit', array(), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->commit();
    }

    public function rollback()
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'rollback', array(), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'getClassMetadata', array('className' => $className), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'createQuery', array('dql' => $dql), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'createNamedQuery', array('name' => $name), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'createQueryBuilder', array(), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'flush', array('entity' => $entity), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'clear', array('entityName' => $entityName), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->clear($entityName);
    }

    public function close()
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'close', array(), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->close();
    }

    public function persist($entity)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'persist', array('entity' => $entity), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'remove', array('entity' => $entity), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'refresh', array('entity' => $entity), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'detach', array('entity' => $entity), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'merge', array('entity' => $entity), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'contains', array('entity' => $entity), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'getEventManager', array(), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'getConfiguration', array(), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'isOpen', array(), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'getUnitOfWork', array(), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'getProxyFactory', array(), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'initializeObject', array('obj' => $obj), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'getFilters', array(), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'isFiltersStateClean', array(), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'hasFilters', array(), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return $this->valueHolder91de4->hasFilters();
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

        $instance->initializerf986e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder91de4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder91de4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder91de4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, '__get', ['name' => $name], $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        if (isset(self::$publicProperties7df94[$name])) {
            return $this->valueHolder91de4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder91de4;

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

        $targetObject = $this->valueHolder91de4;
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
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder91de4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder91de4;
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
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, '__isset', array('name' => $name), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder91de4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder91de4;
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
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, '__unset', array('name' => $name), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder91de4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder91de4;
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
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, '__clone', array(), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        $this->valueHolder91de4 = clone $this->valueHolder91de4;
    }

    public function __sleep()
    {
        $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, '__sleep', array(), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;

        return array('valueHolder91de4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf986e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf986e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf986e && ($this->initializerf986e->__invoke($valueHolder91de4, $this, 'initializeProxy', array(), $this->initializerf986e) || 1) && $this->valueHolder91de4 = $valueHolder91de4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder91de4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder91de4;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
