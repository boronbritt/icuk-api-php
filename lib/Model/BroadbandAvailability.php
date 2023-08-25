<?php
/**
 * BroadbandAvailability
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API Documentation
 *
 * The ICUK API provides an interface to the reseller control panel which can be used to control the provisioning and configuration of facilities remotely
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * BroadbandAvailability Class Doc Comment
 *
 * @category Class
 * @description Represents broadband availability
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BroadbandAvailability implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BroadbandAvailability';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'availability' => 'bool',
        'provider' => 'string',
        'limited_capacity' => 'bool',
        'name' => 'string',
        'range_bottom' => 'float',
        'range_top' => 'float',
        'likely_down_speed' => 'float',
        'likely_up_speed' => 'float',
        'availability_date' => '\DateTime',
        'speed_range' => 'string',
        'speed_range_up' => 'string',
        'technology' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'availability' => null,
        'provider' => null,
        'limited_capacity' => null,
        'name' => null,
        'range_bottom' => 'double',
        'range_top' => 'double',
        'likely_down_speed' => 'double',
        'likely_up_speed' => 'double',
        'availability_date' => 'date-time',
        'speed_range' => null,
        'speed_range_up' => null,
        'technology' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'availability' => false,
		'provider' => false,
		'limited_capacity' => false,
		'name' => true,
		'range_bottom' => true,
		'range_top' => true,
		'likely_down_speed' => true,
		'likely_up_speed' => true,
		'availability_date' => true,
		'speed_range' => true,
		'speed_range_up' => true,
		'technology' => true
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
        'availability' => 'availability',
        'provider' => 'provider',
        'limited_capacity' => 'limited_capacity',
        'name' => 'name',
        'range_bottom' => 'range_bottom',
        'range_top' => 'range_top',
        'likely_down_speed' => 'likely_down_speed',
        'likely_up_speed' => 'likely_up_speed',
        'availability_date' => 'availability_date',
        'speed_range' => 'speed_range',
        'speed_range_up' => 'speed_range_up',
        'technology' => 'technology'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'availability' => 'setAvailability',
        'provider' => 'setProvider',
        'limited_capacity' => 'setLimitedCapacity',
        'name' => 'setName',
        'range_bottom' => 'setRangeBottom',
        'range_top' => 'setRangeTop',
        'likely_down_speed' => 'setLikelyDownSpeed',
        'likely_up_speed' => 'setLikelyUpSpeed',
        'availability_date' => 'setAvailabilityDate',
        'speed_range' => 'setSpeedRange',
        'speed_range_up' => 'setSpeedRangeUp',
        'technology' => 'setTechnology'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'availability' => 'getAvailability',
        'provider' => 'getProvider',
        'limited_capacity' => 'getLimitedCapacity',
        'name' => 'getName',
        'range_bottom' => 'getRangeBottom',
        'range_top' => 'getRangeTop',
        'likely_down_speed' => 'getLikelyDownSpeed',
        'likely_up_speed' => 'getLikelyUpSpeed',
        'availability_date' => 'getAvailabilityDate',
        'speed_range' => 'getSpeedRange',
        'speed_range_up' => 'getSpeedRangeUp',
        'technology' => 'getTechnology'
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

    public const PROVIDER_WBC_21_CN = 'WBC_21CN';
    public const PROVIDER_WBC_20_CN = 'WBC_20CN';
    public const PROVIDER_CABLE_AND_WIRELESS = 'CABLE_AND_WIRELESS';
    public const PROVIDER_TTB = 'TTB';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProviderAllowableValues()
    {
        return [
            self::PROVIDER_WBC_21_CN,
            self::PROVIDER_WBC_20_CN,
            self::PROVIDER_CABLE_AND_WIRELESS,
            self::PROVIDER_TTB,
        ];
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
        $this->setIfExists('availability', $data ?? [], null);
        $this->setIfExists('provider', $data ?? [], null);
        $this->setIfExists('limited_capacity', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('range_bottom', $data ?? [], null);
        $this->setIfExists('range_top', $data ?? [], null);
        $this->setIfExists('likely_down_speed', $data ?? [], null);
        $this->setIfExists('likely_up_speed', $data ?? [], null);
        $this->setIfExists('availability_date', $data ?? [], null);
        $this->setIfExists('speed_range', $data ?? [], null);
        $this->setIfExists('speed_range_up', $data ?? [], null);
        $this->setIfExists('technology', $data ?? [], null);
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

        if ($this->container['availability'] === null) {
            $invalidProperties[] = "'availability' can't be null";
        }
        if ($this->container['provider'] === null) {
            $invalidProperties[] = "'provider' can't be null";
        }
        $allowedValues = $this->getProviderAllowableValues();
        if (!is_null($this->container['provider']) && !in_array($this->container['provider'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'provider', must be one of '%s'",
                $this->container['provider'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['limited_capacity'] === null) {
            $invalidProperties[] = "'limited_capacity' can't be null";
        }
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
     * Gets availability
     *
     * @return bool
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param bool $availability Availability of the product.
     *
     * @return self
     */
    public function setAvailability($availability)
    {
        if (is_null($availability)) {
            throw new \InvalidArgumentException('non-nullable availability cannot be null');
        }
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string $provider Provider.<p>Possible values:</p>  <ul>  <li><b>1</b> - WBC 21CN.</li>  <li><b>3</b> - WBC 20CN.</li>  <li><b>4</b> - Cable & Wireless.</li>  <li><b>5</b> - TalkTalk</li>  </ul>
     *
     * @return self
     */
    public function setProvider($provider)
    {
        if (is_null($provider)) {
            throw new \InvalidArgumentException('non-nullable provider cannot be null');
        }
        $allowedValues = $this->getProviderAllowableValues();
        if (!in_array($provider, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'provider', must be one of '%s'",
                    $provider,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets limited_capacity
     *
     * @return bool
     */
    public function getLimitedCapacity()
    {
        return $this->container['limited_capacity'];
    }

    /**
     * Sets limited_capacity
     *
     * @param bool $limited_capacity Whether there is a limited capacity at the exchange.
     *
     * @return self
     */
    public function setLimitedCapacity($limited_capacity)
    {
        if (is_null($limited_capacity)) {
            throw new \InvalidArgumentException('non-nullable limited_capacity cannot be null');
        }
        $this->container['limited_capacity'] = $limited_capacity;

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
     * @param string|null $name Name of the product.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets range_bottom
     *
     * @return float|null
     */
    public function getRangeBottom()
    {
        return $this->container['range_bottom'];
    }

    /**
     * Sets range_bottom
     *
     * @param float|null $range_bottom Bottom of the speed range of the product.
     *
     * @return self
     */
    public function setRangeBottom($range_bottom)
    {
        if (is_null($range_bottom)) {
            array_push($this->openAPINullablesSetToNull, 'range_bottom');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('range_bottom', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['range_bottom'] = $range_bottom;

        return $this;
    }

    /**
     * Gets range_top
     *
     * @return float|null
     */
    public function getRangeTop()
    {
        return $this->container['range_top'];
    }

    /**
     * Sets range_top
     *
     * @param float|null $range_top Top of the speed range of the product.
     *
     * @return self
     */
    public function setRangeTop($range_top)
    {
        if (is_null($range_top)) {
            array_push($this->openAPINullablesSetToNull, 'range_top');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('range_top', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['range_top'] = $range_top;

        return $this;
    }

    /**
     * Gets likely_down_speed
     *
     * @return float|null
     */
    public function getLikelyDownSpeed()
    {
        return $this->container['likely_down_speed'];
    }

    /**
     * Sets likely_down_speed
     *
     * @param float|null $likely_down_speed Likely down speed of the product.
     *
     * @return self
     */
    public function setLikelyDownSpeed($likely_down_speed)
    {
        if (is_null($likely_down_speed)) {
            array_push($this->openAPINullablesSetToNull, 'likely_down_speed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('likely_down_speed', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['likely_down_speed'] = $likely_down_speed;

        return $this;
    }

    /**
     * Gets likely_up_speed
     *
     * @return float|null
     */
    public function getLikelyUpSpeed()
    {
        return $this->container['likely_up_speed'];
    }

    /**
     * Sets likely_up_speed
     *
     * @param float|null $likely_up_speed Likely up speed of the product.
     *
     * @return self
     */
    public function setLikelyUpSpeed($likely_up_speed)
    {
        if (is_null($likely_up_speed)) {
            array_push($this->openAPINullablesSetToNull, 'likely_up_speed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('likely_up_speed', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['likely_up_speed'] = $likely_up_speed;

        return $this;
    }

    /**
     * Gets availability_date
     *
     * @return \DateTime|null
     */
    public function getAvailabilityDate()
    {
        return $this->container['availability_date'];
    }

    /**
     * Sets availability_date
     *
     * @param \DateTime|null $availability_date Availability date.
     *
     * @return self
     */
    public function setAvailabilityDate($availability_date)
    {
        if (is_null($availability_date)) {
            array_push($this->openAPINullablesSetToNull, 'availability_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('availability_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['availability_date'] = $availability_date;

        return $this;
    }

    /**
     * Gets speed_range
     *
     * @return string|null
     */
    public function getSpeedRange()
    {
        return $this->container['speed_range'];
    }

    /**
     * Sets speed_range
     *
     * @param string|null $speed_range Downstream range (Mbps).
     *
     * @return self
     */
    public function setSpeedRange($speed_range)
    {
        if (is_null($speed_range)) {
            array_push($this->openAPINullablesSetToNull, 'speed_range');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('speed_range', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['speed_range'] = $speed_range;

        return $this;
    }

    /**
     * Gets speed_range_up
     *
     * @return string|null
     */
    public function getSpeedRangeUp()
    {
        return $this->container['speed_range_up'];
    }

    /**
     * Sets speed_range_up
     *
     * @param string|null $speed_range_up Upstream range (Mbps) - Available for AnnexM, FTTC and G.Fast.
     *
     * @return self
     */
    public function setSpeedRangeUp($speed_range_up)
    {
        if (is_null($speed_range_up)) {
            array_push($this->openAPINullablesSetToNull, 'speed_range_up');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('speed_range_up', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['speed_range_up'] = $speed_range_up;

        return $this;
    }

    /**
     * Gets technology
     *
     * @return string|null
     */
    public function getTechnology()
    {
        return $this->container['technology'];
    }

    /**
     * Sets technology
     *
     * @param string|null $technology Technology.
     *
     * @return self
     */
    public function setTechnology($technology)
    {
        if (is_null($technology)) {
            array_push($this->openAPINullablesSetToNull, 'technology');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('technology', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['technology'] = $technology;

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


