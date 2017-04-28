<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_publishedfile.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgPublishedFile;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgPublishedFile.CPublishedFile_RefreshVotingQueue_Request
 */
class CPublishedFile_RefreshVotingQueue_Request extends \Protobuf\AbstractMessage
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
     * appid optional uint32 = 1
     *
     * @var int
     */
    protected $appid = null;

    /**
     * matching_file_type optional uint32 = 2
     *
     * @var int
     */
    protected $matching_file_type = null;

    /**
     * tags repeated string = 3
     *
     * @var \Protobuf\Collection
     */
    protected $tags = null;

    /**
     * match_all_tags optional bool = 4
     *
     * @var bool
     */
    protected $match_all_tags = null;

    /**
     * excluded_tags repeated string = 5
     *
     * @var \Protobuf\Collection
     */
    protected $excluded_tags = null;

    /**
     * desired_queue_size optional uint32 = 6
     *
     * @var int
     */
    protected $desired_queue_size = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->match_all_tags = true;

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'appid' has a value
     *
     * @return bool
     */
    public function hasAppid()
    {
        return $this->appid !== null;
    }

    /**
     * Get 'appid' value
     *
     * @return int
     */
    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * Set 'appid' value
     *
     * @param int $value
     */
    public function setAppid($value = null)
    {
        $this->appid = $value;
    }

    /**
     * Check if 'matching_file_type' has a value
     *
     * @return bool
     */
    public function hasMatchingFileType()
    {
        return $this->matching_file_type !== null;
    }

    /**
     * Get 'matching_file_type' value
     *
     * @return int
     */
    public function getMatchingFileType()
    {
        return $this->matching_file_type;
    }

    /**
     * Set 'matching_file_type' value
     *
     * @param int $value
     */
    public function setMatchingFileType($value = null)
    {
        $this->matching_file_type = $value;
    }

    /**
     * Check if 'tags' has a value
     *
     * @return bool
     */
    public function hasTagsList()
    {
        return $this->tags !== null;
    }

    /**
     * Get 'tags' value
     *
     * @return \Protobuf\Collection
     */
    public function getTagsList()
    {
        return $this->tags;
    }

    /**
     * Set 'tags' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setTagsList(\Protobuf\Collection $value = null)
    {
        $this->tags = $value;
    }

    /**
     * Add a new element to 'tags'
     *
     * @param string $value
     */
    public function addTags($value)
    {
        if ($this->tags === null) {
            $this->tags = new \Protobuf\ScalarCollection();
        }

        $this->tags->add($value);
    }

    /**
     * Check if 'match_all_tags' has a value
     *
     * @return bool
     */
    public function hasMatchAllTags()
    {
        return $this->match_all_tags !== null;
    }

    /**
     * Get 'match_all_tags' value
     *
     * @return bool
     */
    public function getMatchAllTags()
    {
        return $this->match_all_tags;
    }

    /**
     * Set 'match_all_tags' value
     *
     * @param bool $value
     */
    public function setMatchAllTags($value = null)
    {
        $this->match_all_tags = $value;
    }

    /**
     * Check if 'excluded_tags' has a value
     *
     * @return bool
     */
    public function hasExcludedTagsList()
    {
        return $this->excluded_tags !== null;
    }

    /**
     * Get 'excluded_tags' value
     *
     * @return \Protobuf\Collection
     */
    public function getExcludedTagsList()
    {
        return $this->excluded_tags;
    }

    /**
     * Set 'excluded_tags' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setExcludedTagsList(\Protobuf\Collection $value = null)
    {
        $this->excluded_tags = $value;
    }

    /**
     * Add a new element to 'excluded_tags'
     *
     * @param string $value
     */
    public function addExcludedTags($value)
    {
        if ($this->excluded_tags === null) {
            $this->excluded_tags = new \Protobuf\ScalarCollection();
        }

        $this->excluded_tags->add($value);
    }

    /**
     * Check if 'desired_queue_size' has a value
     *
     * @return bool
     */
    public function hasDesiredQueueSize()
    {
        return $this->desired_queue_size !== null;
    }

    /**
     * Get 'desired_queue_size' value
     *
     * @return int
     */
    public function getDesiredQueueSize()
    {
        return $this->desired_queue_size;
    }

    /**
     * Set 'desired_queue_size' value
     *
     * @param int $value
     */
    public function setDesiredQueueSize($value = null)
    {
        $this->desired_queue_size = $value;
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
            'appid' => null,
            'matching_file_type' => null,
            'tags' => [],
            'match_all_tags' => true,
            'excluded_tags' => [],
            'desired_queue_size' => null
        ], $values);

        $message->setAppid($values['appid']);
        $message->setMatchingFileType($values['matching_file_type']);
        $message->setMatchAllTags($values['match_all_tags']);
        $message->setDesiredQueueSize($values['desired_queue_size']);

        foreach ($values['tags'] as $item) {
            $message->addTags($item);
        }

        foreach ($values['excluded_tags'] as $item) {
            $message->addExcludedTags($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CPublishedFile_RefreshVotingQueue_Request',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'appid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'matching_file_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'tags',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'match_all_tags',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => true
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'excluded_tags',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'desired_queue_size',
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

        if ($this->appid !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->appid);
        }

        if ($this->matching_file_type !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->matching_file_type);
        }

        if ($this->tags !== null) {
            foreach ($this->tags as $val) {
                $writer->writeVarint($stream, 26);
                $writer->writeString($stream, $val);
            }
        }

        if ($this->match_all_tags !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeBool($stream, $this->match_all_tags);
        }

        if ($this->excluded_tags !== null) {
            foreach ($this->excluded_tags as $val) {
                $writer->writeVarint($stream, 42);
                $writer->writeString($stream, $val);
            }
        }

        if ($this->desired_queue_size !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->desired_queue_size);
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

                $this->appid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->matching_file_type = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->tags === null) {
                    $this->tags = new \Protobuf\ScalarCollection();
                }

                $this->tags->add($reader->readString($stream));

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->match_all_tags = $reader->readBool($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->excluded_tags === null) {
                    $this->excluded_tags = new \Protobuf\ScalarCollection();
                }

                $this->excluded_tags->add($reader->readString($stream));

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->desired_queue_size = $reader->readVarint($stream);

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

        if ($this->appid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->appid);
        }

        if ($this->matching_file_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->matching_file_type);
        }

        if ($this->tags !== null) {
            foreach ($this->tags as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
            }
        }

        if ($this->match_all_tags !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->excluded_tags !== null) {
            foreach ($this->excluded_tags as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
            }
        }

        if ($this->desired_queue_size !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->desired_queue_size);
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
        $this->appid = null;
        $this->matching_file_type = null;
        $this->tags = null;
        $this->match_all_tags = true;
        $this->excluded_tags = null;
        $this->desired_queue_size = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgPublishedFile\CPublishedFile_RefreshVotingQueue_Request) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->appid = ($message->appid !== null) ? $message->appid : $this->appid;
        $this->matching_file_type = ($message->matching_file_type !== null) ? $message->matching_file_type : $this->matching_file_type;
        $this->tags = ($message->tags !== null) ? $message->tags : $this->tags;
        $this->match_all_tags = ($message->match_all_tags !== null) ? $message->match_all_tags : $this->match_all_tags;
        $this->excluded_tags = ($message->excluded_tags !== null) ? $message->excluded_tags : $this->excluded_tags;
        $this->desired_queue_size = ($message->desired_queue_size !== null) ? $message->desired_queue_size : $this->desired_queue_size;
    }


}
