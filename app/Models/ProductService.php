<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class ProductService extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'product_services';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'business_id',
        'name',
        'description',
        'image',
        'price'
    ];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function business() {
        return $this->belongsTo(Business::class);
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */
    public function getCleanDescriptionAttribute()
    {
        $productServices = $this->productServices()->get();
        return $productServices->pluck('description');
    }

    public function getImageAttribute()
    {
        $disk = config('backpack.base.root_disk_name');

        if(isset($this->attributes['image'])) {
            if($this->attributes['image'] !== null){
                $image = $this->attributes['image'];
                if(file_exists($image)) {
                    return $image;
                } else {
                    return 'images/default_image.png';
                }
            } else {
                return 'images/default_image.png';
            }
        } else {
            return 'images/default_image.png';
        }
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
    public function setImageAttribute($value)
    {
        $name               =   Str::slug($this->business()->first() ? $this->business()->first()->name : $this->name, '-');
        $attribute_name     =   "image";
        // or use your own disk, defined in config/filesystems.php
        $disk               =   config('backpack.base.root_disk_name'); // or use your own disk, defined in config/filesystems.php
        // destination path relative to the disk above
        $destination_path   =   "public/uploads/businesses/" . $name . '/ProductServices'; // path relative to the disk above

        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (Str::startsWith($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value)->encode('jpg', 90);

            // 1. Generate a filename.
            $filename = md5($value.time()).'.jpg';

            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());

            // 3. Delete the previous image, if there was one.
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // 4. Save the public path to the database
            // but first, remove "public/" from the path, since we're pointing to it 
            // from the root folder; that way, what gets saved in the db
            // is the public URL (everything that comes after the domain name)
            $public_destination_path = Str::replaceFirst('public/', '', $destination_path);
            $this->attributes[$attribute_name] = $public_destination_path.'/'.$filename;
        }
    }

}
