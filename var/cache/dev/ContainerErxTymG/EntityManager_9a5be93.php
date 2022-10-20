<?php

namespace ContainerErxTymG;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdf2c5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer10d21 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties15915 = [
        
    ];

    public function getConnection()
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'getConnection', array(), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'getMetadataFactory', array(), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'getExpressionBuilder', array(), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'beginTransaction', array(), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'getCache', array(), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->getCache();
    }

    public function transactional($func)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'transactional', array('func' => $func), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'wrapInTransaction', array('func' => $func), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'commit', array(), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->commit();
    }

    public function rollback()
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'rollback', array(), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'getClassMetadata', array('className' => $className), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'createQuery', array('dql' => $dql), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'createNamedQuery', array('name' => $name), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'createQueryBuilder', array(), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'flush', array('entity' => $entity), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'clear', array('entityName' => $entityName), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->clear($entityName);
    }

    public function close()
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'close', array(), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->close();
    }

    public function persist($entity)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'persist', array('entity' => $entity), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'remove', array('entity' => $entity), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'refresh', array('entity' => $entity), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'detach', array('entity' => $entity), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'merge', array('entity' => $entity), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'getRepository', array('entityName' => $entityName), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'contains', array('entity' => $entity), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'getEventManager', array(), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'getConfiguration', array(), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'isOpen', array(), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'getUnitOfWork', array(), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'getProxyFactory', array(), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'initializeObject', array('obj' => $obj), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'getFilters', array(), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'isFiltersStateClean', array(), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'hasFilters', array(), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return $this->valueHolderdf2c5->hasFilters();
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

        $instance->initializer10d21 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderdf2c5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdf2c5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdf2c5->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, '__get', ['name' => $name], $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        if (isset(self::$publicProperties15915[$name])) {
            return $this->valueHolderdf2c5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf2c5;

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

        $targetObject = $this->valueHolderdf2c5;
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
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf2c5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdf2c5;
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
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, '__isset', array('name' => $name), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf2c5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdf2c5;
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
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, '__unset', array('name' => $name), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf2c5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdf2c5;
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
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, '__clone', array(), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        $this->valueHolderdf2c5 = clone $this->valueHolderdf2c5;
    }

    public function __sleep()
    {
        $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, '__sleep', array(), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;

        return array('valueHolderdf2c5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer10d21 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer10d21;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer10d21 && ($this->initializer10d21->__invoke($valueHolderdf2c5, $this, 'initializeProxy', array(), $this->initializer10d21) || 1) && $this->valueHolderdf2c5 = $valueHolderdf2c5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdf2c5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdf2c5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
