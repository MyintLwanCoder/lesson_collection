<?php

if(isset($_POST['create']))

{

$rows=$_POST['r'];

$cols=$_POST['c'];

echo "<table border='1'>";

for($i=0;$i<$rows;$i++)

{

echo "<tr>";

for($j=0;$j<$cols;$j++)

{

echo "<th>"."r".$i."c".$j."</th>";

}

echo "</tr>";

}

echo "</table>";

}
?>
<html>
    <body>
        <form action="" method="POST">
        <table width="400" border="1">
                <tr>
                    <td width="177">Enter number of rows</td>

                    <td width="207"><input type="text" name="r"></td>
                </tr>
                <tr>
                    <td>Enter number of column</td>

                    <td><input type="text" name="c"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Create Table" name="create"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>