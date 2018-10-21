<?php

class User extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idUser;

    /**
     *
     * @var string
     */
    public $namaUser;

    /**
     *
     * @var string
     */
    public $passwordUser;

    /**
     *
     * @var string
     */
    public $alamatUser;

    /**
     *
     * @var string
     */
    public $nomorTelepon;

    /**
     *
     * @var string
     */
    public $foto;

    /**
     *
     * @var string
     */
    public $perjanjian;

    /**
     *
     * @var string
     */
    public $hak_akses;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("db_suci");
        $this->setSource("user");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return User[]|User|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return User|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
