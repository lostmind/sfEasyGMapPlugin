<?php


/**
 * This class adds structure of 'gmap_geocodes' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Tue Jun  9 20:48:40 2009
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    plugins.sfEasyGMapPlugin.lib.model.map
 */
class GMapCachedGeocodeMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.sfEasyGMapPlugin.lib.model.map.GMapCachedGeocodeMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(GMapCachedGeocodePeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(GMapCachedGeocodePeer::TABLE_NAME);
		$tMap->setPhpName('GMapCachedGeocode');
		$tMap->setClassname('GMapCachedGeocode');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('ADDRESS', 'Address', 'VARCHAR', true, 255);

		$tMap->addColumn('LON', 'Lon', 'FLOAT', false, null);

		$tMap->addColumn('LAT', 'Lat', 'FLOAT', false, null);

		$tMap->addColumn('ACCURACY', 'Accuracy', 'FLOAT', false, null);

	} // doBuild()

} // GMapCachedGeocodeMapBuilder
