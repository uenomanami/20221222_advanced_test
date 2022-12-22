<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    protected $fillable = ['fullname', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion'];

    public static function doSearch($name, $gender, $date_start, $date_end, $email)
    {
        $query = self::query();
        if (!empty($name)) {
            $query->where("fullname", "LIKE", "%{$name}%");
        }
        if (!empty($gender)) {
            if($gender === 0){
                $query->where('gender', '=', "1")
                ->orWhere('gender', '=', "2");
            }else{
                $query->where('gender', '<=', $gender);
            }
        }
        if (!empty($date_start)) {
            $query->whereDate('created_at', '>=', $date_start);
        }
        if (!empty($date_end)) {
            $query->whereDate('created_at', '<=', $date_end);
        }
        if (!empty($email)) {
            $query->where('email', 'like', "%{$email}%");
        }

        $results = $query->paginate(10)->withQueryString();;
        return $results;
    }

}
