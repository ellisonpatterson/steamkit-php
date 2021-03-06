<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/econ_gcmessages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamMsgGCEcon;

/**
 * Protobuf message :
 * SteamKit.Base.GC.TF2.SteamMsgGCEcon.CMsgLookupMultipleAccountNames
 */
class CMsgLookupMultipleAccountNames extends \Protobuf\AbstractMessage
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
     * accountids repeated uint32 = 1
     *
     * @var \Protobuf\Collection
     */
    protected $accountids = null;

    /**
     * Check if 'accountids' has a value
     *
     * @return bool
     */
    public function hasAccountidsList()
    {
        return $this->accountids !== null;
    }

    /**
     * Get 'accountids' value
     *
     * @return \Protobuf\Collection
     */
    public function getAccountidsList()
    {
        return $this->accountids;
    }

    /**
     * Set 'accountids' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setAccountidsList(\Protobuf\Collection $value = null)
    {
        $this->accountids = $value;
    }

    /**
     * Add a new element to 'accountids'
     *
     * @param int $value
     */
    public function addAccountids($value)
    {
        if ($this->accountids === null) {
            $this->accountids = new \Protobuf\ScalarCollection();
        }

        $this->accountids->add($value);
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
            'accountids' => []
        ], $values);

        foreach ($values['accountids'] as $item) {
            $message->addAccountids($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgLookupMultipleAccountNames',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'accountids',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
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

        if ($this->accountids !== null) {
            $innerSize   = 0;
            $calculator  = $sizeContext->getSizeCalculator();

            foreach ($this->accountids as $val) {
                $innerSize += $calculator->computeVarintSize($val);
            }

            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $innerSize);

            foreach ($this->accountids as $val) {
                $writer->writeVarint($stream, $val);
            }
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
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->accountids === null) {
                    $this->accountids = new \Protobuf\ScalarCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->accountids->add($reader->readVarint($stream));
                }

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

        if ($this->accountids !== null) {
            $innerSize = 0;

            foreach ($this->accountids as $val) {
                $innerSize += $calculator->computeVarintSize($val);
            }

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
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
        $this->accountids = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\TF2\SteamMsgGCEcon\CMsgLookupMultipleAccountNames) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->accountids = ($message->accountids !== null) ? $message->accountids : $this->accountids;
    }


}

