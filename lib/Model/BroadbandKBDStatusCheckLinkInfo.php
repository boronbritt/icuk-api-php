<?php
/**
 * BroadbandKBDStatusCheckLinkInfo
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
 * BroadbandKBDStatusCheckLinkInfo Class Doc Comment
 *
 * @category Class
 * @description Represents the link information of the status check subtest
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BroadbandKBDStatusCheckLinkInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BroadbandKBDStatusCheckLinkInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'loop_loss' => 'string',
        'snr_margin' => 'string',
        'errored_seconds' => 'string',
        'errored_seconds_time' => 'string',
        'hec_errors' => 'string',
        'cell_count' => 'string',
        'speed' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'loop_loss' => null,
        'snr_margin' => null,
        'errored_seconds' => null,
        'errored_seconds_time' => null,
        'hec_errors' => null,
        'cell_count' => null,
        'speed' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'loop_loss' => true,
		'snr_margin' => true,
		'errored_seconds' => true,
		'errored_seconds_time' => true,
		'hec_errors' => true,
		'cell_count' => true,
		'speed' => true
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
        'loop_loss' => 'loop_loss',
        'snr_margin' => 'snr_margin',
        'errored_seconds' => 'errored_seconds',
        'errored_seconds_time' => 'errored_seconds_time',
        'hec_errors' => 'hec_errors',
        'cell_count' => 'cell_count',
        'speed' => 'speed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'loop_loss' => 'setLoopLoss',
        'snr_margin' => 'setSnrMargin',
        'errored_seconds' => 'setErroredSeconds',
        'errored_seconds_time' => 'setErroredSecondsTime',
        'hec_errors' => 'setHecErrors',
        'cell_count' => 'setCellCount',
        'speed' => 'setSpeed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'loop_loss' => 'getLoopLoss',
        'snr_margin' => 'getSnrMargin',
        'errored_seconds' => 'getErroredSeconds',
        'errored_seconds_time' => 'getErroredSecondsTime',
        'hec_errors' => 'getHecErrors',
        'cell_count' => 'getCellCount',
        'speed' => 'getSpeed'
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
        $this->setIfExists('loop_loss', $data ?? [], null);
        $this->setIfExists('snr_margin', $data ?? [], null);
        $this->setIfExists('errored_seconds', $data ?? [], null);
        $this->setIfExists('errored_seconds_time', $data ?? [], null);
        $this->setIfExists('hec_errors', $data ?? [], null);
        $this->setIfExists('cell_count', $data ?? [], null);
        $this->setIfExists('speed', $data ?? [], null);
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
     * Gets loop_loss
     *
     * @return string|null
     */
    public function getLoopLoss()
    {
        return $this->container['loop_loss'];
    }

    /**
     * Sets loop_loss
     *
     * @param string|null $loop_loss Loop Loss.
     *
     * @return self
     */
    public function setLoopLoss($loop_loss)
    {
        if (is_null($loop_loss)) {
            array_push($this->openAPINullablesSetToNull, 'loop_loss');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('loop_loss', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['loop_loss'] = $loop_loss;

        return $this;
    }

    /**
     * Gets snr_margin
     *
     * @return string|null
     */
    public function getSnrMargin()
    {
        return $this->container['snr_margin'];
    }

    /**
     * Sets snr_margin
     *
     * @param string|null $snr_margin SNR Margin.
     *
     * @return self
     */
    public function setSnrMargin($snr_margin)
    {
        if (is_null($snr_margin)) {
            array_push($this->openAPINullablesSetToNull, 'snr_margin');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('snr_margin', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['snr_margin'] = $snr_margin;

        return $this;
    }

    /**
     * Gets errored_seconds
     *
     * @return string|null
     */
    public function getErroredSeconds()
    {
        return $this->container['errored_seconds'];
    }

    /**
     * Sets errored_seconds
     *
     * @param string|null $errored_seconds Errored Seconds.
     *
     * @return self
     */
    public function setErroredSeconds($errored_seconds)
    {
        if (is_null($errored_seconds)) {
            array_push($this->openAPINullablesSetToNull, 'errored_seconds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('errored_seconds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['errored_seconds'] = $errored_seconds;

        return $this;
    }

    /**
     * Gets errored_seconds_time
     *
     * @return string|null
     */
    public function getErroredSecondsTime()
    {
        return $this->container['errored_seconds_time'];
    }

    /**
     * Sets errored_seconds_time
     *
     * @param string|null $errored_seconds_time Errored Seconds ellapsed time.
     *
     * @return self
     */
    public function setErroredSecondsTime($errored_seconds_time)
    {
        if (is_null($errored_seconds_time)) {
            array_push($this->openAPINullablesSetToNull, 'errored_seconds_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('errored_seconds_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['errored_seconds_time'] = $errored_seconds_time;

        return $this;
    }

    /**
     * Gets hec_errors
     *
     * @return string|null
     */
    public function getHecErrors()
    {
        return $this->container['hec_errors'];
    }

    /**
     * Sets hec_errors
     *
     * @param string|null $hec_errors HEC Errors.
     *
     * @return self
     */
    public function setHecErrors($hec_errors)
    {
        if (is_null($hec_errors)) {
            array_push($this->openAPINullablesSetToNull, 'hec_errors');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hec_errors', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['hec_errors'] = $hec_errors;

        return $this;
    }

    /**
     * Gets cell_count
     *
     * @return string|null
     */
    public function getCellCount()
    {
        return $this->container['cell_count'];
    }

    /**
     * Sets cell_count
     *
     * @param string|null $cell_count Cell Count.
     *
     * @return self
     */
    public function setCellCount($cell_count)
    {
        if (is_null($cell_count)) {
            array_push($this->openAPINullablesSetToNull, 'cell_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cell_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cell_count'] = $cell_count;

        return $this;
    }

    /**
     * Gets speed
     *
     * @return string|null
     */
    public function getSpeed()
    {
        return $this->container['speed'];
    }

    /**
     * Sets speed
     *
     * @param string|null $speed Speed.
     *
     * @return self
     */
    public function setSpeed($speed)
    {
        if (is_null($speed)) {
            array_push($this->openAPINullablesSetToNull, 'speed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('speed', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['speed'] = $speed;

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


