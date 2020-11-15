<?php

namespace App\Library;

use App\Library\BaseYTD;
use App\Library\VideoData;

class VideoDataList extends BaseYTD
{
    const YTD_KIND = 'videoList';
    const YTD_REFRESH_TIME = 'P2D';
    const YTD_LIST = array();
    const YTD_NOINDEX = array();
    const YTD_API_DATA_MAP = array();

    function setDataFromAPIResult( $data ) {

        $video = new VideoData();
        $video->setDataFromAPIResult($data);
        $this->data[] = $video;

        $this->updatedAt = self::getDatetimeNowStr();
    }

    function checkData() {
        if(count($this->data)) {
            return TRUE;
        }
        return FALSE;
    }

}

