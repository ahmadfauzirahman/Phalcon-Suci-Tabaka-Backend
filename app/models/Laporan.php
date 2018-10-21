<?php

class Laporan extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_laporan;

    /**
     *
     * @var integer
     */
    public $id_user;

    /**
     *
     * @var string
     */
    public $lokasi;

    /**
     *
     * @var string
     */
    public $foto;

    /**
     *
     * @var string
     */
    public $waktu_pelaporan;

    /**
     *
     * @var string
     */
    public $detail;

    /**
     *
     * @var string
     */
    public $lat;

    /**
     *
     * @var string
     */
    public $lng;

    /**
     *
     * @var string
     */
    public $deskripsi;

    /**
     *
     * @var string
     */
    public $status;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("db_suci");
        $this->setSource("laporan");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'laporan';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Laporan[]|Laporan|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Laporan|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
