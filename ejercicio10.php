<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $genero = intval ($_POST['genero']);
    if($genero==1)
        $mujeres=$mujeres+1;
    else
        $hombres=$hombres+1;
}
 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "https://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Porcentaje de alumnos y alumnas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
    <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="genero">Selecciona el valor de genero:</label>
                        </td>
                        <td>
                            <select name="genero" required="required">
                                <option value="1">Mujeres</option>
                                <option value="2">Hombres</option>
                            </select>
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Procesar" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>