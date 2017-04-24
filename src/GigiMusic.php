<?php
namespace Gigi;
class GigiMusic
{
    const GigiMusicType_Rndom = 0;
    const GigiMusicType_Seq = 1;

    public function __construct($type)
    {
        switch ($type) {
            case self::GigiMusicType_Rndom:
                # code...
                $this->provider = new GigiRandom();
                break;
            case self::GigiMusicType_Seq:
            default:
                # code...
                $this->provider = new GigiSequence();
                break;
        }
    }

    public function getFirst($num)
    {
        return $this->provider->getFirst($num);
    }
}