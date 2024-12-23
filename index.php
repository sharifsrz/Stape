<?php include 'header.php' ?>



<!-- Main Content -->
<div id="page-content-wrapper">
    <!-- Top Navigation -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
        </div>
    </nav> -->

    <div class="container-fluid px-4 my-4">
        <!-- Welcome and Upgrade Section -->
        <?php include 'container.php' ?>

        <!-- Cards for Actions -->
        <section class="card-section row mb-4">
            <div class="col-md-12">
                <div class="card text-center shadow-sm">
                    <div class="card-body d-flex">
                        <div class="card-text">
                            <h5 class="card-title">👋 Welcome</h5>
                            <h3>We are glad to see you among Stape users!</h3>
                            <p>
                                You can always ask questions or find answers to many questions
                                related
                                to
                                setting
                                up containers and tags in our active community.<br>

                                If you have any problems with the service - contact our support
                                team.<br>

                                And pay attention to our blog - there are tons of useful information
                                and
                                step-by-step tutorials.
                            </p>
                            <!-- <button class="btn btn-primary">Create</button> -->
                        </div>
                        <div class="videos">
                            <video bor width="270" height="180" controls>
                                <source src="movie.mp4" type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="payment-section row mb-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            💳 Setup Payments
                        </h5>
                        <p>
                            This would allow you to set up sGTM containers and gateways faster and benefit
                            from
                            automatic upgrades.
                            <br>
                            We will charge you only when your container or gateway is running and you've
                            selected the best subscription plan.
                        </p>
                        <button class="btn">Add Billing</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="recent-scetion row mb-4">
            <div class="content-section">
                <div class="align d-flex justify-content-between align-items-center">
                    <div class="container-title">Recent sGTM containers</div>
                    <button class="btn create-btn">🐤 Create container</button>
                </div>

                <table class="table align-middle mt-3">
                    <thead>
                        <tr>
                            <th scope="col">NAME</th>
                            <th scope="col">USAGE</th>
                            <th scope="col">TYPE</th>
                            <th scope="col">VALID TILL</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- First Row -->
                        <tr>
                            <td>
                                <div><strong>paysensa</strong></div>
                                <div class="status-text">Running <span class="text-muted">🔗 GTM-58PZRWT</span>
                                </div>
                            </td>
                            <td>
                                <div class="usage-bar">
                                    <div class="usage-fill" style="width: 21%;"></div>
                                </div>
                                <div class="text-muted small">21%</div>
                            </td>
                            <td>Free</td>
                            <td>Jan 5, 2025</td>
                            <td>
                                <button class="icon-btn">⚙️</button>
                            </td>
                        </tr>

                        <!-- Second Row -->
                        <tr>
                            <td>
                                <div><strong>my test</strong></div>
                                <div class="status-text">Running <span class="text-muted">🔗 GTM-WFT89DVJ</span>
                                </div>
                            </td>
                            <td>
                                <div class="usage-bar">
                                    <div class="usage-fill" style="width: 1%;"></div>
                                </div>
                                <div class="text-muted small">1%</div>
                            </td>
                            <td>Free</td>
                            <td>Jan 15, 2025</td>
                            <td>
                                <button class="icon-btn">⚙️</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="recent-scetion row mb-4">
            <div class="content-section">
                <div class="align d-flex justify-content-between align-items-center">
                    <div class="container-title">Recent gateways</div>
                    <button class="btn create-btn">🐤 Create gateway<i class="fa-solid fa-chevron-down"></i></button>
                </div>

                <table class="table align-middle mt-3">
                    <thead>
                        <tr>
                            <th scope="col">NAME</th>
                            <th scope="col">TYPE</th>
                            <th scope="col">PLAN</th>
                            <th scope="col">VALID TILL</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- First Row -->
                        <tr>
                            <td>
                                <div><strong>Sharif</strong></div>
                                <div class="status-text">Payment pending <span class="text-muted"></span>
                                </div>
                            </td>
                            <td>
                                <div class="usage-bar">
                                    <div class="usage-fill" style="width: 21%;"></div>
                                </div>
                                <div class="text-muted small">21%</div>
                            </td>
                            <td>Free</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="latest-article row mb-4">
            <div class="content-section">
                <div class="align d-flex justify-content-between align-items-center">
                    <div class="container-title">Latest articles</div>
                    <button class="btn create-btn">More articles on the blog</button>
                </div>
                <div class="latest-first">
                    <div>
                        <p>
                            <i class="fa-regular fa-newspaper"></i><a href="">
                                <span>Google's first-party mode vs. server-side tracking</span>
                            </a>
                        </p>
                        <p class="date">
                            Dec 18, 2024
                        </p>
                    </div>
                </div>
                <div class="latest-firsts">
                    <p>
                        <i class="fa-regular fa-newspaper"></i><a href="">
                            <span>Case study: Optimize With Data records up to 30% less data loss for a Swiss
                                leading fresh pet food industry brand</span>
                        </a>
                    </p>
                    <p class="date">
                        Dec 18, 2024
                    </p>
                </div>
                <div class="latest-firstss">
                    <p>
                        <i class="fa-regular fa-newspaper"></i><a href="">
                            <span>Why are UTM parameters removed, and how can you fix it?</span>
                        </a>
                    </p>
                    <p class="date">
                        Dec 18, 2024
                    </p>
                </div>
            </div>
        </section>
    </div>


</div>
<!-- recent-scetion -->




<!-- Latest Articles -->





<?php include 'footer.php' ?>