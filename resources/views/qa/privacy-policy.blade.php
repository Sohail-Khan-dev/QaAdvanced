@extends('layout')

@section('title', 'Privacy Policy')
<style>
    .privacy-policy {
        max-width: 900px;
        margin: auto;
        margin-top: 6rem;
        background: var(--bs-white);
        border-radius: 16px;
        box-shadow: 0 4px 24px rgba(0,0,0,0.08);
        padding: 2.5rem 2rem 2rem 2rem;
        font-family: 'Segoe UI', 'Roboto', Arial, sans-serif;
        color: var(--bs-dark);
        border: 1px solid var(--bs-light);
    }
    .privacy-policy h1 {
        font-size: 2.5rem;
        color: var(--bs-primary);
        margin-bottom: 1.5rem;
        font-weight: 700;
        letter-spacing: 1px;
    }
    .privacy-policy h2 {
        color: var(--bs-secondary);
        margin-top: 2rem;
        font-size: 1.4rem;
        font-weight: 600;
    }
    .privacy-policy p, .privacy-policy ul {
        font-size: 1.08rem;
        line-height: 1.7;
        margin-bottom: 1.1rem;
        color: var(--bs-dark);
    }
    .privacy-policy ul {
        padding-left: 1.5rem;
    }
    .privacy-policy ul li {
        margin-bottom: 0.5rem;
        color: var(--bs-dark);
    }
    .privacy-policy h1::after {
        content: '';
        display: block;
        width: 60px;
        height: 4px;
        background: var(--bs-secondary);
        border-radius: 2px;
        margin: 18px 0 0 0;
    }
    @media (max-width: 600px) {
        .privacy-policy {
            padding: 1.2rem 0.5rem;
            margin-top: 2.5rem;
        }
        .privacy-policy h1 {
            font-size: 2rem;
        }
    }
</style>
@section('content')
    <div class="privacy-policy">
        <h1>Privacy Policy</h1>
        <p>Effective date: October 1, 2023</p>
        <p>Welcome to our Privacy Policy page! When you use our web services, you trust us with your information. This Privacy Policy is meant to help you understand what data we collect, why we collect it, and what we do with it. This is important; we hope you will take time to read it carefully. Remember, you can find controls to manage your information and protect your privacy and security. We’ve tried to keep it as simple as possible.</p>
        
        <h2>Information We Collect</h2>
        <p>We collect information to provide better services to all our users – from figuring out basic stuff like which language you speak, to more complex things like which ads you’ll find most useful, the people who matter most to you online, or which YouTube videos you might like.</p>
        
        <h2>How We Use Information We Collect</h2>
        <p>We use the information we collect from all our services to provide, maintain, protect and improve them, to develop new ones, and to protect our users. We also use this information to offer you tailored content – like giving you more relevant search results and ads.</p>
        
        <h2>Transparency and Choice</h2>
        <p>People have different privacy concerns. Our goal is to be clear about what information we collect, so that you can make meaningful choices about how it is used. For example, you can:</p>
        <ul>
            <li>Review and update your Google activity controls to decide what types of data you would like saved with your account when you use Google services.</li>
            <li>Review and control certain types of information tied to your Google Account by using Google Dashboard.</li>
            <li>View and edit your preferences about the Google ads shown to you on Google and across the web, such as which categories might interest you, using Ads Settings.</li>
        </ul>
        
        <h2>Information You Share</h2>
        <p>Many of our services let you share information with others. Remember that when you share information publicly, it may be indexable by search engines, including Google. Our services provide you with different options on sharing and removing your content.</p>
        
        <h2>Accessing and Updating Your Personal Information</h2>
        <p>Whenever you use our services, we aim to provide you with access to your personal information. If that information is wrong, we strive to give you ways to update it quickly or to delete it – unless we have to keep that information for legitimate business or legal purposes. When updating your personal information, we may ask you to verify your identity before we can act on your request.</p>
        
        <h2>Information We Share</h2>
        <p>We do not share personal information with companies, organizations and individuals outside of Google unless one of the following circumstances applies:</p>
        <ul>
            <li>With your consent</li>
            <li>For external processing</li>
            <li>For legal reasons</li>
        </ul>
        
        <h2>Compliance and Cooperation with Regulatory Authorities</h2>
        <p>We regularly review our compliance with our Privacy Policy. We also adhere to several self-regulatory frameworks. When we receive formal written complaints, we will contact the person who made the complaint to follow up. We work with the appropriate regulatory authorities, including local data protection authorities, to resolve any complaints regarding the transfer of personal data that we cannot resolve with our users directly.</p>
        
        <h2>Changes</h2>
        <p>Our Privacy Policy may change from time to time. We will not reduce your rights under this Privacy Policy without your explicit consent. We will post any privacy policy changes on this page and, if the changes are significant, we will provide a more prominent notice (including, for certain services, email notification of privacy policy changes).</p>

        <h2>Software Quality and Security Policy</h2>
        <p>We are committed to delivering high-quality, secure, and reliable software solutions. Our software quality policy includes:</p>
        <ul>
            <li>Adhering to industry best practices and international standards for software development and data protection.</li>
            <li>Implementing rigorous quality assurance (QA) processes, including code reviews, automated and manual testing, and continuous integration.</li>
            <li>Regularly updating our systems to address security vulnerabilities and improve performance.</li>
            <li>Ensuring that all team members are trained in secure coding practices and data privacy requirements.</li>
            <li>Maintaining clear documentation and audit trails for all software releases and updates.</li>
            <li>Promptly responding to and investigating any reported security incidents or software defects.</li>
        </ul>
        <h2>User Responsibilities</h2>
        <p>To help us maintain a secure and high-quality environment, users are expected to:</p>
        <ul>
            <li>Use strong, unique passwords and keep them confidential.</li>
            <li>Report any suspected vulnerabilities, bugs, or security incidents to our support team immediately.</li>
            <li>Refrain from attempting to access or modify system components or data without authorization.</li>
            <li>Comply with all applicable laws and regulations regarding the use of our services.</li>
        </ul>
        <h2>Data Retention and Deletion</h2>
        <p>We retain personal data only as long as necessary to fulfill the purposes outlined in this policy or as required by law. Users may request deletion of their data, subject to certain legal or business requirements. Upon receiving a valid request, we will securely delete or anonymize personal information in accordance with our data retention procedures.</p>
        <h2>Contact Us</h2>
        <p>If you have any questions, concerns, or requests regarding this Privacy Policy, our software quality practices, or your personal data, please contact our support team. We are committed to addressing your inquiries promptly and transparently.</p>
    </div>
@endsection
