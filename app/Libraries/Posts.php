<?php

namespace App\Libraries;



class Posts extends GuzzleHttpRequest{

    public function all(){                
        return $this->get('posts');
    }

    public function find($id){
        return $this->get("posts/{$id}");
    }


}