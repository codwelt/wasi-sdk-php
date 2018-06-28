<?php

namespace Wasi\SDK\Models;

use Wasi\SDK\Classes\Attribute;

class User extends Model
{
    public function standartAttributes()
    {
        return [
            'id_user'     => new Attribute(Attribute::INTEGER, false),
            'email'       => new Attribute(Attribute::STRING),
            'user_type'   => new Attribute(Attribute::STRING),
            'has_profile' => new Attribute(Attribute::BOOLEAN, false),
            'first_name'  => new Attribute(Attribute::STRING),
            'last_name'   => new Attribute(Attribute::STRING),
        ];
    }
}