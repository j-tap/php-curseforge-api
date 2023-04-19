<?php
/**
 * Mod
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Aternos\CurseForgeApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CurseForge API
 *
 * HTTP API for CurseForge
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Aternos\CurseForgeApi\Model;

use \ArrayAccess;
use \Aternos\CurseForgeApi\ObjectSerializer;

/**
 * Mod Class Doc Comment
 *
 * @category Class
 * @package  Aternos\CurseForgeApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Mod implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Mod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'game_id' => 'int',
        'name' => 'string',
        'slug' => 'string',
        'links' => '\Aternos\CurseForgeApi\Model\ModLinks',
        'summary' => 'string',
        'status' => '\Aternos\CurseForgeApi\Model\ModStatus',
        'download_count' => 'int',
        'is_featured' => 'mixed',
        'primary_category_id' => 'int',
        'categories' => '\Aternos\CurseForgeApi\Model\Category[]',
        'class_id' => 'int',
        'authors' => '\Aternos\CurseForgeApi\Model\ModAuthor[]',
        'logo' => '\Aternos\CurseForgeApi\Model\ModAsset',
        'screenshots' => '\Aternos\CurseForgeApi\Model\ModAsset[]',
        'main_file_id' => 'int',
        'latest_files' => '\Aternos\CurseForgeApi\Model\File[]',
        'latest_file_indexes' => '\Aternos\CurseForgeApi\Model\FileIndex[]',
        'date_created' => '\DateTime',
        'date_modified' => '\DateTime',
        'date_released' => '\DateTime',
        'allow_mod_distribution' => 'bool',
        'game_popularity_rank' => 'int',
        'is_available' => 'bool',
        'thumbs_up_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'game_id' => 'int64',
        'name' => null,
        'slug' => null,
        'links' => null,
        'summary' => null,
        'status' => null,
        'download_count' => 'int64',
        'is_featured' => 'boolean',
        'primary_category_id' => 'int32',
        'categories' => null,
        'class_id' => 'int32',
        'authors' => null,
        'logo' => null,
        'screenshots' => null,
        'main_file_id' => 'int32',
        'latest_files' => null,
        'latest_file_indexes' => null,
        'date_created' => 'date-time',
        'date_modified' => 'date-time',
        'date_released' => 'date-time',
        'allow_mod_distribution' => null,
        'game_popularity_rank' => 'int32',
        'is_available' => null,
        'thumbs_up_count' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'game_id' => false,
		'name' => false,
		'slug' => false,
		'links' => false,
		'summary' => false,
		'status' => false,
		'download_count' => false,
		'is_featured' => true,
		'primary_category_id' => false,
		'categories' => false,
		'class_id' => true,
		'authors' => false,
		'logo' => false,
		'screenshots' => false,
		'main_file_id' => false,
		'latest_files' => false,
		'latest_file_indexes' => false,
		'date_created' => false,
		'date_modified' => false,
		'date_released' => false,
		'allow_mod_distribution' => true,
		'game_popularity_rank' => false,
		'is_available' => false,
		'thumbs_up_count' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'game_id' => 'gameId',
        'name' => 'name',
        'slug' => 'slug',
        'links' => 'links',
        'summary' => 'summary',
        'status' => 'status',
        'download_count' => 'downloadCount',
        'is_featured' => 'isFeatured',
        'primary_category_id' => 'primaryCategoryId',
        'categories' => 'categories',
        'class_id' => 'classId',
        'authors' => 'authors',
        'logo' => 'logo',
        'screenshots' => 'screenshots',
        'main_file_id' => 'mainFileId',
        'latest_files' => 'latestFiles',
        'latest_file_indexes' => 'latestFileIndexes',
        'date_created' => 'dateCreated',
        'date_modified' => 'dateModified',
        'date_released' => 'dateReleased',
        'allow_mod_distribution' => 'allowModDistribution',
        'game_popularity_rank' => 'gamePopularityRank',
        'is_available' => 'isAvailable',
        'thumbs_up_count' => 'thumbsUpCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'game_id' => 'setGameId',
        'name' => 'setName',
        'slug' => 'setSlug',
        'links' => 'setLinks',
        'summary' => 'setSummary',
        'status' => 'setStatus',
        'download_count' => 'setDownloadCount',
        'is_featured' => 'setIsFeatured',
        'primary_category_id' => 'setPrimaryCategoryId',
        'categories' => 'setCategories',
        'class_id' => 'setClassId',
        'authors' => 'setAuthors',
        'logo' => 'setLogo',
        'screenshots' => 'setScreenshots',
        'main_file_id' => 'setMainFileId',
        'latest_files' => 'setLatestFiles',
        'latest_file_indexes' => 'setLatestFileIndexes',
        'date_created' => 'setDateCreated',
        'date_modified' => 'setDateModified',
        'date_released' => 'setDateReleased',
        'allow_mod_distribution' => 'setAllowModDistribution',
        'game_popularity_rank' => 'setGamePopularityRank',
        'is_available' => 'setIsAvailable',
        'thumbs_up_count' => 'setThumbsUpCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'game_id' => 'getGameId',
        'name' => 'getName',
        'slug' => 'getSlug',
        'links' => 'getLinks',
        'summary' => 'getSummary',
        'status' => 'getStatus',
        'download_count' => 'getDownloadCount',
        'is_featured' => 'getIsFeatured',
        'primary_category_id' => 'getPrimaryCategoryId',
        'categories' => 'getCategories',
        'class_id' => 'getClassId',
        'authors' => 'getAuthors',
        'logo' => 'getLogo',
        'screenshots' => 'getScreenshots',
        'main_file_id' => 'getMainFileId',
        'latest_files' => 'getLatestFiles',
        'latest_file_indexes' => 'getLatestFileIndexes',
        'date_created' => 'getDateCreated',
        'date_modified' => 'getDateModified',
        'date_released' => 'getDateReleased',
        'allow_mod_distribution' => 'getAllowModDistribution',
        'game_popularity_rank' => 'getGamePopularityRank',
        'is_available' => 'getIsAvailable',
        'thumbs_up_count' => 'getThumbsUpCount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('game_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('slug', $data ?? [], null);
        $this->setIfExists('links', $data ?? [], null);
        $this->setIfExists('summary', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('download_count', $data ?? [], null);
        $this->setIfExists('is_featured', $data ?? [], null);
        $this->setIfExists('primary_category_id', $data ?? [], null);
        $this->setIfExists('categories', $data ?? [], null);
        $this->setIfExists('class_id', $data ?? [], null);
        $this->setIfExists('authors', $data ?? [], null);
        $this->setIfExists('logo', $data ?? [], null);
        $this->setIfExists('screenshots', $data ?? [], null);
        $this->setIfExists('main_file_id', $data ?? [], null);
        $this->setIfExists('latest_files', $data ?? [], null);
        $this->setIfExists('latest_file_indexes', $data ?? [], null);
        $this->setIfExists('date_created', $data ?? [], null);
        $this->setIfExists('date_modified', $data ?? [], null);
        $this->setIfExists('date_released', $data ?? [], null);
        $this->setIfExists('allow_mod_distribution', $data ?? [], null);
        $this->setIfExists('game_popularity_rank', $data ?? [], null);
        $this->setIfExists('is_available', $data ?? [], null);
        $this->setIfExists('thumbs_up_count', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id The mod id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets game_id
     *
     * @return int|null
     */
    public function getGameId()
    {
        return $this->container['game_id'];
    }

    /**
     * Sets game_id
     *
     * @param int|null $game_id The game id this mod is for
     *
     * @return self
     */
    public function setGameId($game_id)
    {
        if (is_null($game_id)) {
            throw new \InvalidArgumentException('non-nullable game_id cannot be null');
        }
        $this->container['game_id'] = $game_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the mod
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string|null
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string|null $slug The mod slug that would appear in the URL
     *
     * @return self
     */
    public function setSlug($slug)
    {
        if (is_null($slug)) {
            throw new \InvalidArgumentException('non-nullable slug cannot be null');
        }
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \Aternos\CurseForgeApi\Model\ModLinks|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Aternos\CurseForgeApi\Model\ModLinks|null $links links
     *
     * @return self
     */
    public function setLinks($links)
    {
        if (is_null($links)) {
            throw new \InvalidArgumentException('non-nullable links cannot be null');
        }
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string|null
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string|null $summary Mod summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        if (is_null($summary)) {
            throw new \InvalidArgumentException('non-nullable summary cannot be null');
        }
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Aternos\CurseForgeApi\Model\ModStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Aternos\CurseForgeApi\Model\ModStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets download_count
     *
     * @return int|null
     */
    public function getDownloadCount()
    {
        return $this->container['download_count'];
    }

    /**
     * Sets download_count
     *
     * @param int|null $download_count Number of downloads for the mod
     *
     * @return self
     */
    public function setDownloadCount($download_count)
    {
        if (is_null($download_count)) {
            throw new \InvalidArgumentException('non-nullable download_count cannot be null');
        }
        $this->container['download_count'] = $download_count;

        return $this;
    }

    /**
     * Gets is_featured
     *
     * @return mixed|null
     */
    public function getIsFeatured()
    {
        return $this->container['is_featured'];
    }

    /**
     * Sets is_featured
     *
     * @param mixed|null $is_featured Whether the mod is included in the featured mods list
     *
     * @return self
     */
    public function setIsFeatured($is_featured)
    {
        if (is_null($is_featured)) {
            array_push($this->openAPINullablesSetToNull, 'is_featured');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_featured', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_featured'] = $is_featured;

        return $this;
    }

    /**
     * Gets primary_category_id
     *
     * @return int|null
     */
    public function getPrimaryCategoryId()
    {
        return $this->container['primary_category_id'];
    }

    /**
     * Sets primary_category_id
     *
     * @param int|null $primary_category_id The main category of the mod as it was chosen by the mod author
     *
     * @return self
     */
    public function setPrimaryCategoryId($primary_category_id)
    {
        if (is_null($primary_category_id)) {
            throw new \InvalidArgumentException('non-nullable primary_category_id cannot be null');
        }
        $this->container['primary_category_id'] = $primary_category_id;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \Aternos\CurseForgeApi\Model\Category[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \Aternos\CurseForgeApi\Model\Category[]|null $categories List of categories that this mod is related to
     *
     * @return self
     */
    public function setCategories($categories)
    {
        if (is_null($categories)) {
            throw new \InvalidArgumentException('non-nullable categories cannot be null');
        }
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets class_id
     *
     * @return int|null
     */
    public function getClassId()
    {
        return $this->container['class_id'];
    }

    /**
     * Sets class_id
     *
     * @param int|null $class_id The class id this mod belongs to
     *
     * @return self
     */
    public function setClassId($class_id)
    {
        if (is_null($class_id)) {
            array_push($this->openAPINullablesSetToNull, 'class_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('class_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['class_id'] = $class_id;

        return $this;
    }

    /**
     * Gets authors
     *
     * @return \Aternos\CurseForgeApi\Model\ModAuthor[]|null
     */
    public function getAuthors()
    {
        return $this->container['authors'];
    }

    /**
     * Sets authors
     *
     * @param \Aternos\CurseForgeApi\Model\ModAuthor[]|null $authors List of the mod's authors
     *
     * @return self
     */
    public function setAuthors($authors)
    {
        if (is_null($authors)) {
            throw new \InvalidArgumentException('non-nullable authors cannot be null');
        }
        $this->container['authors'] = $authors;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return \Aternos\CurseForgeApi\Model\ModAsset|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param \Aternos\CurseForgeApi\Model\ModAsset|null $logo logo
     *
     * @return self
     */
    public function setLogo($logo)
    {
        if (is_null($logo)) {
            throw new \InvalidArgumentException('non-nullable logo cannot be null');
        }
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets screenshots
     *
     * @return \Aternos\CurseForgeApi\Model\ModAsset[]|null
     */
    public function getScreenshots()
    {
        return $this->container['screenshots'];
    }

    /**
     * Sets screenshots
     *
     * @param \Aternos\CurseForgeApi\Model\ModAsset[]|null $screenshots List of screenshots assets
     *
     * @return self
     */
    public function setScreenshots($screenshots)
    {
        if (is_null($screenshots)) {
            throw new \InvalidArgumentException('non-nullable screenshots cannot be null');
        }
        $this->container['screenshots'] = $screenshots;

        return $this;
    }

    /**
     * Gets main_file_id
     *
     * @return int|null
     */
    public function getMainFileId()
    {
        return $this->container['main_file_id'];
    }

    /**
     * Sets main_file_id
     *
     * @param int|null $main_file_id The id of the main file of the mod
     *
     * @return self
     */
    public function setMainFileId($main_file_id)
    {
        if (is_null($main_file_id)) {
            throw new \InvalidArgumentException('non-nullable main_file_id cannot be null');
        }
        $this->container['main_file_id'] = $main_file_id;

        return $this;
    }

    /**
     * Gets latest_files
     *
     * @return \Aternos\CurseForgeApi\Model\File[]|null
     */
    public function getLatestFiles()
    {
        return $this->container['latest_files'];
    }

    /**
     * Sets latest_files
     *
     * @param \Aternos\CurseForgeApi\Model\File[]|null $latest_files List of latest files of the mod
     *
     * @return self
     */
    public function setLatestFiles($latest_files)
    {
        if (is_null($latest_files)) {
            throw new \InvalidArgumentException('non-nullable latest_files cannot be null');
        }
        $this->container['latest_files'] = $latest_files;

        return $this;
    }

    /**
     * Gets latest_file_indexes
     *
     * @return \Aternos\CurseForgeApi\Model\FileIndex[]|null
     */
    public function getLatestFileIndexes()
    {
        return $this->container['latest_file_indexes'];
    }

    /**
     * Sets latest_file_indexes
     *
     * @param \Aternos\CurseForgeApi\Model\FileIndex[]|null $latest_file_indexes List of file related details for the latest files of the mod
     *
     * @return self
     */
    public function setLatestFileIndexes($latest_file_indexes)
    {
        if (is_null($latest_file_indexes)) {
            throw new \InvalidArgumentException('non-nullable latest_file_indexes cannot be null');
        }
        $this->container['latest_file_indexes'] = $latest_file_indexes;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return \DateTime|null
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param \DateTime|null $date_created The creation date of the mod
     *
     * @return self
     */
    public function setDateCreated($date_created)
    {
        if (is_null($date_created)) {
            throw new \InvalidArgumentException('non-nullable date_created cannot be null');
        }
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets date_modified
     *
     * @return \DateTime|null
     */
    public function getDateModified()
    {
        return $this->container['date_modified'];
    }

    /**
     * Sets date_modified
     *
     * @param \DateTime|null $date_modified The last time the mod was modified
     *
     * @return self
     */
    public function setDateModified($date_modified)
    {
        if (is_null($date_modified)) {
            throw new \InvalidArgumentException('non-nullable date_modified cannot be null');
        }
        $this->container['date_modified'] = $date_modified;

        return $this;
    }

    /**
     * Gets date_released
     *
     * @return \DateTime|null
     */
    public function getDateReleased()
    {
        return $this->container['date_released'];
    }

    /**
     * Sets date_released
     *
     * @param \DateTime|null $date_released The release date of the mod
     *
     * @return self
     */
    public function setDateReleased($date_released)
    {
        if (is_null($date_released)) {
            throw new \InvalidArgumentException('non-nullable date_released cannot be null');
        }
        $this->container['date_released'] = $date_released;

        return $this;
    }

    /**
     * Gets allow_mod_distribution
     *
     * @return bool|null
     */
    public function getAllowModDistribution()
    {
        return $this->container['allow_mod_distribution'];
    }

    /**
     * Sets allow_mod_distribution
     *
     * @param bool|null $allow_mod_distribution Is mod allowed to be distributed
     *
     * @return self
     */
    public function setAllowModDistribution($allow_mod_distribution)
    {
        if (is_null($allow_mod_distribution)) {
            array_push($this->openAPINullablesSetToNull, 'allow_mod_distribution');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('allow_mod_distribution', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['allow_mod_distribution'] = $allow_mod_distribution;

        return $this;
    }

    /**
     * Gets game_popularity_rank
     *
     * @return int|null
     */
    public function getGamePopularityRank()
    {
        return $this->container['game_popularity_rank'];
    }

    /**
     * Sets game_popularity_rank
     *
     * @param int|null $game_popularity_rank The mod popularity rank for the game
     *
     * @return self
     */
    public function setGamePopularityRank($game_popularity_rank)
    {
        if (is_null($game_popularity_rank)) {
            throw new \InvalidArgumentException('non-nullable game_popularity_rank cannot be null');
        }
        $this->container['game_popularity_rank'] = $game_popularity_rank;

        return $this;
    }

    /**
     * Gets is_available
     *
     * @return bool|null
     */
    public function getIsAvailable()
    {
        return $this->container['is_available'];
    }

    /**
     * Sets is_available
     *
     * @param bool|null $is_available Is the mod available for search. This can be false when a mod is experimental, in a deleted state or has only alpha files
     *
     * @return self
     */
    public function setIsAvailable($is_available)
    {
        if (is_null($is_available)) {
            throw new \InvalidArgumentException('non-nullable is_available cannot be null');
        }
        $this->container['is_available'] = $is_available;

        return $this;
    }

    /**
     * Gets thumbs_up_count
     *
     * @return int|null
     */
    public function getThumbsUpCount()
    {
        return $this->container['thumbs_up_count'];
    }

    /**
     * Sets thumbs_up_count
     *
     * @param int|null $thumbs_up_count The mod's thumbs up count
     *
     * @return self
     */
    public function setThumbsUpCount($thumbs_up_count)
    {
        if (is_null($thumbs_up_count)) {
            throw new \InvalidArgumentException('non-nullable thumbs_up_count cannot be null');
        }
        $this->container['thumbs_up_count'] = $thumbs_up_count;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

