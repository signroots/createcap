<?php

session_start();
if (!isset($_SESSION['admin']) and !isset($_SESSION['pass'])) {
    echo "<script>location.replace(`../index.php`)</script>";
} else {
    require '../../db.php';
    $d = new Db();
    if (!isset($_GET['id'])) {
        echo "<script>location.replace(`../pages-404.html`)</script>";
    } else {
        $sp_db = $d->get('one', 'firm', $_GET['id']);
        $T = json_decode($sp_db['json'], true);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Invest Connect Firm Registration Form - CreateCap</title>



    <!-- Bootstrap core CSS -->
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet"> -->
</head>

<body class="bg-light">

    <div class="col-lg mx-auto p-3 py-md-5">
        <header>
            <div class="container mb-5">
                <div class="row">
                    <div class="col-md-4 pt-3">
                        <a href="https://createcap.in"><img class="d-block mb-4" src="../../assets/brand/logo.png" alt="" width="auto" height="57"></a>
                    </div>
                    <div class="col-md-8">
                        <h2 class="pt-4 text-right ml-5 text-primary">Invest Connect - Firm Registration Form</h2>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-md- col-lg-">
                        <form id="firm-fr">
                            <h3 class="mb-3">Company Profile</h3>
                            <div class="row pb-5">
                                <div class="col-sm-6 col-md-8 col-lg-12">
                                    <label for="com_concept" class="form-label">
                                        <h6 class="mb-3"> 1. Concept of the Company (Product Idea)</h6>
                                    </label>
                                    <textarea class="form-control" id="com_concept" name="com_concept" rows="3" cols="20"> <?= $sp_db['com_concept'] ?> </textarea>
                                </div>
                            </div>
                            <div class="row g-3 mb-5">
                                <h6>2. Details of the core team</h6>
                                <div class="col-xs col-sm-6 col-md-6 col-lg-4">
                                    <label for="team_name1" class="form-label">Key Personal Name 1</label>
                                    <input type="text" class="form-control" id="team_name1" value="<?= $sp_db['team_name1'] ?>" placeholder="">
                                    <div class="invalid-feedback">
                                        Valid Personal name is .
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-6 col-lg-4">
                                    <label for="team_pos1" class="form-label">Position in the company</label>
                                    <input type="text" class="form-control" id="team_pos1" value="<?= $sp_db['team_pos1'] ?>" placeholder="">
                                    <div class="invalid-feedback">
                                        Valid position is .
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-6 col-lg-4">
                                    <label for="team_edu1" class="form-label">Educational Qualification</label>
                                    <input type="text" class="form-control" id="team_edu1" value="<?= $sp_db['team_edu1'] ?>" placeholder="">
                                    <div class="invalid-feedback">
                                        Valid Educational Qualification is .
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-6 col-lg-4">
                                    <label for="team_exp1" class="form-label">Past Experience in detail</label>
                                    <textarea class="form-control" id="team_exp1" rows="3"><?= $sp_db['team_exp1'] ?></textarea>
                                </div>

                                <div class="col-xs col-sm-6 col-md-6 col-lg-4">
                                    <label for="team_email1" class="form-label">Email <span class="text-muted">*</span></label>
                                    <input type="email" class="form-control" id="team_email1" value="<?= $sp_db['team_email1'] ?>" placeholder="you@example.com" required>

                                </div>
                                <div class="col-xs col-sm-6 col-md-6 col-lg-4">
                                    <label for="team_ph1" class="form-label">Phone <span class="text-muted">*</span></label>
                                    <input type="text" class="form-control" id="team_ph1" value="<?= $sp_db['team_ph1'] ?>" laceholder="123-456-7890">

                                </div>
                                <hr class="mt-4 mb-4">
                                <div class="col-xs col-sm-6 col-md-6 col-lg-4">
                                    <label for="team_name2" class="form-label">Key Personal Name 2</label>
                                    <input type="text" class="form-control" id="team_name2" value="<?= $sp_db['team_name2'] ?>" placeholder="">
                                    <div class="invalid-feedback">
                                        Valid Personal name is .
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-6 col-lg-4">
                                    <label for="team_pos2" class="form-label">Position in the company</label>
                                    <input type="text" class="form-control" id="team_pos2" value="<?= $sp_db['team_pos2'] ?>" placeholder="">
                                    <div class="invalid-feedback">
                                        Valid position is .
                                    </div>
                                </div>

                                <div class="col-xs col-sm-6 col-md-6 col-lg-4">
                                    <label for="team_edu2" class="form-label">Educational Qualification</label>
                                    <input type="text" class="form-control" id="team_edu2" value="<?= $sp_db['team_edu2'] ?>" placeholder="">
                                    <div class="invalid-feedback">
                                        Valid Educational Qualification is .
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-6 col-lg-4">
                                    <label for="team_exp2" class="form-label">Past Experience in detail</label>
                                    <textarea class="form-control" id="team_exp2" value="" rows="3"><?= $sp_db['team_exp2'] ?></textarea>
                                </div>

                                <div class="col-xs col-sm-6 col-md-6 col-lg-4">
                                    <label for="team_email2" class="form-label">Email <span class="text-muted">*</span></label>
                                    <input type="email" class="form-control" id="team_email2" value="<?= $sp_db['team_email2'] ?>" placeholder="you@example.com">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address.
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-6 col-lg-4">
                                    <label for="team_ph2" class="form-label">Phone <span class="text-muted">*</span></label>
                                    <input type="text" class="form-control" id="team_ph2" value="<?= $sp_db['team_ph2'] ?>" placeholder="123-456-7890">
                                    <div class="invalid-feedback">
                                        Please enter a valid Phone.
                                    </div>
                                </div>
                                <hr class="mt-4 mb-4">
                                <div class="col-xs col-sm-6 col-md-6 col-lg-4">
                                    <label for="team_name3" class="form-label">Key Personal Name 3</label>
                                    <input type="text" class="form-control" id="team_name3" value="<?= $sp_db['team_name3'] ?>" placeholder="">
                                </div>
                                <div class="col-xs col-sm-6 col-md-6 col-lg-4">
                                    <label for="team_pos3" class="form-label">Position in the company</label>
                                    <input type="text" class="form-control" id="team_pos3" value="<?= $sp_db['team_pos3'] ?>" placeholder="">
                                </div>
                                <div class="col-xs col-sm-6 col-md-6 col-lg-4">
                                    <label for="team_edu3" class="form-label">Educational Qualification</label>
                                    <input type="text" class="form-control" id="team_edu3" value="<?= $sp_db['team_edu3'] ?>" placeholder="">
                                </div>
                                <div class="col-xs col-sm-6 col-md-6 col-lg-4">
                                    <label for="team_exp3" class="form-label">Past Experience in detail</label>
                                    <textarea class="form-control" id="team_exp3" value="" rows="3"><?= $sp_db['team_exp3'] ?></textarea>
                                </div>
                                <div class="col-xs col-sm-6 col-md-6 col-lg-4">
                                    <label for="team_email3" class="form-label">Email <span class="text-muted">*</span></label>
                                    <input type="email" class="form-control" id="team_email3" value="<?= $sp_db['team_email3'] ?>" placeholder="you@example.com">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address.
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-6 col-lg-4">
                                    <label for="team_ph3" class="form-label">Phone <span class="text-muted">*</span></label>
                                    <input type="text" class="form-control" id="team_ph3" value="<?= $sp_db['team_ph3'] ?>" placeholder="123-456-7890">
                                    <div class="invalid-feedback">
                                        Please enter a valid Phone.
                                    </div>
                                </div>
                            </div>
                            <h3 class="mb-3">Infrastructure</h3>
                            <div class="row g-3 mb-5">
                                <h6>3. Land (in area) existing for the firm</h6>
                                <table class="table table-hover table-striped table-bordered   table-light table-striped table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sl No.</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Area in Cent</th>
                                            <th scope="col">Market value</th>
                                            <th scope="col">Total land cost</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 1; $i < 4; $i++) { ?>

                                            <tr>
                                                <th scope="row"><?= $i ?> </th>
                                                <td><?= $T['jsl_loc' . $i] ?></td>
                                                <td><?= $T['jsl_area' . $i] ?></td>
                                                <td><?= $T['jsl_val' . $i] ?></td>
                                                <td><?= $T['jsl_cost' . $i] ?></td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row g-3 mb-5">
                                <h6>4. Building and other infrastructure (constructed)</h6>
                                <table class="table table-hover  table-light table-striped table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sl No.</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Area in Sqft</th>
                                            <th scope="col">Market value</th>
                                            <th scope="col">Total land cost</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 1; $i < 4; $i++) { ?>
                                            <tr>
                                                <th scope="row"><?= $i ?></th>
                                                <td>
                                                    <?= $T['jsb_loc' . $i] ?>
                                                </td>
                                                <td>
                                                    <?= $T['jsb_area' . $i] ?>
                                                </td>
                                                <td>
                                                    <?= $T['jsb_val' . $i] ?>
                                                </td>
                                                <td>
                                                    <?= $T['jsb_cost' . $i] ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row g-3 mb-5">
                                <h6>5. Machineries and equipment available</h6>
                                <table class="table table-hover  table-light table-striped table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sl No.</th>
                                            <th scope="col">Name of machineries</th>
                                            <th scope="col">Cost of purchase</th>
                                            <th scope="col">Life cycle in year</th>
                                            <th scope="col">Year of usage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 1; $i < 11; $i++) { ?>
                                            <tr>
                                                <th scope="row"><?= $i ?></th>

                                                <td>
                                                    <?= $T['jsmac_name' . $i] ?>
                                                </td>
                                                <td>
                                                    <?= $T['jsmac_cost' . $i] ?>
                                                </td>
                                                <td>
                                                    <?= $T['jsmac_yr' . $i] ?>
                                                </td>
                                                <td>
                                                    <?= $T['jsmac_use_yr' . $i] ?>
                                                </td>


                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <h3 class="mb-3">Product/ Process/ Services</h3>
                            <div class="row g-3 mb-5">
                                <h6>6. Organization of the company / firm</h6>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="team_name1" class="form-label">Name of Company</label>
                                    <input type="text" class="form-control" id="org_name_com" value="<?= $sp_db['org_name_com'] ?>" placeholder="">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="team_name1" class="form-label">Form of ownership</label>
                                    <input type="text" class="form-control" id="org_own_form" value="<?= $sp_db['org_own_form'] ?>" placeholder="">


                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 ">
                                    <label for="team_name1" class="form-label">Whether trade mark registered</label>
                                    <div class="d-flex flex-wrap">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" <?= $sp_db['org_tr_mark_reg'] == 1 ? 'checked' : null ?> id="filter-none" value="1">
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" <?= $sp_db['org_tr_mark_reg'] == 0 ? 'checked' : null ?> id="filter-1" value="0">
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3 mb-5">
                                <h6>7. Major activities of the company</h6>
                                <table class="table table-hover  table-light table-striped table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sl No.</th>
                                            <th scope="col">Items</th>
                                            <th scope="col">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Raw material procurement</td>
                                            <td>
                                                <?= $sp_db['act_raw_mat'] ?> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Production/processing</td>
                                            <td>
                                                <?= $sp_db['act_prod'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Service</td>
                                            <td>
                                                <?= $sp_db['act_serv'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Packaging</td>
                                            <td>
                                                <?= $sp_db['act_pack'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Distribution/Delivery</td>
                                            <td>
                                                <?= $sp_db['act_deli'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Trading</td>
                                            <td>
                                                <?= $sp_db['act_tr'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>Export</td>
                                            <td>
                                                <?= $sp_db['act_expo'] ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row g-3 mb-5">
                                <h6>8. Current products with specifications</h6>
                                <table class="table table-hover  table-light table-striped table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sl No.</th>
                                            <th scope="col">Title of the product</th>
                                            <th scope="col">Type of the product</th>
                                            <th scope="col">Brand Name</th>
                                            <th scope="col">Uniqueness</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 1; $i < 8; $i++) { ?>
                                            <tr>
                                                <th scope="row"><?= $i ?></th>

                                                <td>
                                                    <?= $T['jspro_title' . $i] ?>
                                                </td>
                                                <td>
                                                    <?= $T['jspro_type' . $i] ?>
                                                </td>
                                                <td>
                                                    <?= $T['jspro_brand' . $i] ?>
                                                </td>
                                                <td>
                                                    <?= $T['jspro_unique' . $i] ?>
                                                </td>

                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                            <h3 class="mb-3">Market and marketing system</h3>
                            <div class="row g-3 mb-5">
                                <h6>9. Market and marketing method of the products</h6>
                                <table class="table table-hover  table-light table-striped table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sl No.</th>
                                            <th scope="col">Type of marketing system</th>
                                            <th scope="col">Marketing team</th>
                                            <th scope="col">Collaborators</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 1; $i < 9; $i++) { ?>
                                            <tr>

                                                <th scope="row"><?= $i ?></th>

                                                <td>
                                                    <?= $T['jsmar_type' . $i] ?>
                                                </td>
                                                <td>
                                                    <?= $T['jsmar_team' . $i] ?>
                                                </td>
                                                <td>
                                                    <?= $T['jsmar_collab' . $i] ?>
                                                </td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row g-3 mb-5">
                                <h6>10. Major clients of the company</h6>
                                <table class="table table-hover  table-light table-striped table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sl No.</th>
                                            <th scope="col">Type of the client</th>
                                            <th scope="col">Name of the client</th>
                                            <th scope="col">Category of the client</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php for ($i = 1; $i < 6; $i++) { ?>
                                            <tr>

                                                <th scope="row"><?= $i ?></th>

                                                <td>
                                                    <?= $T['jscli_type' . $i] ?>
                                                </td>
                                                <td>
                                                    <?= $T['jscli_name' . $i] ?>
                                                </td>
                                                <td>
                                                    <?= $T['jscli_category' . $i] ?>
                                                </td>

                                            </tr>
                                        <?php } ?>


                                    </tbody>
                                </table>
                            </div>
                            <div class="row g-3 mb-5 ">
                                <h6>11. Major competitors of the Company</h6>
                                <table class="table table-hover  table-light table-striped table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sl No.</th>
                                            <th scope="col">Name of the competitor</th>
                                            <th scope="col">Title of the competitor</th>
                                            <th scope="col">Advantage of your company over competitors</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 1; $i < 6; $i++) { ?>
                                            <tr>
                                                <th scope="row"><?= $i ?></th>

                                                <td>
                                                    <?= isset($T['jscomp_name' . $i]) ? $T['jscomp_name' . $i] : 'N/A'  ?>
                                                </td>
                                                <td>
                                                    <?= isset($T['jscomp_title' . $i]) ? $T['jscomp_title' . $i] : 'N/A' ?>
                                                </td>
                                                <td>
                                                    <?= isset($T['jscomp_adv' . $i]) ?  $T['jscomp_adv' . $i] : 'N/A' ?>
                                                </td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <h3 class="mb-3">Manpower</h3>
                            <div class="row g-3 mb-5">
                                <h6>12. Staff combination and strength</h6>
                                <table class="table table-hover  table-light table-striped table-bordered table-responsive table-sm" style="width: 900px;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Category</th>
                                            <th scope="col">Permanent</th>
                                            <th scope="col">Temporary</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <th scope="row">[a] Managerial</th>
                                            <td>
                                                <?= $T['jsman_perma'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsman_temp'] ?>
                                            </td>
                                            <td><?= $T['jsman_ot'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">[b] Skilled Labors</th>
                                            <td>
                                                <?= $T['jsskill_perma'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsskill_temp'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsskill_ot'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">[c] Unskilled Labors</th>
                                            <td>
                                                <?= $T['jsunskill_perma'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsunskill_temp'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsunskill_ot'] ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h3 class="mb-3">Present perception and future scope</h3>
                            <div class="row g-3 mb-5">
                                <div class="col-sm-6 col-md-8 col-lg-12">
                                    <label for="com_concept" class="form-label">
                                        <h6>13. Customer Deals</h6>
                                    </label>
                                    <textarea class="form-control" id="cust_deals" name="cust_deals" rows="3" cols="20"> <?= $sp_db['cust_deals'] ?> </textarea>
                                </div>
                            </div>
                            <div class="row g-3 mb-5">
                                <div class="col-12">
                                    <h6>14. Risk Factors</h6>
                                    <table class="table table-hover  table-light table-striped table-bordered table-responsive">
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><input type="textarea" class="form-control" id="risk1" value="<?= $T['jsrisk1'] ?>" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td><input type="textarea" class="form-control" id="risk2" value="<?= $T['jsrisk2'] ?>" placeholder=""></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td><input type="textarea" class="form-control" id="risk3" value="<?= $T['jsrisk3'] ?>" placeholder=""></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td><input type="textarea" class="form-control" id="risk4" value="<?= $T['jsrisk4'] ?>" placeholder=""></td>

                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td><input type="textarea" class="form-control" id="risk5" value="<?= $T['jsrisk5'] ?>" placeholder=""></td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row g-3 mb-5">
                                <div class="col-12">
                                    <h6>15. Highlights</h6>
                                    <table class="table table-hover  table-light table-striped table-bordered table-responsive">
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><input type="textarea" class="form-control" id="high1" value="<?= $T['jshigh1'] ?>" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td><input type="textarea" class="form-control" id="high2" value="<?= $T['jshigh2'] ?>" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td><input type="textarea" class="form-control" id="high3" value="<?= $T['jshigh3'] ?>" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td><input type="textarea" class="form-control" id="high4" value="<?= $T['jshigh4'] ?>" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td><input type="textarea" class="form-control" id="high5" value="<?= $T['jshigh5'] ?>" placeholder=""></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row g-3 mb-5">
                                <div class=" col-12">
                                    <h6>16. Innovations</h6>
                                    <table class="table table-hover  table-light table-striped table-bordered table-responsive">
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><input type="textarea" class="form-control" id="inno1" value="<?= $T['jsinno1'] ?>" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td><input type="textarea" class="form-control" id="inno2" value="<?= $T['jsinno2'] ?>" placeholder=""></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td><input type="textarea" class="form-control" id="inno3" value="<?= $T['jsinno3'] ?>" placeholder=""></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <h3 class="mb-3">Performance indicators</h3>
                            <div class="row g-3 mb-5">
                                <h6>17. Turnover reported for the last 3 years (based on audited account statement)</h6>

                                <table class="table table-hover  table-light table-striped table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Particulars</th>
                                            <th scope="col">For Year 2018-19</th>
                                            <th scope="col">For Year 2019-20</th>
                                            <th scope="col">For Year 2020-21</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Turnover</th>
                                            <td>
                                                <?= $T['jsturn_yr1'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsturn_yr2'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsturn_yr3'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Gross Profit</th>
                                            <td>
                                                <?= $T['jsgross_yr1'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsgross_yr2'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsgross_yr3'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Net Profit</th>
                                            <td>
                                                <?= $T['jsnet_yr1'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsnet_yr2'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsnet_yr3'] ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h3 class="mb-3">Intangible assets</h3>
                            <div class="row g-3 mb-5">
                                <h6>18. Trade mark/ Brand Value (Discounted Cash Flow Method)</h6>
                                <table class="table table-hover  table-light table-striped table-bordered table-responsive">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Estimated Cash Flow for 5 years</th>
                                            <td>
                                                <?= $sp_db['asset_flow_5yr'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Average Profit Per year</th>
                                            <td>
                                                <?= $sp_db['asset_prof_pryr'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Number of Profit years</th>
                                            <td>
                                                <?= $sp_db['asset_prof_yr_no'] ?>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Value = Average Profit x Number of Years</th>
                                            <td>
                                                <?= $sp_db['asset_val'] ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row g-3 mb-5">
                                <h6 class="mb-3">19. Proposed Investment</h6>
                                <table class="table table-hover  table-light table-striped table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sl No.</th>
                                            <th scope="col">Items</th>
                                            <th scope="col">Expected Investment 2019-20</th>
                                            <th scope="col">Remarks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <?= $T['jsitem1'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsex_inv1'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsrem1'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>
                                                <?= $T['jsitem2'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsex_inv2'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsrem2'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>
                                                <?= $T['jsitem3'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsex_inv3'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsrem3'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>
                                                <?= $T['jsitem4'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsex_inv4'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsrem4'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total</th>
                                            <td>
                                                <?= $T['jsitem_tot'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsex_inv_tot'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsrem_tot'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                            <th scope="row">Beneficiary Contribution</th>
                                            <td>
                                                <?= $T['jsex_inv_ben'] ?>
                                            </td>
                                            <td>
                                                <?= $T['jsrem_ben'] ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12 text-center">
                                <!-- <button class=" btn btn-primary btn-lg" id="sub-btn" type="submit">Submit</button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="pt-5 my-5 text-muted border-top text-center">
            &copy; 2021 CreateCap. Powered by signrOots Technologies.
        </footer>
    </div>
    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../ajax/jq.js"></script>
    <!-- <script src="ajax/firm.js"></script> -->
</body>

</html>