<?php

class LokasiPemkar extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $nama;

    /**
     *
     * @var string
     */
    public $alamat;

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
    public $no_hp;

    /**
     *
     * @var string
     */
    public $gambar;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("db_suci");
        $this->setSource("lokasi_pemkar");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'lokasi_pemkar';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return LokasiPemkar[]|LokasiPemkar|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return LokasiPemkar|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
