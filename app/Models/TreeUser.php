<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreeUser extends Model
{
    use HasFactory;
    //テーブル名指定
    protected $table = 'parent_users';
    // 代入可能な属性
    protected $fillable = ['id', 'name'];

    //==============================================
    public function get()
    {
        return self::all()->toArray();
    }

    public function addData($name)
    {
        self::create(['name' => $name]);
    }

    public function deleteData($id)
    {
        self::destroy($id);
    }

    public function updateData($id, $name)
    {
        self::where('id', $id)->update(['name' => $name]);
    }
}
