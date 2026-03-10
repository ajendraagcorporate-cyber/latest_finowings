


<?php
// Set default active page if not defined code by Aj
if(!isset($active_page)) {
    $active_page = '';
}
?>
<!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top px-2">
		
	<a href="https://finowings.com/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img loading="lazy" src="https://finowings.com/img/finowings-logo.png" alt="Finowings" class="img-fluid" style="max-width: 200px; height: auto;" />
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="https://finowings.com/" class="nav-item nav-link <?php echo ($active_page == 'home') ? 'active' : ''; ?>">Home</a>
                
				<div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo ($active_page == 'academy') ? 'active' : ''; ?>" data-bs-toggle="dropdown">Academy</a>
                    <div class="dropdown-menu fade-down m-0">
					  <a href="https://finowings.com/finowings-academy/" class="dropdown-item">Finowings Academy</a>
                      <a href="https://finowings.com/financial-books/" class="dropdown-item">Financial Books</a>                       
                    </div>
                </div>
				<a href="https://courses.finowings.com/stock-market-courses" class="nav-item nav-link">Courses</a>
				<a href="https://finowings.com/blog/" class="nav-item nav-link <?php echo ($active_page == 'blog') ? 'active' : ''; ?>">Blog</a>
				<!--<a href="https://finowings.com/IPO/" class="nav-item nav-link">IPO</a>-->
				
				<div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo ($active_page == 'ipo') ? 'active' : ''; ?>" data-bs-toggle="dropdown">IPO</a>
                    <div class="dropdown-menu fade-down m-0">
					  <a href="https://finowings.com/IPO/" class="dropdown-item">Upcoming IPO</a>
                      <a href="https://finowings.com/IPO/live-ipo-gmp.php" class="dropdown-item">Live IPO GMP</a>
                      <a href="https://finowings.com/dividend-paying-stocks/" class="dropdown-item">Dividend Stocks</a>                       
                    </div>
                </div>
				
				
				<!--<a href="https://finowings.com/IPO/" class="nav-item nav-link">IPO</a>-->
				<!--<div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">IPO</a>
                    <div class="dropdown-menu fade-down m-0">
					  <a href="https://finowings.com/SME-IPO/" class="dropdown-item">SME IPOs</a>
                      <a href="https://finowings.com/IPO/" class="dropdown-item">Main Board IPOs</a>                       
                    </div>
                </div>-->
				<!--<a href="https://finowings.com/mutual-fund.php" class="nav-item nav-link">Mutual Fund</a>-->
    
				<!-- Simple Links (Active Now) -->
				<a href="https://finowings.com/mutual-fund.php" class="nav-item nav-link <?php echo ($active_page == 'mutual-fund') ? 'active' : ''; ?>">Mutual Fund</a>
				<a href="https://finowings.com/financial-products/credit-cards/" class="nav-item nav-link <?php echo ($active_page == 'credit-cards') ? 'active' : ''; ?>">Credit Cards</a>
				
				<!-- DROPDOWN VERSION - Uncomment when NFO/Loan pages are ready
				<div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo ($active_page == 'mutual-fund') ? 'active' : ''; ?>" data-bs-toggle="dropdown">Mutual Fund</a>
                    <div class="dropdown-menu fade-down m-0">
					  <a href="https://finowings.com/mutual-fund.php" class="dropdown-item">Mutual Funds</a>
                      <a href="https://finowings.com/NFO/" class="dropdown-item">NFO</a>
                    </div>
                </div>
				
				<div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo ($active_page == 'credit-cards') ? 'active' : ''; ?>" data-bs-toggle="dropdown">Credit Cards</a>
                    <div class="dropdown-menu fade-down m-0">
					  <a href="https://finowings.com/financial-products/credit-cards/" class="dropdown-item">Credit Card</a>
                      <a href="https://finowings.com/financial-products/personal-loan.php" class="dropdown-item">Loan</a>
                    </div>
                </div>
				END DROPDOWN VERSION -->
				
				<div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo ($active_page == 'tools') ? 'active' : ''; ?>" data-bs-toggle="dropdown">Tools</a>
                    <div class="dropdown-menu fade-down m-0">
					  <a href="https://finowings.com/financial-calculators/" class="dropdown-item">Financial Calculators</a>                    
                    </div>
                </div>
					
				<!--<a href="https://finowings.com/financial-products/personal-loan.php" class="nav-item nav-link">Loan</a>-->
				
				 <!--<div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Events</a>
                    <div class="dropdown-menu fade-down m-0">
					  <a href="https://finowings.com/financial-freedom-conclave/" class="dropdown-item">Financial Freedom Conclave 2022</a>
                        
                    </div>
                </div>-->
				
				
				
                <a href="https://finowings.com/contact-us.php" class="nav-item nav-link <?php echo ($active_page == 'contact') ? 'active' : ''; ?>">Contact</a>
				
            </div>
              <a href="https://finowings.com/demat-accounts.php" class="btn-demat py-3 px-lg-5 d-none d-lg-block"><span style="font-size: 18px; font-weight:bold;">Open Demat Account</span><i class="fa fa-arrow-right ms-3"></i><br />
            </a>
              <!-- <span style="font-size: 14px; font-weight:bold;">Learn Free Technical Analysis *</span>c -->
        </div>
		
    </nav>
    <!-- Navbar End -->
	
	