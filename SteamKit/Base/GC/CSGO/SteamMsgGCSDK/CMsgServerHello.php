<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/gcsdk_gcmessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgGCSDK;

/**
 * Protobuf message : SteamKit.Base.GC.CSGO.SteamMsgGCSDK.CMsgServerHello
 */
class CMsgServerHello extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * version optional uint32 = 1
     *
     * @var int
     */
    protected $version = null;

    /**
     * socache_have_versions repeated message = 2
     *
     * @var \Protobuf\Collection<\SteamKit\Base\GC\CSGO\SteamMsgGCSDK\CMsgSOCacheHaveVersion>
     */
    protected $socache_have_versions = null;

    /**
     * legacy_client_session_need optional uint32 = 3
     *
     * @var int
     */
    protected $legacy_client_session_need = null;

    /**
     * legacy_client_launcher optional uint32 = 4
     *
     * @var int
     */
    protected $legacy_client_launcher = null;

    /**
     * steamdatagram_port optional uint32 = 5
     *
     * @var int
     */
    protected $steamdatagram_port = null;

    /**
     * Check if 'version' has a value
     *
     * @return bool
     */
    public function hasVersion()
    {
        return $this->version !== null;
    }

    /**
     * Get 'version' value
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set 'version' value
     *
     * @param int $value
     */
    public function setVersion($value = null)
    {
        $this->version = $value;
    }

    /**
     * Check if 'socache_have_versions' has a value
     *
     * @return bool
     */
    public function hasSocacheHaveVersionsList()
    {
        return $this->socache_have_versions !== null;
    }

    /**
     * Get 'socache_have_versions' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\GC\CSGO\SteamMsgGCSDK\CMsgSOCacheHaveVersion>
     */
    public function getSocacheHaveVersionsList()
    {
        return $this->socache_have_versions;
    }

    /**
     * Set 'socache_have_versions' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\GC\CSGO\SteamMsgGCSDK\CMsgSOCacheHaveVersion> $value
     */
    public function setSocacheHaveVersionsList(\Protobuf\Collection $value = null)
    {
        $this->socache_have_versions = $value;
    }

    /**
     * Add a new element to 'socache_have_versions'
     *
     * @param \SteamKit\Base\GC\CSGO\SteamMsgGCSDK\CMsgSOCacheHaveVersion $value
     */
    public function addSocacheHaveVersions(\SteamKit\Base\GC\CSGO\SteamMsgGCSDK\CMsgSOCacheHaveVersion $value)
    {
        if ($this->socache_have_versions === null) {
            $this->socache_have_versions = new \Protobuf\MessageCollection();
        }

        $this->socache_have_versions->add($value);
    }

    /**
     * Check if 'legacy_client_session_need' has a value
     *
     * @return bool
     */
    public function hasLegacyClientSessionNeed()
    {
        return $this->legacy_client_session_need !== null;
    }

    /**
     * Get 'legacy_client_session_need' value
     *
     * @return int
     */
    public function getLegacyClientSessionNeed()
    {
        return $this->legacy_client_session_need;
    }

    /**
     * Set 'legacy_client_session_need' value
     *
     * @param int $value
     */
    public function setLegacyClientSessionNeed($value = null)
    {
        $this->legacy_client_session_need = $value;
    }

    /**
     * Check if 'legacy_client_launcher' has a value
     *
     * @return bool
     */
    public function hasLegacyClientLauncher()
    {
        return $this->legacy_client_launcher !== null;
    }

    /**
     * Get 'legacy_client_launcher' value
     *
     * @return int
     */
    public function getLegacyClientLauncher()
    {
        return $this->legacy_client_launcher;
    }

    /**
     * Set 'legacy_client_launcher' value
     *
     * @param int $value
     */
    public function setLegacyClientLauncher($value = null)
    {
        $this->legacy_client_launcher = $value;
    }

    /**
     * Check if 'steamdatagram_port' has a value
     *
     * @return bool
     */
    public function hasSteamdatagramPort()
    {
        return $this->steamdatagram_port !== null;
    }

    /**
     * Get 'steamdatagram_port' value
     *
     * @return int
     */
    public function getSteamdatagramPort()
    {
        return $this->steamdatagram_port;
    }

    /**
     * Set 'steamdatagram_port' value
     *
     * @param int $value
     */
    public function setSteamdatagramPort($value = null)
    {
        $this->steamdatagram_port = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'version' => null,
            'socache_have_versions' => [],
            'legacy_client_session_need' => null,
            'legacy_client_launcher' => null,
            'steamdatagram_port' => null
        ], $values);

        $message->setVersion($values['version']);
        $message->setLegacyClientSessionNeed($values['legacy_client_session_need']);
        $message->setLegacyClientLauncher($values['legacy_client_launcher']);
        $message->setSteamdatagramPort($values['steamdatagram_port']);

        foreach ($values['socache_have_versions'] as $item) {
            $message->addSocacheHaveVersions($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgServerHello',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'version',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'socache_have_versions',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.GC.CSGO.SteamMsgGCSDK.CMsgSOCacheHaveVersion'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'legacy_client_session_need',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'legacy_client_launcher',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'steamdatagram_port',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->version !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->version);
        }

        if ($this->socache_have_versions !== null) {
            foreach ($this->socache_have_versions as $val) {
                $writer->writeVarint($stream, 18);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->legacy_client_session_need !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->legacy_client_session_need);
        }

        if ($this->legacy_client_launcher !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->legacy_client_launcher);
        }

        if ($this->steamdatagram_port !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->steamdatagram_port);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->version = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\GC\CSGO\SteamMsgGCSDK\CMsgSOCacheHaveVersion();

                if ($this->socache_have_versions === null) {
                    $this->socache_have_versions = new \Protobuf\MessageCollection();
                }

                $this->socache_have_versions->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->legacy_client_session_need = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->legacy_client_launcher = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->steamdatagram_port = $reader->readVarint($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->version !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->version);
        }

        if ($this->socache_have_versions !== null) {
            foreach ($this->socache_have_versions as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->legacy_client_session_need !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->legacy_client_session_need);
        }

        if ($this->legacy_client_launcher !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->legacy_client_launcher);
        }

        if ($this->steamdatagram_port !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->steamdatagram_port);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->version = null;
        $this->socache_have_versions = null;
        $this->legacy_client_session_need = null;
        $this->legacy_client_launcher = null;
        $this->steamdatagram_port = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CSGO\SteamMsgGCSDK\CMsgServerHello) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->version = ($message->version !== null) ? $message->version : $this->version;
        $this->socache_have_versions = ($message->socache_have_versions !== null) ? $message->socache_have_versions : $this->socache_have_versions;
        $this->legacy_client_session_need = ($message->legacy_client_session_need !== null) ? $message->legacy_client_session_need : $this->legacy_client_session_need;
        $this->legacy_client_launcher = ($message->legacy_client_launcher !== null) ? $message->legacy_client_launcher : $this->legacy_client_launcher;
        $this->steamdatagram_port = ($message->steamdatagram_port !== null) ? $message->steamdatagram_port : $this->steamdatagram_port;
    }


}

