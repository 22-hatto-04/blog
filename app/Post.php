<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

public function getPaginateByLimit(int $limit_count = 5)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}


}
