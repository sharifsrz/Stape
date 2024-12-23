<?php include 'header.php' ?>
<div id="page-content-wrapper">


    <head>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
        <style>

        </style>
    </head>


    <div class="billing-container" style="margin-top: 0px;">
        <!-- <div class="header-image">
            <img src="https://via.placeholder.com/150" alt="Header Image">
        </div> -->
        <div class="bill-section">
            <h2 class="form-title">Billing Information</h2>
            <form>
                <div class="mb-3">
                    <label class="form-label">Paying as</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="paying_as" id="individual" value="individual"
                            checked>
                        <label class="form-check-label" for="individual">Individual</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="paying_as" id="company" value="company">
                        <label class="form-check-label" for="company">Company</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="full_name" class="form-label">Full name</label>
                    <input type="text" class="form-control" id="full_name" placeholder="First and last name">
                </div>

                <div class="mb-3">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" id="country">
                        <option value="Bangladesh" selected>Bangladesh</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address line 1</label>
                    <input type="text" class="form-control" id="address" placeholder="Street address">
                </div>
                <div class="btn-save">
                    <button type="button" class="btns">Discard</button>
                    <button type="submit" class="btns">Save changes</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


</div>

<?php include 'footer.php' ?>