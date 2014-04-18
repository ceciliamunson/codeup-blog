<?php

class Post extends BaseModel {

    protected $table = 'posts';

    // Define relationship to user (author)
    public function user()
    {
    	return $this->belongsTo('User');
    }

    // Validation rules
    public static $rules = array(
	    'title'      => 'required|max:100',
	    'body'       => 'required|max:10000'
	);

    /*
    * Helper to assign images to posts and handle uploads
    */
	public static function upload_image($image)
	{
	
		$destinaion_path = public_path() .'/uploads/';
		$extension = $image->getClientOriginalExtension();
		$filename = uniqid() . '.' . $extension;
		$image->move($destinaion_path, $filename);
		$image_path = '/uploads/' . $filename;
		return $image_path;
		
	}

	// public function canManagePost($post)
	// {
		// return $this->isAdmin() || $this->id == $post->user_id;
	// }

}