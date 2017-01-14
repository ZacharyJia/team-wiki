<?php
namespace App\Schemas;

use Adldap\Schemas\OpenLDAP;

/**
 * Created By zachary
 * Time: 2017/1/14 下午5:01
 */
class MyOpenLDAP extends OpenLDAP
{
    /**
     * {@inheritdoc}
     */
    public function anr()
    {
        return 'cn';
    }

}