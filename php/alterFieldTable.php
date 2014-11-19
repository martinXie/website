<?php
ALTER TABLE testalter_tbl DROP i;
ALTER TABLE testalter_tbl ADD i INT FIRST;
ALTER TABLE testalter_tbl DROP i;
ALTER TABLE testalter_tbl ADD i INT AFTER c;

mysql> ALTER TABLE basic_info    MODIFY operationTime DATE;
mysql> ALTER TABLE testalter_tbl CHANGE i j BIGINT;
?>
