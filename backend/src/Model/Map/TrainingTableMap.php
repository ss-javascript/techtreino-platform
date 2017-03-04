<?php

namespace AcademiaDigital\Model\Map;

use AcademiaDigital\AcademiaDigital\Training;
use AcademiaDigital\AcademiaDigital\TrainingQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'training' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TrainingTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'AcademiaDigital.AcademiaDigital.Map.TrainingTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'training';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\AcademiaDigital\\AcademiaDigital\\Training';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'AcademiaDigital.AcademiaDigital.Training';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 7;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 7;

    /**
     * the column name for the id field
     */
    const COL_ID = 'training.id';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'training.name';

    /**
     * the column name for the customer_id field
     */
    const COL_CUSTOMER_ID = 'training.customer_id';

    /**
     * the column name for the exercise_id field
     */
    const COL_EXERCISE_ID = 'training.exercise_id';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'training.created_at';

    /**
     * the column name for the modified_at field
     */
    const COL_MODIFIED_AT = 'training.modified_at';

    /**
     * the column name for the exercise_id1 field
     */
    const COL_EXERCISE_ID1 = 'training.exercise_id1';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Id', 'Name', 'CustomerId', 'ExerciseId', 'CreatedAt', 'ModifiedAt', 'ExerciseId1', ),
        self::TYPE_CAMELNAME     => array('id', 'name', 'customerId', 'exerciseId', 'createdAt', 'modifiedAt', 'exerciseId1', ),
        self::TYPE_COLNAME       => array(TrainingTableMap::COL_ID, TrainingTableMap::COL_NAME, TrainingTableMap::COL_CUSTOMER_ID, TrainingTableMap::COL_EXERCISE_ID, TrainingTableMap::COL_CREATED_AT, TrainingTableMap::COL_MODIFIED_AT, TrainingTableMap::COL_EXERCISE_ID1, ),
        self::TYPE_FIELDNAME     => array('id', 'name', 'customer_id', 'exercise_id', 'created_at', 'modified_at', 'exercise_id1', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Name' => 1, 'CustomerId' => 2, 'ExerciseId' => 3, 'CreatedAt' => 4, 'ModifiedAt' => 5, 'ExerciseId1' => 6, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'name' => 1, 'customerId' => 2, 'exerciseId' => 3, 'createdAt' => 4, 'modifiedAt' => 5, 'exerciseId1' => 6, ),
        self::TYPE_COLNAME       => array(TrainingTableMap::COL_ID => 0, TrainingTableMap::COL_NAME => 1, TrainingTableMap::COL_CUSTOMER_ID => 2, TrainingTableMap::COL_EXERCISE_ID => 3, TrainingTableMap::COL_CREATED_AT => 4, TrainingTableMap::COL_MODIFIED_AT => 5, TrainingTableMap::COL_EXERCISE_ID1 => 6, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'name' => 1, 'customer_id' => 2, 'exercise_id' => 3, 'created_at' => 4, 'modified_at' => 5, 'exercise_id1' => 6, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('training');
        $this->setPhpName('Training');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\AcademiaDigital\\AcademiaDigital\\Training');
        $this->setPackage('AcademiaDigital.AcademiaDigital');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'CHAR', true, null, null);
        $this->addForeignKey('customer_id', 'CustomerId', 'INTEGER', 'customer', 'id', true, null, null);
        $this->addColumn('exercise_id', 'ExerciseId', 'INTEGER', true, null, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', true, null, null);
        $this->addColumn('modified_at', 'ModifiedAt', 'TIMESTAMP', true, null, null);
        $this->addColumn('exercise_id1', 'ExerciseId1', 'INTEGER', true, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Customer', '\\AcademiaDigital\\AcademiaDigital\\Customer', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':customer_id',
    1 => ':id',
  ),
), null, null, null, false);
        $this->addRelation('TrainingExercise', '\\AcademiaDigital\\AcademiaDigital\\TrainingExercise', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':training_id',
    1 => ':id',
  ),
), null, null, 'TrainingExercises', false);
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? TrainingTableMap::CLASS_DEFAULT : TrainingTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (Training object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TrainingTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TrainingTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TrainingTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TrainingTableMap::OM_CLASS;
            /** @var Training $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TrainingTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = TrainingTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TrainingTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Training $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TrainingTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(TrainingTableMap::COL_ID);
            $criteria->addSelectColumn(TrainingTableMap::COL_NAME);
            $criteria->addSelectColumn(TrainingTableMap::COL_CUSTOMER_ID);
            $criteria->addSelectColumn(TrainingTableMap::COL_EXERCISE_ID);
            $criteria->addSelectColumn(TrainingTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(TrainingTableMap::COL_MODIFIED_AT);
            $criteria->addSelectColumn(TrainingTableMap::COL_EXERCISE_ID1);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.customer_id');
            $criteria->addSelectColumn($alias . '.exercise_id');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.modified_at');
            $criteria->addSelectColumn($alias . '.exercise_id1');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(TrainingTableMap::DATABASE_NAME)->getTable(TrainingTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TrainingTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TrainingTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TrainingTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Training or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Training object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TrainingTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \AcademiaDigital\AcademiaDigital\Training) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TrainingTableMap::DATABASE_NAME);
            $criteria->add(TrainingTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = TrainingQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TrainingTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TrainingTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the training table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TrainingQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Training or Criteria object.
     *
     * @param mixed               $criteria Criteria or Training object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TrainingTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Training object
        }

        if ($criteria->containsKey(TrainingTableMap::COL_ID) && $criteria->keyContainsValue(TrainingTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TrainingTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = TrainingQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TrainingTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TrainingTableMap::buildTableMap();