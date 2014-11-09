<?php
//改变数据字符集
ALTER DATABASE `myDB` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
//改变表字符集属性
ALTER TABLE `tb_name` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
//改变字段字符集属性
ALTER TABLE 'asic_info' CHANGE name name CHAR(30) CHARACTER SET utf8 COLLATE utf8_general_ci;

?>
