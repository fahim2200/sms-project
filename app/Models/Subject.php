<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use         Session;

class Subject extends Model
{
    private static $subject;
    private static $directory;
    private static $image;
    private static $imageName;
    private static $imageUrl;
    use HasFactory;


    public static function getImageUrl($request)
    {
        self::$image                = $request->file('image');
        self::$imageName            = self::$image->getClientOriginalName();
        self::$directory            = 'subject-image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }

    public static function newSubject($request)
    {
        self::$subject = new Subject();

        self::$subject->title                       = $request->title;
        self::$subject->teacher_id                  = Session::get('user_id');
        self::$subject->code                        = $request->code;
        self::$subject->fee                         = $request->fee;
        self::$subject->short_description           = $request->short_description;
        self::$subject->long_description            = $request->long_description;
        self::$subject->image                       = self::getImageUrl($request);
        self::$subject->save();



    }
    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }
}
