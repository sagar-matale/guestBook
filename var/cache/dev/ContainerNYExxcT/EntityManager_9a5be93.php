<?php

namespace ContainerNYExxcT;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf5473 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer33741 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties75568 = [
        
    ];

    public function getConnection()
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'getConnection', array(), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'getMetadataFactory', array(), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'getExpressionBuilder', array(), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'beginTransaction', array(), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'getCache', array(), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->getCache();
    }

    public function transactional($func)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'transactional', array('func' => $func), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'wrapInTransaction', array('func' => $func), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'commit', array(), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->commit();
    }

    public function rollback()
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'rollback', array(), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'getClassMetadata', array('className' => $className), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'createQuery', array('dql' => $dql), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'createNamedQuery', array('name' => $name), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'createQueryBuilder', array(), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'flush', array('entity' => $entity), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'clear', array('entityName' => $entityName), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->clear($entityName);
    }

    public function close()
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'close', array(), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->close();
    }

    public function persist($entity)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'persist', array('entity' => $entity), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'remove', array('entity' => $entity), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'refresh', array('entity' => $entity), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'detach', array('entity' => $entity), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'merge', array('entity' => $entity), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'getRepository', array('entityName' => $entityName), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'contains', array('entity' => $entity), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'getEventManager', array(), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'getConfiguration', array(), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'isOpen', array(), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'getUnitOfWork', array(), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'getProxyFactory', array(), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'initializeObject', array('obj' => $obj), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'getFilters', array(), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'isFiltersStateClean', array(), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'hasFilters', array(), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return $this->valueHolderf5473->hasFilters();
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

        $instance->initializer33741 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderf5473) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf5473 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf5473->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, '__get', ['name' => $name], $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        if (isset(self::$publicProperties75568[$name])) {
            return $this->valueHolderf5473->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5473;

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

        $targetObject = $this->valueHolderf5473;
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
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5473;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf5473;
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
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, '__isset', array('name' => $name), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5473;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf5473;
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
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, '__unset', array('name' => $name), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5473;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf5473;
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
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, '__clone', array(), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        $this->valueHolderf5473 = clone $this->valueHolderf5473;
    }

    public function __sleep()
    {
        $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, '__sleep', array(), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;

        return array('valueHolderf5473');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer33741 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer33741;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer33741 && ($this->initializer33741->__invoke($valueHolderf5473, $this, 'initializeProxy', array(), $this->initializer33741) || 1) && $this->valueHolderf5473 = $valueHolderf5473;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf5473;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf5473;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
