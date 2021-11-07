<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate()
 */
class Post extends Model
{
    use HasFactory;

    public function getSnippetAttribute(){
        $paragraphs = explode("\n\n", $this->body);
        return $paragraphs[0];
    }

    public function getDisplayBodyAttribute(){
        return nl2br($this->body);
    }
}
