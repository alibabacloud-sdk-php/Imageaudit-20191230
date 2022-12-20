<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data;

use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data\results\subResults;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @example uuid-xxxx-xxx-1234
     *
     * @var string
     */
    public $dataId;

    /**
     * @example http://xxx.xxx.xxx/xxx.jpg
     *
     * @var string
     */
    public $imageURL;

    /**
     * @var subResults[]
     */
    public $subResults;

    /**
     * @example img4wlJcb7p4wH4lAP3111111-123456
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'dataId'     => 'DataId',
        'imageURL'   => 'ImageURL',
        'subResults' => 'SubResults',
        'taskId'     => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->subResults) {
            $res['SubResults'] = [];
            if (null !== $this->subResults && \is_array($this->subResults)) {
                $n = 0;
                foreach ($this->subResults as $item) {
                    $res['SubResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['SubResults'])) {
            if (!empty($map['SubResults'])) {
                $model->subResults = [];
                $n                 = 0;
                foreach ($map['SubResults'] as $item) {
                    $model->subResults[$n++] = null !== $item ? subResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
