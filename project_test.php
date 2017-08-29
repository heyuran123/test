<?php
$_form_validation_rule = array(
    'local' => array(
        'name|用户名' => 'required|max_length[64]',
        'pass|密码' => 'required',
        'scode|验证码' => 'required',
        'rememberme|记住该帐号' => '',
        'redirect_uri|跳转地址' => ''
    ),
    'oauth' => array(
        'username|用户名' => 'required|max_length[64]',
        'password|密码' => 'required',
        'scode|验证码' => 'required',
        'appid|应用id' => 'required',
        'redirect_uri|跳转地址' => 'required'
    ),
    'mobile' => array(
        'name|用户名' => 'required|max_length[64]',
        'pass|密码' => 'required',
        'redirect_uri|跳转地址' => ''
    ),
);
$_form_groups=array();
foreach ($_form_validation_rule as $group_name => $group_conf) {
    addFormGroup($group_name, $group_conf);
}
echo "<pre>";
var_dump($_form_groups);
function addFormGroup($name, $conf)
{
	global $_form_groups;
    if (empty($conf)) {
        return;
    }
    $group_conf = array();
    foreach ($conf as $param_name => $c) {
        if (!isset($group_conf[$param_name])) {
            $group_conf[$param_name] = array();
        }
        if (empty($c)) {
            continue;
        }
        $methods = explode('|' , $c);
        foreach($methods as $m) {
            $m = trim($m);
            $default_param_pos = strpos($m, '[');
            if ($default_param_pos === FALSE) {
                //没有默认参数
                $group_conf[$param_name][$m] = array();
            } else {
                $params = array();
                if ($m[$default_param_pos + 1] != ']') {
                    $params_str = substr($m, $default_param_pos + 1, -1);
                    $params = explode(',', $params_str);
                }
                $m = substr($m, 0, $default_param_pos);
                $group_conf[$param_name][$m] = $params;
            }
        }
    }
    if (isset($_form_groups[$name])) {
        $_form_groups[$name] = array_merge($_form_groups[$name], $group_conf);
    } else {
        $_form_groups[$name] = $group_conf;
    }
    return;
}