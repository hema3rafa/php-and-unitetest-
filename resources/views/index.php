<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jumia Exercise</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<div class="container-fluid main-div-container w-75">
    <br><br>
    <h2 >Phone Numbers</h2>
    <br><br>
    <form method="GET" action="/">
        <div class="row">
            <div class="col">
                <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Select Country</label>
                    <div class="col-sm-6">
                        <label>
                            <select class="form-control" name="country" id="country">
                                <option value="">ALL Countries</option>
                                <?php foreach ($countries as $country) : ?>
                                <option value="<?= $country?>" <?= $selectedCountry == $country ? 'selected' : '' ?>><?= $country ?></option>
                                <?php endforeach; ?>

                            </select>
                        </label>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Phone Validate State</label>
                    <div class="col-sm-6">
                        <label>
                            <select class="form-control" name="state">
                                <option value="">All States</option>
                                <option value="true" <?= $selectedState == 'true' ? 'selected' : '' ?>>Valid</option>
                                <option value="false" <?= $selectedState == 'false' ? 'selected' : '' ?>>Invalid</option>
                            </select>
                        </label>
                    </div>
                </div>
            </div>

            <div class="col">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>

                            <th scope="col">Country</th>
                            <th scope="col">State</th>
                            <th scope="col">Country code</th>
                            <th scope="col">Phone number</th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                        <?php foreach ($customers as  $customer) : ?>
                            <tr>

                                <td><?= $customer->getPhone()->getCountryName() ?></td>
                                <td><?= $customer->getPhone()->getValidationState()  ? 'OK' : 'NOK' ?> </td>
                                <td><?= $customer->getPhone()->getCountryCode() ?> </td>
                                <td><?= $customer->getPhone()->getPhoneNumber() ?> </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
    <br>
    <div class="row col-sm-12 justify-content-center" >
        <nav aria-label="Page navigation">
            <ul class="pagination pagination-sm justify-content-center" id="myPager"></ul>
        </nav>
    </div>
</div>

<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
<script src="js/custom.js"></script>
</body>
</html>