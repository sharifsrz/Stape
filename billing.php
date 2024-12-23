<?php include 'header.php' ?>

<div id="page-content-wrapper">
    <div class="">
        <div class="row">
            <!-- Illustration Section -->
            <div class="col-md-12">
                <div class="illustration rounded">
                    <img src="assets/img.webp" alt="Card Illustration" class="card-image">
                </div>
            </div>

            <!-- Billing Information Section -->
            <section class="billing-section">
                <div class="col-md-12">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="card-title">Billing Information</h5>
                                <a href="setup.php" class="btn">Edit</a>
                            </div>

                            <p><strong>Paying as:</strong> Individual</p>

                            <div class="mb-section mb-3">
                                <label for="invoiceEmail" class="form-label">Send copies of invoices to</label>
                                <div class="hello">
                                    <input type="email" id="invoiceEmail" class="form-control"
                                        placeholder="myboss@gmail.com">
                                    <button class="btn btn-success ms-2">Save</button>
                                </div>
                            </div>

                            <h6 class="mt-4">Subscriptions</h6>
                            <p class="empty-state">Nothing to show, nothing to see</p>

                            <h6 class="mt-4">Customer Invoice History</h6>
                            <div class="d-flex gap-2 mb-3">
                                <input type="date" class="form-control">
                                <select class="form-select">
                                    <option selected>Container name or invoice ID</option>
                                </select>
                                <select class="form-select">
                                    <option selected>Payment status</option>
                                </select>
                            </div>
                            <p class="empty-state">Nothing to show, nothing to see</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

</div>

<?php include 'footer.php' ?>