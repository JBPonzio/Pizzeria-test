<?php

namespace ContainerYo7vf6a;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6e492 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializered337 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8b0f0 = [
        
    ];

    public function getConnection()
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'getConnection', array(), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'getMetadataFactory', array(), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'getExpressionBuilder', array(), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'beginTransaction', array(), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->beginTransaction();
    }

    public function getCache()
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'getCache', array(), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->getCache();
    }

    public function transactional($func)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'transactional', array('func' => $func), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->transactional($func);
    }

    public function commit()
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'commit', array(), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->commit();
    }

    public function rollback()
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'rollback', array(), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'getClassMetadata', array('className' => $className), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'createQuery', array('dql' => $dql), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'createNamedQuery', array('name' => $name), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'createQueryBuilder', array(), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'flush', array('entity' => $entity), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'clear', array('entityName' => $entityName), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->clear($entityName);
    }

    public function close()
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'close', array(), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->close();
    }

    public function persist($entity)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'persist', array('entity' => $entity), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'remove', array('entity' => $entity), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'refresh', array('entity' => $entity), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'detach', array('entity' => $entity), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'merge', array('entity' => $entity), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'getRepository', array('entityName' => $entityName), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'contains', array('entity' => $entity), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'getEventManager', array(), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'getConfiguration', array(), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'isOpen', array(), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'getUnitOfWork', array(), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'getProxyFactory', array(), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'initializeObject', array('obj' => $obj), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'getFilters', array(), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'isFiltersStateClean', array(), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'hasFilters', array(), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return $this->valueHolder6e492->hasFilters();
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

        $instance->initializered337 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6e492) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6e492 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6e492->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, '__get', ['name' => $name], $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        if (isset(self::$publicProperties8b0f0[$name])) {
            return $this->valueHolder6e492->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6e492;

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

        $targetObject = $this->valueHolder6e492;
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
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, '__set', array('name' => $name, 'value' => $value), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6e492;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6e492;
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
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, '__isset', array('name' => $name), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6e492;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6e492;
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
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, '__unset', array('name' => $name), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6e492;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6e492;
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
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, '__clone', array(), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        $this->valueHolder6e492 = clone $this->valueHolder6e492;
    }

    public function __sleep()
    {
        $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, '__sleep', array(), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;

        return array('valueHolder6e492');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializered337 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializered337;
    }

    public function initializeProxy() : bool
    {
        return $this->initializered337 && ($this->initializered337->__invoke($valueHolder6e492, $this, 'initializeProxy', array(), $this->initializered337) || 1) && $this->valueHolder6e492 = $valueHolder6e492;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6e492;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6e492;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
