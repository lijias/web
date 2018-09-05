<?php
header('Content-Type:text/html;charset=utf-8');
mysql_connect("localhost","root","root");
mysql_select_db("cms2");
for ($i=1;$i<=50;$i++) {
    $query="insert cms_admin(aname,pwd)
            value      
          ('tom".$i."','4654')";
     mysql_query($query);
        }
 mysql_close();