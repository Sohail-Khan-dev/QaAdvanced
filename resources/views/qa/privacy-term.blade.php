@extends('layout')

@section('title', 'Privacy & Terms')

<style>
    .terms-container {
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
    .terms-container h1 {
        font-size: 2.5rem;
        color: var(--bs-primary);
        margin-bottom: 1.5rem;
        font-weight: 700;
        letter-spacing: 1px;
    }
    .terms-container h2 {
        color: var(--bs-secondary);
        margin-top: 2rem;
        font-size: 1.4rem;
        font-weight: 600;
    }
    .terms-container p, .terms-container ul {
        font-size: 1.08rem;
        line-height: 1.7;
        margin-bottom: 1.1rem;
        color: var(--bs-dark);
    }
    .terms-container ul {
        padding-left: 1.5rem;
    }
    .terms-container ul li {
        margin-bottom: 0.5rem;
        color: var(--bs-dark);
    }
    .terms-container h1::after {
        content: '';
        display: block;
        width: 60px;
        height: 4px;
        background: var(--bs-secondary);
        border-radius: 2px;
        margin: 18px 0 0 0;
    }
    @media (max-width: 600px) {
        .terms-container {
            padding: 1.2rem 0.5rem;
            margin-top: 2.5rem;
        }
        .terms-container h1 {
            font-size: 2rem;
        }
    }
</style>

@section('content')
    <div class="terms-container">
        <h1>Privacy Policy & Terms of Service</h1>
        <p>Welcome to our platform. By accessing or using this website, you agree to comply with and be bound by the following privacy terms and conditions. Your trust is our top priority, and we are committed to safeguarding your privacy and ensuring the highest standards of quality assurance in our software and services.</p>

        <h2>Commitment to Quality Assurance</h2>
        <p>We are dedicated to delivering reliable, secure, and high-quality software. Our Quality Assurance (QA) process includes:</p>
        <ul>
            <li>Rigorous testing at every stage of development to ensure functionality, security, and performance.</li>
            <li>Continuous monitoring and improvement based on user feedback and industry best practices.</li>
            <li>Compliance with international standards for software quality and data protection.</li>
            <li>Regular audits and code reviews to maintain the integrity and reliability of our platform.</li>
        </ul>

        <h2>Use of the Website</h2>
        <p>The content and features of this website are provided for your general information and use. We reserve the right to update or modify content at any time to enhance your experience and maintain quality standards.</p>

        <h2>Privacy</h2>
        <p>Your privacy is important to us. We collect and process your data in accordance with our Privacy Policy, which outlines how we handle your information, your rights, and our data protection measures. Please review our Privacy Policy for more details.</p>

        <h2>Data Security</h2>
        <p>We implement advanced security protocols and encryption to protect your personal data from unauthorized access, alteration, or disclosure. Our team regularly reviews and updates our security practices to address emerging threats.</p>

        <h2>Governing Law</h2>
        <p>These terms and conditions are governed by and construed in accordance with the laws of QA Advance. You irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>

        <h2>Changes to Terms</h2>
        <p>We may update our Privacy Policy & Terms of Service periodically. Any changes will be posted on this page, and we encourage you to review them regularly to stay informed.</p>

        <p style="font-size:0.98rem;color:#888;">These terms and conditions were last updated on October 1, 2023.</p>
    </div>
@endsection