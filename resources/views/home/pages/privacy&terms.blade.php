@extends('home.home_master')
@section('home')
<style>
    /* Basic Reset */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}


.legal-container {
    max-width: 90%;
    margin: 0 auto;
    background: #fff;
    padding: 60px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
}

.legal-header {
    border-bottom: 2px solid #eee;
    padding-bottom: 20px;
    margin-bottom: 40px;
}


.last-updated {
    color: #777;
    font-size: 0.9rem;
}

.tldr-box {
    background-color: #eef2ff;
    border-left: 4px solid #4f46e5;
    padding: 20px;
    margin-bottom: 40px;
    font-style: italic;
    color: #3730a3;
}

header h1{
    margin-top: 30px;
    margin-bottom: 15px;
    font-size: 3rem;
    color: #222;
}
h2 {
    margin-top: 30px;
    margin-bottom: 15px;
    font-size: 1.5rem;
    color: #222;
}

p {
    margin-bottom: 20px;
}

ul {
    margin-bottom: 20px;
    padding-left: 20px;
}

li {
    margin-bottom: 10px;
}

/* Mobile Friendly */
@media (max-width: 600px) {
    .legal-container {
        padding: 30px 20px;
    }
}
</style>


<div class="breadcrumb-wrapper light-bg">
    <div class="container">

      <div class="breadcrumb-content">
                        <h1>Privacy Policy</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><img src="{{ asset('frontend/assets/images/blog/right-arrow.svg') }}" alt="right-arrow"></li>
                <li aria-current="page">Privacy Policy</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- End breadcrumb -->

<main class="legal-container">
        
        <!-- PRIVACY POLICY SECTION -->
        <article>
            <header>
                <p class="last-updated">Last Updated: May 2026</p>
                <h1>Privacy Policy</h1>
            </header>

            <div class="tldr-box">
                <strong>Executive Summary:</strong> We collect only what we need to run our service. We don't sell your data, and we use industry-standard encryption to keep your info safe.
            </div>

            <section>
                <h2>1. Comprehensive Information Collection</h2>
                <p>We collect information in three ways: information you provide, information we get from your use of our services, and information from third parties.</p>
                <ul>
                    <li><strong>Direct Interaction:</strong> This includes your username, password, email, postal address, and phone number when you register for an account.</li>
                    <li><strong>Transaction Information:</strong> If you purchase a service, we collect transaction details, though credit card numbers are processed via encrypted third-party gateways.</li>
                    <li><strong>Log Data:</strong> Our servers automatically record information including your IP address, browser type, the webpage you were visiting before you came to our site, and search terms used.</li>
                    <li><strong>Device Information:</strong> We may collect info about the device you are using, including hardware model, operating system, and unique device identifiers.</li>
                </ul>
            </section>

            <section>
                <h2>2. Deep Dive: How We Use Data</h2>
                <p>We don't just "use" data; we use it to protect, maintain, and improve our ecosystem:</p>
                <ul>
                    <li><strong>Personalization:</strong> To provide tailored content, such as relevant search results or localized features based on your preferences.</li>
                    <li><strong>Communication:</strong> To send technical notices, security alerts, and administrative messages regarding your account status.</li>
                    <li><strong>Safety and Security:</strong> To investigate and prevent fraudulent transactions, unauthorized access, and other illegal activities that threaten our community.</li>
                    <li><strong>Analytics:</strong> To monitor and analyze trends, usage, and activities in connection with our Services to ensure we are building what users actually need.</li>
                </ul>
            </section>

            <section>
                <h2>3. Data Security and International Transfers</h2>
                <p>We use administrative, technical, and physical security measures to help protect your personal information. While we have taken reasonable steps to secure the personal information you provide to us, please be aware that despite our efforts, no security measures are perfect or impenetrable.</p>
                <p>Your information may be transferred to—and maintained on—computers located outside of your state or country where the data protection laws may differ from those in your jurisdiction. Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.</p>
            </section>

            <section>
                <h2>4. Children’s Privacy</h2>
                <p>Our services are not intended for use by children under the age of 13 (or 16 in certain jurisdictions). We do not knowingly collect personal information from children. If we become aware that a child has provided us with personal information, we take steps to delete such information immediately from our servers.</p>
            </section>
        </article>

        <hr class="section-divider">

        <!-- TERMS OF SERVICE SECTION -->
        <article>
            <header>
                <h1>Terms of Service</h1>
            </header>

            <section>
                <h2>5. Detailed User Obligations & Content</h2>
                <p>By accessing our site, you represent and warrant that you are at least 18 years of age and possess the legal authority to enter into this agreement.</p>
                <ul>
                    <li><strong>Account Responsibility:</strong> You are responsible for safeguarding the password that you use to access the Service and for any activities or actions under your password, whether your password is with our Service or a third-party service.</li>
                    <li><strong>User Content License:</strong> By posting content on our platform, you grant us a worldwide, non-exclusive, royalty-free license to use, copy, reproduce, process, adapt, modify, publish, and display that content in any and all media.</li>
                    <li><strong>Accuracy of Information:</strong> You agree to provide accurate, current, and complete information and to update such information to keep it accurate at all times.</li>
                </ul>
            </section>

            <section>
                <h2>6. Disclaimers and "As-Is" Clause</h2>
                <p>Your use of the Service is at your sole risk. The Service is provided on an "AS IS" and "AS AVAILABLE" basis. We expressly disclaim all warranties of any kind, whether express, implied or statutory, including, but not limited to the implied warranties of merchantability, fitness for a particular purpose, title, and non-infringement.</p>
                <p>We do not warrant that:</p>
                <ul>
                    <li>The service will function uninterrupted, secure, or available at any particular time or location.</li>
                    <li>Any errors or defects will be corrected.</li>
                    <li>The service is free of viruses or other harmful components.</li>
                </ul>
            </section>

            <section>
                <h2>7. Limitation of Liability and Indemnification</h2>
                <p>In no event shall our company, nor its directors, employees, or partners, be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from your access to or use of the service.</p>
                <p>You agree to defend, indemnify, and hold harmless our company from any claims, damages, obligations, losses, liabilities, costs, or debt arising from your use of the site or violation of these Terms.</p>
            </section>

            <section>
                <h2>8. Dispute Resolution</h2>
                <p>Any dispute arising from these terms shall be resolved through final and binding arbitration, rather than in court, except that you may assert claims in small claims court if your claims qualify. The Federal Arbitration Act and federal arbitration law apply to this agreement. There is no judge or jury in arbitration, and court review of an arbitration award is limited.</p>
            </section>

            <section>
                <h2>9. Contact and Feedback</h2>
                <p>We welcome your feedback. However, you agree that we may use any feedback, ideas, or suggestions you post in our forums or send to us without any restriction or obligation to compensate you. Any formal legal notices should be sent via email to <strong>legal@yourwebsite.com</strong>.</p>
            </section>
        </article>

        <footer>
            &copy; 2026 YourBrand Name. All rights reserved.
        </footer>
    </main>
</div>



@endsection