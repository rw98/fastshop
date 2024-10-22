<?php
if (! function_exists('user_profile')) {
    function user_profile(){
        $user = auth()->user();
        $url = null;
        return $url??"https://api.dicebear.com/9.x/initials/svg?radius=0&seed=$user->first_name";
    }
}
