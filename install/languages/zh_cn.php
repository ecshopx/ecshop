<?php

/* 通用语言项 */
$_LANG['prev_step'] = '上一步：';
$_LANG['next_step'] = '下一步：';
$_LANG['copyright'] = '&copy; 2005-2021 <a href="http://www.ecshop.com" target="_blank">上海商派网络科技有限公司</a>。保留所有权利。';

/* 欢迎页 */
$_LANG['welcome_title'] = '欢迎您选用ECShop网上商店管理系统！';
$_LANG['agree_license'] = '我已仔细阅读，并同意上述条款中的所有内容';
$_LANG['check_system_environment'] = '检测系统环境';
$_LANG['setup_environment'] = '配置安装环境';
$_LANG['loading'] = '正在加载，请稍等...';

/* 环境检测页 */
$_LANG['checking_title'] = 'ECShop安装程序 第2步/共3步 环境检测';
$_LANG['system_environment'] = '系统环境';
$_LANG['dir_priv_checking'] = '目录权限检测';
$_LANG['template_writable_checking'] = '模板可写性检查';
$_LANG['rename_priv_checking'] = '特定目录修改权限检查';
$_LANG['welcome_page'] = '欢迎页';
$_LANG['recheck'] = '重新检查';
$_LANG['config_system'] = '配置系统';
$_LANG['does_support_mysql'] = '是否支持MySQL';
$_LANG['support'] = '支持';
$_LANG['does_support_dld'] = '重要文件是否完整';
$_LANG['support_dld'] = '完整';
$_LANG['support'] = '支持';
$_LANG['not_support'] = '不支持';
$_LANG['cannt_support_dwt'] = '缺少dwt文件';
$_LANG['cannt_support_lbi'] = '缺少lib文件';
$_LANG['cannt_support_dat'] = '缺少dat文件';
$_LANG['php_os'] = '操作系统';
$_LANG['php_ver'] = 'PHP 版本';
$_LANG['mysql_ver'] = 'MySQL 版本';
$_LANG['gd_version'] = 'GD 版本';
$_LANG['jpeg'] = '是否支持 JPEG';
$_LANG['gif'] = '是否支持 GIF';
$_LANG['png'] = '是否支持 PNG';
$_LANG['safe_mode'] = '服务器是否开启安全模式';
$_LANG['safe_mode_on'] = '开启';
$_LANG['safe_mode_off'] = '关闭';
$_LANG['can_write'] = '可写';
$_LANG['cannt_write'] = '不可写';
$_LANG['not_exists'] = '不存在';
$_LANG['cannt_modify'] = '不可修改';
$_LANG['all_are_writable'] = '所有模板，全部可写';

/* 系统设置 */
$_LANG['setup'] = '填写完毕';
$_LANG['setting_title'] = 'ECShop安装程序 第3步/共3步 配置系统';
$_LANG['db_account'] = '数据库帐号';
$_LANG['db_port'] = '端口号：';
$_LANG['db_host'] = '数据库主机：';
$_LANG['db_name'] = '数据库名：';
$_LANG['db_user'] = '用户名：';
$_LANG['db_pass'] = '密码：';
$_LANG['go'] = '搜';
$_LANG['db_list'] = '已有数据库';
$_LANG['db_prefix'] = '表前缀：';
$_LANG['change_prefix'] = '建议您修改表前缀';
$_LANG['admin_account'] = '管理员帐号';
$_LANG['admin_name'] = '管理员姓名：';
$_LANG['admin_password'] = '登录密码：';
$_LANG['admin_password2'] = '密码确认：';
$_LANG['admin_email'] = '电子邮箱：';

$_LANG['install_at_once'] = '立即安装';
$_LANG['monitor_title'] = '安装程序监视器';
$_LANG['admin_user'][] = '商品列表|goods.php?act=list';
$_LANG['admin_user'][] = '订单列表|order.php?act=list';
$_LANG['admin_user'][] = '用户评论|comment_manage.php?act=list';
$_LANG['admin_user'][] = '会员列表|users.php?act=list';
$_LANG['admin_user'][] = '商店设置|shop_config.php?act=list_edit';
$_LANG['password_intensity'] = '密码强度：';
$_LANG['pwd_lower'] = '弱';
$_LANG['pwd_middle'] = '中';
$_LANG['pwd_high'] = '强';

/* 提示信息 */
$_LANG['has_locked_installer'] = '<strong>安装程序已经被锁定。</strong><br /><br />如果您确定要重新安装 ECSHOP，请删除data目录下的 install.lock。';
$_LANG['connect_failed'] = '连接 数据库失败，请检查您输入的 数据库帐号 是否正确。';
$_LANG['query_failed'] = '查询 数据库失败，请检查您输入的 数据库帐号 是否正确。';
$_LANG['select_db_failed'] = '选择 数据库失败，请检查您输入的 数据库名称 是否正确。';
$_LANG['cannt_find_db'] = '无';
$_LANG['cannt_create_database'] = '无法创建数据库';
$_LANG['password_empty_error'] = '密码不能为空';
$_LANG['passwords_not_eq'] = '密码不相同';
$_LANG['open_config_failed'] = '打开配置文件失败';
$_LANG['write_config_failed'] = '写入配置文件失败';
$_LANG['create_passport_failed'] = '创建管理员帐号失败';
$_LANG['cannt_mk_dir'] = '无法创建目录';
$_LANG['cannt_copy_file'] = '无法复制文件';
$_LANG['open_installlock_failed'] = '打开install.lock文件失败';
$_LANG['write_installlock_failed'] = '写入install.lock文件失败';

$_LANG['install_done_title'] = 'ECSHOP 安装程序 安装成功';
$_LANG['install_error_title'] = 'ECSHOP 安装程序 安装失败';
$_LANG['done'] = '恭喜您，ECSHOP 已经成功地安装完成。<br />基于安全的考虑，请在安装完成后删除 install 目录。';
$_LANG['go_to_view_my_ecshop'] = '前往 ECSHOP 首页';
$_LANG['go_to_view_control_panel'] = '前往 ECSHOP 后台管理中心';
$_LANG['open_config_file_failed'] = '无法写入 data/config.php，请检查该文件是否允许写入。';
$_LANG['write_config_file_failed'] = '写入配置文件出错';

/* 客户端JS语言项 */
$_LANG['js_languages']['success'] = '成功';
$_LANG['js_languages']['fail'] = '失败';
$_LANG['js_languages']['db_exists'] = '这是一个已经存在的数据库，确定要覆盖该数据库吗？';
$_LANG['js_languages']['total_num'] = '共 %s 个';
$_LANG['js_languages']['wait_please'] = '正在安装中，请稍候…………';
$_LANG['js_languages']['create_config_file'] = '创建配置文件............';
$_LANG['js_languages']['create_database'] = '创建数据库............';
$_LANG['js_languages']['install_data'] = '安装数据............';
$_LANG['js_languages']['create_admin_passport'] = '创建管理员帐号............';
$_LANG['js_languages']['do_others'] = '处理其它............';
$_LANG['js_languages']['display_detail'] = '显示细节';
$_LANG['js_languages']['hide_detail'] = '隐藏细节';
$_LANG['js_languages']['has_been_stopped'] = '安装进程已中止';
$_LANG['js_languages']['password_invaild'] = '密码必须同时包含字母及数字';
$_LANG['js_languages']['password_short'] = '密码长度不能小于8';
$_LANG['js_languages']['password_not_eq'] = '密码不相同';
