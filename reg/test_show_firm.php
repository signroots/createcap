<?php
// connect db 
require 'db.php';
$d = new Db();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show firm</title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php

    $from_db = $d->get('one', 'firm', 7);
    $T = json_decode($from_db['json'], true);

    //  print_r($t_da);
    ?>
    <div class="container ">
        <div class="mt-5 mb-5">
            <h5> Land (in area) existing for the firm</h5>
            <table class="table table-hover table-sm">
                <tr>
                    <th>Location</th>
                    <th>Area</th>
                    <th>Market value</th>
                    <th>Cost</th>
                </tr>

                <?php for ($i = 1; $i < 4; $i++) { ?>
                    <tr>
                        <td><?= $T['jsl_loc' . $i] ?> </td>
                        <td><?= $T['jsl_area' . $i] ?> </td>
                        <td><?= $T['jsl_val' . $i] ?> </td>
                        <td><?= $T['jsl_cost' . $i] ?> </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

        <div class="mt-5 mb-5   ">
            <h5> Building and other infrastructure (constructed)</h5>
            <table class="table table-hover table-sm">
                <tr>
                    <th>Location</th>
                    <th>Area</th>
                    <th>Market value</th>
                    <th>Cost</th>
                </tr>

                <?php for ($i = 1; $i < 4; $i++) { ?>
                    <tr>
                        <td><?= $T['jsb_loc' . $i] ?> </td>
                        <td><?= $T['jsb_area' . $i] ?> </td>
                        <td><?= $T['jsb_val' . $i] ?> </td>
                        <td><?= $T['jsb_cost' . $i] ?> </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

        <div class="mt-5 mb-5   ">
            <h5> Machineries and equipment available</h5>
            <table class="table table-hover table-sm">
                <tr>

                    <th>Name of machineries</th>
                    <th>Cost of purchase</th>
                    <th>Life cycle in year</th>
                    <th>Year of usage</th>
                </tr>

                <?php for ($i = 1; $i < 11; $i++) { ?>
                    <tr>
                        <td><?= $T['jsmac_name' . $i] ?> </td>
                        <td><?= $T['jsmac_cost' . $i] ?> </td>
                        <td><?= $T['jsmac_yr' . $i] ?> </td>
                        <td><?= $T['jsmac_use_yr' . $i] ?> </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

        <div class="mt-5 mb-5   ">
            <h5> Current products with specifications</h5>
            <table class="table table-hover table-sm">
                <tr>

                    <th>Title of the product</th>
                    <th>Type of the product</th>
                    <th>Brand Name</th>
                    <th>Uniqueness</th>
                </tr>

                <?php for ($i = 1; $i < 8; $i++) { ?>
                    <tr>
                        <td><?= $T['jspro_title' . $i] ?> </td>
                        <td><?= $T['jspro_type' . $i] ?> </td>
                        <td><?= $T['jspro_brand' . $i] ?> </td>
                        <td><?= $T['jspro_brand' . $i] ?> </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

        <div class="mt-5 mb-5   ">
            <h5> Market and marketing method of the products</h5>
            <table class="table table-hover table-sm">
                <tr>

                    <th>Type of marketing system</th>
                    <th> Marketing team</th>
                    <th> Collaborators</th>

                </tr>

                <?php for ($i = 1; $i < 9; $i++) { ?>
                    <tr>
                        <td><?= $T['jsmar_type' . $i] ?> </td>
                        <td><?= $T['jsmar_team' . $i] ?> </td>
                        <td><?= $T['jsmar_collab' . $i] ?> </td>
                    </tr>
                <?php } ?>
            </table>
        </div>


        <div class="mt-5 mb-5   ">
            <h5> Major clients of the company</h5>
            <table class="table table-hover table-sm">
                <tr>

                    <th>Type of the client</th>
                    <th> Name of the client </th>
                    <th> Category of the client</th>

                </tr>

                <?php for ($i = 1; $i < 6; $i++) { ?>
                    <tr>
                        <td><?= $T['jscli_type' . $i] ?> </td>
                        <td><?= $T['jscli_name' . $i] ?> </td>
                        <td><?= $T['jscli_category' . $i] ?> </td>
                    </tr>
                <?php } ?>
            </table>
        </div>








    </div>




    <pre>

    </pre>



</body>

</html>