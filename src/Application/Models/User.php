<?php


namespace Application\Models;


use Application\Models\Formatters\UserFormatter;
use Application\Models\Helpers\ExtraColumnHelper;
use Application\Models\Helpers\Timestamps;
use Routeless\Core\Model;

/**
 * Class User
 * @package Application\Models
 * @property String avatar
 * @property String cover
 * @property String constellation
 */
class User extends Model {

    use ExtraColumnHelper;
    use Timestamps;
    use UserFormatter;

    protected $table = 'user';
    protected $appends = ['avatar', 'cover', 'constellation'];

    public $id,$username, $phone, $password, $unionId, $openId;

}
