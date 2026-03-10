<style type="text/css">
    /* Force 4 columns for financial calculators */
    @media (min-width: 1200px) {
        #fw-custom-section .fw-grid {
            grid-template-columns: repeat(4, 1fr) !important;
        }
    }

    /* Ensure 3 columns on medium screens */
    @media (min-width: 992px) and (max-width: 1199px) {
        #fw-custom-section .fw-grid {
            grid-template-columns: repeat(3, 1fr) !important;
        }
    }

    /* Ensure grid display */
    #fw-custom-section .fw-grid {
        display: grid !important;
        gap: 25px !important;
        padding: 10px 0 !important;
    }

    /* Card styling */
    #fw-custom-section .fw-card {
        background: #fff !important;
        border: 1px solid #eef0f2 !important;
        border-radius: 15px !important;
        padding: 15px !important;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03) !important;
        transition: all 0.3s ease !important;
        display: flex !important;
        flex-direction: column !important;
        height: 100% !important;
        position: relative !important;
    }

    #fw-custom-section .fw-card:hover {
        transform: translateY(-5px) !important;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
        border-color: #273158 !important;
    }

    /* Image box styling */
    #fw-custom-section .fw-img-box {
        background-color: #e9f9ff !important;
        border-radius: 10px 10px 0 0 !important;
        overflow: hidden !important;
        min-height: 150px !important;
        padding: 15px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }

    #fw-custom-section .fw-img-box img {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
        border: none !important;
        background-color: transparent !important;
    }

    /* Content styling */
    #fw-custom-section .fw-content {
        flex-grow: 1 !important;
        display: flex !important;
        flex-direction: column !important;
    }

    #fw-custom-section .fw-desc {
        font-size: 14px !important;
        color: #6c757d !important;
        margin-bottom: 15px !important;
        line-height: 1.5 !important;
        display: -webkit-box !important;
        -webkit-line-clamp: 2 !important;
        -webkit-box-orient: vertical !important;
        overflow: hidden !important;
    }

    /* Button styling */
    #fw-custom-section .fw-btn {
        display: block !important;
        width: 100% !important;
        background-color: #273158 !important;
        color: #fff !important;
        text-align: center !important;
        padding: 10px !important;
        border-radius: 8px !important;
        margin-top: 15px !important;
        text-decoration: none !important;
        font-weight: 600 !important;
        transition: 0.3s !important;
        border: none !important;
    }

    #fw-custom-section .fw-btn:hover {
        background-color: #cf9c0a !important;
        color: #fff !important;
    }

    @media (max-width: 576px) {
        #fw-custom-section .fw-grid {
            grid-template-columns: 1fr !important;
        }
    }
</style>

<!-- Courses First Row Start -->
     <div class="container-xxl py-5" id="fw-custom-section">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Financial Calculators</h6>
                <h2 class="mb-5">Other Calculators</h2>
            </div>
            <div class="fw-grid">
			
                <div class="fw-card wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fw-img-box mb-2">
                        <img src="../../img/emi-calc.png" alt="Calculate Loan EMI">
                    </div>
                    <div class="fw-content">
                        <p class="fw-desc">EMI is a facility for those people who keep needing huge amounts for their work.</p>
                        <a href="../emi-calculator/" class="fw-btn">EMI Calculator</a>
                    </div>
                </div>
			
                <div class="fw-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="fw-img-box mb-2">
                        <img src="../../img/lumpsum-calc.png" alt="Calculate Lumpsum">
                    </div>
                    <div class="fw-content">
                        <p class="fw-desc">In Lump sum investment, a single payment is made at a specified time.</p>
                        <a href="../lumpsum-calculator/" class="fw-btn">Lumpsum Calculator</a>
                    </div>
                </div>
			
                <div class="fw-card wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fw-img-box mb-2">
                        <img src="../../img/sip-calc.png" alt="SIP Investment">
                    </div>
                    <div class="fw-content">
                        <p class="fw-desc">Systematic Investment Plan (SIP) is an easy way to invest in Mutual Funds.</p>
                        <a href="../sip-calculator/" class="fw-btn">SIP Calculator</a>
                    </div>
                </div>
			
                <div class="fw-card wow fadeInUp" data-wow-delay="0.4s">
                    <div class="fw-img-box mb-2">
                        <img src="../../img/education-calc.png" alt="Calculate Education Loan">
                    </div>
                    <div class="fw-content">
                        <p class="fw-desc">Education Loan EMI Calculator is an online tool to calculate Education loan EMI.</p>
                        <a href="../education-loan/" class="fw-btn">Education Loan Calculator</a>
                    </div>
                </div>
			
                <div class="fw-card wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fw-img-box mb-2">
                        <img src="../../img/home-loan-calc.png" alt="Calculate Home loan">
                    </div>
                    <div class="fw-content">
                        <p class="fw-desc">Home Loan EMI Calculator is an online tool that you can use to calculate home loan EMI.</p>
                        <a href="../home-loan-calculator/" class="fw-btn">Home Loan Calculator</a>
                    </div>
                </div>
			
                <div class="fw-card wow fadeInUp" data-wow-delay="0.6s">
                    <div class="fw-img-box mb-2">
                        <img src="../../img/car-loan-calc.png" alt="Calculate Car loan">
                    </div>
                    <div class="fw-content">
                        <p class="fw-desc">Car Loan EMI Calculator is an online tool that you can use to calculate Car loan EMI.</p>
                        <a href="../car-loan-calculator/" class="fw-btn">Car Loan Calculator</a>
                    </div>
                </div>
			
	                <div class="fw-card wow fadeInUp" data-wow-delay="0.7s">
                    <div class="fw-img-box mb-2">
                        <img src="../images/Compound-Interest.png" alt="Calculate Compound Interest">
                    </div>
                    <div class="fw-content">
                        <p class="fw-desc">Compound Interest Calculator is an online tool to calculate Compounding Interest.</p>
                        <a href="../compound-interest-calculator/" class="fw-btn">Compound Interest</a>
                    </div>
                </div>

	                <div class="fw-card wow fadeInUp" data-wow-delay="0.8s">
                    <div class="fw-img-box mb-2">
                        <img src="../images/Clipart.png" alt="Calculate Compound Interest">
                    </div>
                    <div class="fw-content">
                        <p class="fw-desc">Sukanya Samridhi Yojna Calculator is a handy device in estimating maturity value.</p>
                        <a href="../sukanya-samriddhi-yojana-calculator/" class="fw-btn">SSY Calculator</a>
                    </div>
                </div>


	                <div class="fw-card wow fadeInUp" data-wow-delay="0.9s">
                    <div class="fw-img-box mb-2">
                        <img src="../images/fd.jpeg" alt="Calculate Compound Interest">
                    </div>
                    <div class="fw-content">
                        <p class="fw-desc">Before anyone tries to invest their money into a fixed deposit (FD), calculate it.</p>
                        <a href="../fd-calculator/" class="fw-btn">FD Calculator</a>
                    </div>
                </div>
			
                <div class="fw-card wow fadeInUp" data-wow-delay="1.0s">
                    <div class="fw-img-box mb-2">
                        <img src="../images/ppf.jpeg" alt="Calculate Compound Interest">
                    </div>
                    <div class="fw-content">
                        <p class="fw-desc">Public Provident Fund calculator helps you to understand your PPF investment.</p>
                        <a href="../public-provident-fund/" class="fw-btn">PPF Calculator</a>
                    </div>
                </div>
			
                <div class="fw-card wow fadeInUp" data-wow-delay="1.1s">
                    <div class="fw-img-box mb-2">
                        <img src="../images/rd.png" alt="Calculate Compound Interest">
                    </div>
                    <div class="fw-content">
                        <p class="fw-desc">A Recurring Deposit is a way to save money by making regular monthly payments.</p>
                        <a href="../rd-calculator/" class="fw-btn">RD Calculator</a>
                    </div>
                </div>
        

                <div class="fw-card wow fadeInUp" data-wow-delay="1.2s">
                    <div class="fw-img-box mb-2">
                        <img src="../images/gst.jpeg" alt="Calculate Compound Interest">
                    </div>
                    <div class="fw-content">
                        <p class="fw-desc">GST is a tax in India that began on July 1, 2017, replacing taxes like VAT.</p>
                        <a href="../gst-calculator/" class="fw-btn">GST Calculator</a>
                    </div>
                </div>
                <div class="fw-card wow fadeInUp" data-wow-delay="1.3s">
                    <div class="fw-img-box mb-2">
                        <img src="../images/step-up-sip.jpeg" alt="Calculate Compound Interest">
                    </div>
                    <div class="fw-content">
                        <p class="fw-desc">Step-Up SIP Calculator allows one to increase the amount invested as SIPs over time.</p>
                        <a href="../step-up-SIP-calculator/" class="fw-btn">Step UP SIP</a>
                    </div>
                </div>


                <div class="fw-card wow fadeInUp" data-wow-delay="1.4s">
                    <div class="fw-img-box mb-2">
                        <img src="../images/swp.jpeg" alt="Calculate Compound Interest">
                    </div>
                    <div class="fw-content">
                        <p class="fw-desc">SWP Calculator is a tool that helps you figure out how much you can withdraw.</p>
                        <a href="../systematic-withdrawal-plan-calculator/" class="fw-btn">SWP Calculator</a>
                    </div>
                </div>

                <div class="fw-card wow fadeInUp" data-wow-delay="1.5s">
                    <div class="fw-img-box mb-2">
                        <img src="../images/epf.jpeg" alt="Calculate Compound Interest">
                    </div>
                    <div class="fw-content">
                        <p class="fw-desc">EPF calculator is online tool that estimates total amount you'll receive from PF.</p>
                        <a href="../employees-provident-fund-calculator/" class="fw-btn">EPF Calculator</a>
                    </div>
                </div>

                <div class="fw-card wow fadeInUp" data-wow-delay="1.6s">
                    <div class="fw-img-box mb-2">
                        <img src="../images/income-tax.jpeg" alt="Calculate Compound Interest">
                    </div>
                    <div class="fw-content">
                        <p class="fw-desc">Income Tax Calculator helps you calculate your tax liability and plan your finances.</p>
                        <a href="../income-tax-calculator/" class="fw-btn">Income Tax Calculator</a>
                    </div>
                </div>
                <div class="fw-card wow fadeInUp" data-wow-delay="1.7s">
                    <div class="fw-img-box mb-2">
                        <img src="../images/inflation.jpeg" alt="Calculate Compound Interest">
                    </div>
                    <div class="fw-content">
                        <p class="fw-desc">Inflation is the term used to describe the increase in the prices of typical goods.</p>
                        <a href="../inflation-calculator/" class="fw-btn">Inflation Calculator</a>
                    </div>
                </div>
                <div class="fw-card wow fadeInUp" data-wow-delay="1.8s">
                    <div class="fw-img-box mb-2">
                        <img src="../images/retirement.jpeg" alt="Calculate Compound Interest">
                    </div>
                    <div class="fw-content">
                        <p class="fw-desc">Almost everyone will at some point in their lives have to face the reality of retirement.</p>
                        <a href="../retirement-calculator/" class="fw-btn">Retirement</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Courses First Row End -->