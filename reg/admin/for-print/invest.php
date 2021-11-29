<?php

session_start();
if (!isset($_SESSION['admin']) and !isset($_SESSION['pass'])) {
    echo "<script>location.replace(`index.php`)</script>";
} else {
    require '../../db.php';
    $d = new Db();
    if (!isset($_GET['id'])) {
        echo "<script>location.replace(`../pages-404.html`)</script>";
    } else {
        $sp_db = $d->get('one', 'invest', $_GET['id']);
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
    <title>Invest Connect-Investor Registration Form</title>

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

        table th {
            width: auto !important;
        }
    </style>


    <!-- Custom styles for this template -->
    <!-- <link href="../../assets/dist/css/starter-template.css" rel="stylesheet"> -->
</head>

<body class="bg-light">
    <pre>
        <pre><?php
                //  print_r($sp_db);
                ?></pre>
    </pre>
    <div class="col-lg mx-auto p-3 py-md-5">
        <header>
            <div class="container mb-5">
                <div class="row">
                    <div class="col-md-4 pt-3">
                        <a href="https://createcap.in"><img class="d-block mb-4" src="../../assets/brand/logo.png" alt="" width="auto" height="57"></a>
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-3">Invest Connect</h2>
                        <h3 class="pt-4 text-right ml-5 text-primary">Investor Registration Form</h3>
                    </div>
                </div>
                <!-- 


                <div class="py-3 text-center">
                    <img class="d-block mx-auto mb-4" src="../../assets/brand/logo.png" alt="" width="auto" height="57">
                    <h1 class="mb-3">Invest Connect</h1>
                    <h2></h2>
                </div> -->
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-md- col-lg-">
                        <form id="invest-fr">
                            <div class="row g-3 mb-5 mt-5">
                                <div class="col-xs col-sm-6 col-md-4 col-lg-4">
                                    <label for="invest_pri_name" class="form-label">Name of the principal investor 1</label>
                                    <input type="text" class="form-control" value="<?= $T['jsinvest_pri_name'] ?>">
                                </div>
                                <div class="col-xs col-sm-6 col-md-4 col-lg-4">
                                    <label for="invest_pri_ph" class="form-label">Mobile</label>
                                    <input type="text" class="form-control" id="invest_pri_ph" value="<?= $T['jsinvest_pri_ph'] ?>" placeholder="123-456-7890">
                                </div>
                                <div class="col-xs col-sm-6 col-md-4 col-lg-4">
                                    <label for="invest_pri_email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="invest_pri_email" value="<?= $T['jsinvest_pri_email'] ?>" placeholder="you@example.com">
                                </div>
                                <div class="col-xs col-sm-6 col-md-4 col-lg-4">
                                    <label for="invest_pri_res" class="form-label">Current Residence</label>
                                    <input type="text" class="form-control" id="invest_pri_res" value="<?= $T['jsinvest_pri_res'] ?>">
                                </div>
                                <div class="col-xs col-sm-6 col-md-4 col-lg-4">
                                    <label for="invest_pri_dob" class="form-label">Date Of Birth</label>
                                    <input type="date" class="form-control" id="invest_pri_dob" value="<?= $T['jsinvest_pri_dob'] ?>">
                                </div>

                                <div class="col-xs col-sm-6 col-md-4 col-lg-4">
                                    <label for="invest_pri_edu" class="form-label">Education</label>
                                    <input type="text" class="form-control" id="invest_pri_edu" value="<?= $T['jsinvest_pri_edu'] ?>">
                                </div>
                                <div class="col-sm-6 col-md-8 col-lg-8">
                                    <label for="invest_pri_ad" class="form-label">Address</label>
                                    <textarea class="form-control" id="invest_pri_ad" rows="3" cols="20"> <?= $T['jsinvest_pri_ad'] ?></textarea>
                                </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <table class="table table-hover table-light table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col-lg-2">Name of the investors</th>
                                            <th scope="col-lg-2">Address</th>
                                            <th scope="col-lg-2">Current Residence</th>
                                            <th scope="col-lg-2">Date of Birth</th>
                                            <th scope="col-lg-2">Education</th>
                                            <th scope="col-lg-1">Mobile</th>
                                            <th scope="col-lg-1">E-mail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($b = 1; $b < 4; $b++) { ?>
                                            <tr>
                                                <td><input type="text" class="form-control" id="invest_name1" value="<?= $T['jsinvest_name' . $b] ?>" placeholder=""></td>
                                                <td><input type="textarea" class="form-control" id="invest_ad1" value="<?= $T['jsinvest_ad' . $b] ?>"></td>
                                                <td><input type="text" class="form-control" id="invest_res1" value="<?= $T['jsinvest_res' . $b] ?>"></td>
                                                <td><input type="date" class="form-control" id="invest_dob1" value="<?= $T['jsinvest_dob' . $b] ?>"></td>
                                                <td><input type="text" class="form-control" id="invest_edu1" value="<?= $T['jsinvest_edu' . $b] ?>"></td>
                                                <td><input type="text" class="form-control" id="invest_ph1" value="<?= $T['jsinvest_ph' . $b] ?>"></td>
                                                <td><input type="email" class="form-control" id="invest_email1" value="<?= $T['jsinvest_email' . $b] ?>"></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <h3 class="mb-3">Professional Details</h3>
                            <div class="row g-3 mb-3">
                                <div class="col-sm-6 col-md-12 col-lg-12">
                                    <label for="proff_deta" class="form-label">1. Brief Self Introduction and Profile of investor, group of investors or the represented company (Approval of your account as an investor specifically requires this information. So provide the maximum possible information with regard to previous professional experience in the domain)</label>
                                    <textarea class="form-control" id="proff_deta" rows="3" cols="20"> <?= $sp_db['proff_deta'] ?></textarea>
                                </div>
                            </div>

                            <div class="row g-3 mb-5 mt-5">
                                <h5>Employment experience</h5>
                                <div class="col-xs col-sm-6 col-md-4 col-lg-4">
                                    <label for="emp_exp_yr" class="form-label">Years of employment experience</label>
                                    <input type="text" id="emp_exp_yr" class="form-control" value="<?= $sp_db['emp_exp_yr'] ?>">
                                </div>
                                <div class="col-xs col-sm-6 col-md-4 col-lg-4">

                                    <label for="emp_job" class="form-label"> Nature of the job</label><br>
                                    <input type="text" id="emp_job" class="form-control" value="<?= $sp_db['emp_job'] ?>">

                                </div>
                                <div class="col-xs col-sm-6 col-md-4 col-lg-4">

                                    <label for="emp_coms" class="form-label">Companies in which the investor has worked</label>
                                    <input type="text" class="form-control" id="emp_coms" value="<?= $sp_db['emp_coms'] ?>">

                                </div>
                                <div class="col-xs col-sm-6 col-md-4 col-lg-4">

                                    <label for="emp_inds" class="form-label">Industries in which investor(s) was employed</label>
                                    <input type="text" id="emp_inds" class="form-control" value="<?= $sp_db['emp_inds'] ?>">

                                </div>
                            </div>
                            <div class="row g-3 mb-5 mt-5">
                                <h5>Entrepreneurial experience</h5>
                                <div class="col-xs col-sm-6 col-md-3 col-lg-3">
                                    <label for="entre_exp_yr" class="form-label">Years of entrepreneurial experience </label>
                                    <input type="text" class="form-control" id="entre_exp_yr" value="<?= $sp_db['entre_exp_yr'] ?>">
                                </div>
                                <div class="col-xs col-sm-6 col-md-5 col-lg-5">
                                    <label for="entre_firm" class="form-label">Firms in which you have been part of as an entrepreneur/ investor</label><br>
                                    <input type="text" class="form-control" id="entre_firm" value="<?= $sp_db['entre_firm'] ?>">
                                </div>
                                <div class="col-xs col-sm-6 col-md-4 col-lg-4">
                                    <label for="entre_indus" class="form-label">Industries in which you have entrepreneurial experience</label>
                                    <input type="text" class="form-control" id="entre_indus" value="<?= $sp_db['entre_indus'] ?>">
                                </div>
                            </div>
                            <div class="row g-3 mb-5 mt-5">
                                <h5>Past investment history</h5>
                                <div class="col-lg-4 col-md-4 col-sm-12 ">
                                    <label for="pre_invest_exp" class="form-label">Do you have any prior investment experience?</label>
                                    <div class="d-flex flex-wrap">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" <?= $sp_db['pre_invest_exp'] == 1 ? 'checked' : null  ?> id="pre_invest_exp1" value="1">
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" <?= $sp_db['pre_invest_exp'] == 0 ? 'checked' : null  ?> id="pre_invest_exp2" value="0">
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs col-sm-6 col-md-4 col-lg-4">
                                    <label for="pre_invest_amt" class="form-label">How much money did you invest in your prior investment attempt?</label>
                                    <input type="text" class="form-control" id="pre_invest_amt" value="<?= $sp_db['pre_invest_amt'] ?>">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 ">
                                    <label for="pre_invest_stat" class="form-label">Are you satisfied with the outcome of your past investment experience?</label>
                                    <div class="d-flex flex-wrap">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" <?= $sp_db['pre_invest_stat'] == 1 ? 'checked' : null  ?> id="pre_invest_stat1" value="1">
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" <?= $sp_db['pre_invest_stat'] == 0 ? 'checked' : null  ?> id="pre_invest_stat2" value="0">
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3 mb-5 mt-5">
                                <div class="col-sm-6 col-md-12 col-lg-12">
                                    <label for="invest_opper_types" class="form-label">2. Please provide a description of the types of opportunities you are looking to invest in. (Description provided here will help you getting the most relevant business proposal).</label>
                                    <textarea class="form-control" id="invest_opper_types" rows="3" cols="20"> <?= $sp_db['invest_opper_types'] ?> </textarea>
                                </div>
                            </div>

                            <h3 class="mb-3">Investment Preference</h3>
                            <div class="row g-3 mb-5 mt-5">
                                <div class="col-xs col-sm-6 col-md-12 col-lg-12">
                                    <h6 class="fw-bolder">1. Investment Range</h6>
                                    <label for="amt_invest" class="form-label">Specify the minimum and maximum amounts you would be willing to invest. The Investment range should be specified in INR.</label>
                                    <input type="text" class="form-control" id="amt_invest" value="<?= $sp_db['amt_invest'] ?>">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 ">
                                    <h6></h6>
                                    <label for="amt_invest_type" class="form-label fw-bolder">2. Investment type</label>
                                    <div class="d-flex flex-wrap">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" <?= $sp_db['amt_invest_type'] == 'Working Partnership' ? 'checked' : null  ?> id="amt_invest_type1">
                                            <label class="form-check-label" for="amt_invest_type1">Working Partnership</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" <?= $sp_db['amt_invest_type'] == 'Silent Partnership' ? 'checked' : null  ?> id="amt_invest_type2">
                                            <label class="form-check-label" for="amt_invest_type2">Silent Partnership</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 ">
                                    <h6></h6>
                                    <label for="prefer_invest_stage" class="form-label fw-bolder">3. Preferred investment stage/Round of funding:</label>
                                    <div class="d-flex flex-wrap">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" <?= $sp_db['prefer_invest_stage'] == 'Seed Capital or Early Stage' ? 'checked' : null  ?> id="prefer_invest_stage1">
                                            <label class="form-check-label" for="prefer_invest_stage1">Seed Capital or Early Stage</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" <?= $sp_db['prefer_invest_stage'] == 'Growth' ? 'checked' : null  ?> id="prefer_invest_stage2">
                                            <label class="form-check-label" for="prefer_invest_stage2">Growth</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" <?= $sp_db['prefer_invest_stage'] == 'Others' ? 'checked' : null  ?> id="prefer_invest_stage3">
                                            <label class="form-check-label" for="prefer_invest_stage3">Others</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <h5></h5>
                                    <label for="amt_invest_sec" class="form-label fw-bolder">4. Type of business</label>
                                    <div class="d-flex flex-wrap">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" <?= $sp_db['amt_invest_sec'] == 'Service Sector' ? 'checked' : null  ?> id="amt_invest_sec">
                                            <label class="form-check-label" for="amt_invest_sec1">Service Sector</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" <?= $sp_db['amt_invest_sec'] == 'Manufacturing sector' ? 'checked' : null  ?> id="amt_invest_sec" value="amt_invest_sec2">
                                            <label class="form-check-label" for="amt_invest_sec2">Manufacturing sector</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3 mb-5 mt-5">
                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    <label for="interest_indus" class="form-label fw-bolder">5. Interested industries for investment </label>
                                    <div class="d-flex flex-wrap">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" <?= strpos($sp_db['interest_indus'], 'Food Processing') ? 'checked' : null ?> id="interest_indus1" value="Food Processing">
                                            <label class="form-check-label" for="inlineRadio1">Food Processing</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" <?= strpos($sp_db['interest_indus'], 'Recycling') ? 'checked' : null ?> id="interest_indus2" value="Recycling">
                                            <label class="form-check-label" for="inlineRadio2">Recycling</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" <?= strpos($sp_db['interest_indus'], 'Technology / Software') ? 'checked' : null ?> id="interest_indus3" value="Technology / Software">
                                            <label class="form-check-label" for="inlineRadio2">Technology / Software</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" <?= strpos($sp_db['interest_indus'], 'Textile Manufacturing') ? 'checked' : null ?> id="interest_indus4" value="Textile Manufacturing">
                                            <label class="form-check-label" for="inlineRadio2">Textile Manufacturing</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" <?= strpos($sp_db['interest_indus'], 'Agri based') ? 'checked' : null ?> id="interest_indus5" value="Agri based">
                                            <label class="form-check-label" for="inlineRadio1">Agri based</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" <?= strpos($sp_db['interest_indus'], 'Warehousing') ? 'checked' : null ?> id="interest_indus6" value="Warehousing">
                                            <label class="form-check-label" for="inlineRadio2">Warehousing</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" <?= strpos($sp_db['interest_indus'], 'Logistics & Supply Chain') ? 'checked' : null ?> id="interest_indus7" value="Logistics & Supply Chain">
                                            <label class="form-check-label" for="inlineRadio2">Logistics & Supply Chain</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" <?= strpos($sp_db['interest_indus'], 'Any other') ? 'checked' : null ?> id="interest_indus8" value="Any other">
                                            <label class="form-check-label" for="inlineRadio2">Any other</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 mt-5">
                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <label for="interest_indus" class="form-label fw-bolder">6. Please provide the details of your asset holdings if you are interested to invest in projects to tap further economic
                                        opportunities from such assets.</label>
                                    <table class="table table-hover table-light table-responsive table-sm form-control">
                                        <tbody>
                                            <tr>
                                                <td scope="col"></td>
                                                <td scope="col">Land Details</td>
                                                <td scope="col">Buildings (Commercial)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">Available Assets</td>
                                                <td><input type="text" class="form-control" id="asset_land" value="<?= $sp_db['asset_land'] ?>"></td>
                                                <td><input type="text" class="form-control" id="asset_build" value="<?= $sp_db['asset_build'] ?>"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row g-3 mt-5">
                                <div class="col-md-12 text-center">
                                    <!-- <button class="btn btn-primary btn-lg" id="sub-btn" type="submit">Submit</button> -->
                                </div>
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
    <!-- <script src="ajax/invest.js"></script> -->
</body>

</html>