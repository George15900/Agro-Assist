<?php
include ("header.php");
?>
<br>
<div class="container-fluid d-flex align-items-center justify-content-center" style="min-height: 80vh; background: linear-gradient(135deg, #f0f8f0 0%, #e8f5e9 100%); position: relative; overflow: hidden;">
    
    <div style="position: absolute; top: 10%; left: 10%; width: 150px; height: 150px; background: rgba(74,127,41,0.1); border-radius: 50%; animation: float 6s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: 15%; right: 15%; width: 200px; height: 200px; background: rgba(255,193,7,0.1); border-radius: 50%; animation: float 8s ease-in-out infinite 2s;"></div>
    <div style="position: absolute; top: 50%; left: 5%; width: 100px; height: 100px; background: rgba(45,80,22,0.1); border-radius: 50%; animation: float 7s ease-in-out infinite 1s;"></div>

    <div class="row justify-content-center w-100" style="position: relative; z-index: 1;">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="text-center p-5 bg-white shadow-lg" style="border-radius: 25px; border-top: 5px solid #4a7f29; animation: slideUp 0.8s ease-out;">
                
                
                <div class="mb-4" style="animation: pulse 2s ease-in-out infinite;">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 120px; height: 120px; background: linear-gradient(135deg, #4a7f29 0%, #2d5016 100%); box-shadow: 0 10px 30px rgba(74,127,41,0.3);">
                        <i class="fas fa-hourglass-half text-warning" style="font-size: 3.5rem; animation: rotate 3s linear infinite;"></i>
                    </div>
                </div>

                <!-- Main Heading -->
                <h1 class="display-5 fw-bold mb-3" style="color: #2d5016; letter-spacing: 1px;">
                    Verification Pending
                </h1>

                <!-- Divider -->
                <div style="width: 80px; height: 4px; background: linear-gradient(to right, #4a7f29, #ffc107); margin: 0 auto 30px;"></div>

                <!-- Message -->
                <p class="lead mb-4" style="color: #555; line-height: 1.8;">
                    Thank you for registering with <strong class="text-success">AgroAssist</strong>! 
                    Your account is currently under review by our admin team.
                </p>

                <!-- Info Box -->
                <div class="alert alert-info d-flex align-items-start text-start shadow-sm" style="border-radius: 15px; border-left: 4px solid #0dcaf0; background: #e7f6fd;">
                    <i class="fas fa-info-circle text-info fs-3 me-3 mt-1"></i>
                    <div>
                        <h6 class="fw-bold mb-2">What happens next?</h6>
                        <ul class="mb-0 ps-3" style="font-size: 0.95rem;">
                            <li>Our team will verify your details within <strong>24-48 hours</strong></li>
                            <li>You'll receive an email notification once approved</li>
                            <li>After approval, you can access all features</li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Support -->
                <div class="mt-4 p-3" style="background: #f8f9fa; border-radius: 15px;">
                    <p class="mb-2 fw-semibold" style="color: #2d5016;">
                        <i class="fas fa-headset text-success me-2"></i>Need Help?
                    </p>
                    <a href="mailto:support@agroassist.com" class="text-success text-decoration-none fw-bold" style="transition: all 0.3s;" onmouseover="this.style.color='#2d5016'" onmouseout="this.style.color='#198754'">
                        support@agroassist.com
                    </a>
                    <span class="mx-2">|</span>
                    <a href="tel:+918875651423" class="text-success text-decoration-none fw-bold" style="transition: all 0.3s;" onmouseover="this.style.color='#2d5016'" onmouseout="this.style.color='#198754'">
                        +91 8875651423
                    </a>
                </div>

                <!-- Action Buttons -->
                <div class="mt-4 d-flex gap-3 justify-content-center flex-wrap">
                    <a href="index.php" class="btn btn-outline-success px-4 py-2 fw-bold" style="border-radius: 50px; border-width: 2px; transition: all 0.3s;" onmouseover="this.style.backgroundColor='#4a7f29'; this.style.color='#fff'; this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 20px rgba(74,127,41,0.3)'" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#198754'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                        <i class="fas fa-home me-2"></i>Back to Home
                    </a>
                    <a href="../logout.php" class="btn btn-warning px-4 py-2 fw-bold shadow-sm" style="border-radius: 50px; transition: all 0.3s;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 20px rgba(255,193,7,0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 5px rgba(0,0,0,0.1)'">
                        <i class="fas fa-sign-out-alt me-2"></i>Logout
                    </a>
                </div>

                <!-- Loading Animation -->
                <div class="mt-4">
                    <div class="d-flex justify-content-center align-items-center gap-2">
                        <div class="spinner-grow spinner-grow-sm text-success" role="status" style="animation-delay: 0s;">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow spinner-grow-sm text-warning" role="status" style="animation-delay: 0.15s;">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow spinner-grow-sm text-success" role="status" style="animation-delay: 0.3s;">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <small class="text-muted d-block mt-2">Processing your verification...</small>
                </div>

            </div>
        </div>
    </div>
</div>

<style>
    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-20px);
        }
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }

    @keyframes rotate {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
</style>

<?php
include ("footer.php");
?>