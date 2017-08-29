<?php
/*$name='0';
if(1){
	echo time();
}*/
$post_data['obj_type']='13';
$post_data['obj_id']='8933';
$post_data['content']='0';
$post_data['refig']=0;
$post_data['ptoj_id']=6175;
$post_data['obj_id']='8933';
$post_data['uid'] = '24354';
$post_data['remote_ip'] = '192.168.8.16';
$post_data['api_key'] = '93b7a382301cde3983b4d52cf51';
        $post_data['t'] = time();
        
        ksort($post_data);
        
        if (is_array($post_data)) {
            $post_data_s = '';
            foreach ($post_data as $p => $v) {
                $post_data_s .= $p . '=' . $v . '|';
            }
            $post_data_s = substr($post_data_s, 0, - 1);
            $post_data_s .= '9a5JiDLa821nha83mO1A09AM2aQ';
            $post_data['s'] = md5($post_data_s);
            var_dump($post_data);
        }