<?php
//
// Kleeja database version : 9
//

define('UPDATE_DB_VERSION', '9');

$update_sqls =
[
    'files_size_big'   => "ALTER TABLE `{$dbprefix}files` CHANGE `size` `size` BIGINT(20)  NOT NULL  DEFAULT '0';",
    'group_size_big'   => "ALTER TABLE `{$dbprefix}groups_exts` CHANGE `size` `size` BIGINT(20)  NOT NULL  DEFAULT '0';",
    'files_index_type' => "ALTER TABLE `{$dbprefix}files` ADD INDEX `type` (`type`);",
    'id_form_img'      => 'INSERT INTO `' . $dbprefix . 'config` (`name`, `value`, `option`, `display_order`, `type`, `plg_id`, `dynamic`) VALUES (\'id_form_img\', X\'6964\', \'<select id=\"id_form_img\" name=\"id_form_img\">\r\n <option <IF NAME=\"con.id_form_img==id\">selected=\"selected\"</IF> value=\"id\">{lang.IDF_IMG}</option>\r\n <option <IF NAME=\"con.id_form_img ==filename\">selected=\"selected\"</IF> value=\"filename\">{lang.IDFF_IMG}</option>\r\n<option <IF NAME=\"con.id_form_img ==direct\">selected=\"selected\"</IF> value=\"direct\">{lang.IDFD_IMG}</option>\r\n </select>\n\', \'21\', X\'75706C6F6164\', \'0\', \'0\');',
];


//$update_functions = array
//(
//    function () {
//
//    },
//    function () {
//
//    },
//);


//$update_notes = array
//(
//  'note .......',
//  'note 2 .......',
//);
