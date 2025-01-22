@extends('layout')

@section('title', 'Dance Training')

@section('content')

    <!-- Events Start -->
    <div class="container-fluid guide py-5">
        <div class="container py-5">
            <div class="pb-5">
                <div class="row g-4 align-items-end">
                    <div class="col-xl-12 col-12">
                        <h5 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Quality Assurance</h5>
                        <h2 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Your Complete Guide to Website QA
                            (Quality Assurance) with Free QA Checklist</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-12 d-flex">
                    <div class=" col-4 h-100">
                        <nav class="position-sticky" style="z-index: 1020; top:5rem;">
                            <h4 class="guide-sidebar-title pt-15">Quick Access</h4>
                            <ul class="guide-list">
                                <li><a href="#What-is-website-QA">What is website QA?</a></li>
                                <li><a href="#How-does-QA-differ-from-other-testing-types">How does QA differ from other testing types?</a></li>
                                <li><a href="#Why-is-it-important">Why is it important?</a></li>
                                <li><a href="#How-to-carry-out-website-QA-testing">How to carry out website QA testing</a></li>
                                <li><a href="#QA-best-practices">QA best practices</a></li>
                                <li><a href="#What-tools-can-you-use-for-your-website-QA">What tools can you use for your website QA?</a></li>
                                <li><a href="#Website-QA-checklist">Website QA checklist</a></li>
                                <li><a href="#In-conclusion">In conclusion</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-8">
                        <div class="feature-blog-three pr-0">
                            <div class="tab-content pl-0">
                                <div class="post-content post-content--en-US js-progress-reading">
                                            {{-- here were the Image  --}}
                                    <div class="post-import-seoptimer-en">
                                        <p>Your site needs to work like was intended to when you first built it. Otherwise, your users will end up losing trust in your brand, resulting in the loss of revenue and leads. 67% of consumers cite <a href="https://www.huffpost.com/entry/50-important-customer-exp_b_8295772">bad experiences</a> as reason for churn.&nbsp; <a href="http://www.huffingtonpost.com/vala-afshar/50-important-customer-exp_b_8295772.html">4% of customers</a> complain directly to a company about a poor experience, and 91% of unhappy customers will simply leave without voicing their complaints.</p>                                                    
                                        
                                        <p>The <a href="https://www.isixsigma.com/industries/software-it/defect-prevention-reducing-costs-and-enhancing-quality/">Systems Sciences Institute</a> at IBM has reported that “the cost to fix an error found after product release was four to five times as much as one uncovered during design, and up to 100 times more than one identified in the maintenance phase.”</p>
                                        <p>The <a href="https://www.capgemini.com/thought-leadership/world-quality-report-2016-17">World Quality Report</a> has recommended that companies keep the QA budget to 25% of development costs. Their universal recommendation comes from an understanding of what’s “reasonable” to maintain quality, security, and improve the customer experience while not bogging down the potential for new development.</p>
                                        <p>Whether your website is an affiliate website, local business, SaaS, or plain vanilla HTML site, when people see errors, they will happily click the back button and you’ll never see them again.</p>
                                        <p>With this article we will learn about the concept of site quality assurance, its importance, how it differs from testing, how to make sure that your site is high quality, some best practices to follow, and a QA checklist that you may adopt in order to make your work easier.</p>
                                        <p><a name="What-is-website-QA"></a></p>
                                        
                                        <h2 id="What-is-website-QA">What is website QA?</h2>
                                        <p>Website QA (Quality Assurance) can be defined as the process of testing a website in order to discover mistakes, errors or oversights that may not have been noted during web development or design before going live. It is also referred to as QA testing. Note that QA begins way earlier, even before development begins. It starts as soon as the requirements for the website are laid out and culminates in testing. Its overarching concern is the quality of the overall site, which goes far beyond just fixing <a href="https://en.m.wikipedia.org/wiki/Software_bug">bugs</a>.</p>
                                        <p><img alt="website testing" class="alignnone size-large wp-image-154203" height="512" loading="lazy" src="/storage/images/2020/01/website-testing.jpg" width="1024"><a name="How-does-QA-differ-from-other-testing-types"></a></p>
                                        <h2 id="How-does-QA-differ-from-other-testing-types">How does QA differ from other testing types?</h2>
                                        <p>Like we mentioned, QA is a process, not a one time task. Here is how it differs from other testing types:<br>
                                        <a name="QA-vs-user-testing"></a></p>
                                        <h3 id="QA-vs-user-testing">QA vs user testing</h3>
                                        <p>It is important to differentiate between quality assurance testing and user testing. Both may be aiming for the same goals (great <a href="https://en.wikipedia.org/wiki/User_experience">user experience</a> - UX and proper website functionality), but there are several differences between them.</p>
                                        <p>User testing is simply observing and analyzing how users actually use and interact with the website and their opinions on the experience that they get while using it. It also involves finding what is unclear and what may be confusing to the user. Ultimately, there is a comparison between the user experience and actual website usage and the developer’s, as well as the webmaster’s intended use and imagined user experience.</p>
                                        <p>QA differs from user testing in that it is done before the website is published, and that it is done by a QA tester (not users). The tester simulates different user actions on the site in order to see whether they work as intended.</p>
                                        <p>The two (QA and user testing) are however complementary, and the data or feedback collected from both processes is essential in ensuring the website works as intended and that UX standards have been achieved.<br>
                                        <a name="QA-vs-functional-testing"></a></p>
                                        <h3 id="QA-vs-functional-testing">QA vs functional testing</h3>
                                        <p>Functional testing can be defined as a QA process based on the specified design requirements of the particular component that is being tested. It involves entering, or feeding, input in and then analyzing the output.</p>
                                        <p>QA, on the other hand, is not limited to a particular component or specified design requirements. QA makes sure that the entire site is of good quality, from how it functions to how appealing it is to the user. It also incorporates testing before the site goes live.<br>
                                        <a name="QA-vs-requirements-testing"></a></p>
                                        <h3 id="QA-vs-requirements-testing">QA vs requirements testing</h3>
                                        <p>Requirements testing involves using client requirements and expectations to evaluate a site’s layout, prototype, or <a href="https://www.geeksforgeeks.org/difference-between-alpha-and-beta-testing/">alpha</a> version. QA comes in to breakdown user specifications and requirements as laid out in design documents approved by the client, as well as other requirements otherwise expressed. The specifications are then simplified and integrated into different development phases, and ultimately used in requirements testing.<br>
                                        <a name="QA-vs-design-testing"></a></p>
                                        <h3 id="QA-vs-design-testing">QA vs design testing</h3>
                                        <p>Design testing examines how the site looks and feels. QA comes in to check whether the look and feel is in line with the documented layout and design.<br>
                                        <a name="Other-testing-types"></a></p>
                                        <h3 id="Other-testing-types">Other testing types:</h3>
                                        <p><strong>Regression testing</strong> - evaluating whether making changes in your site affects other parts of the site. It checks whether any changes to the code, for example, breaks the site.</p>
                                        <p><strong>Integration testing</strong> - this is testing whether third party services or sources are working as expected when integrated with your site. These services may include APIs.</p>
                                        <p><strong>Performance testing</strong> - this tests whether the site can handle traffic spikes and surges. This test may also include how fast the site loads.</p>
                                        <p>There are many more tests that you could do on your QA testing. Learn more about <a href="https://www.guru99.com/web-application-testing.html">website test types</a> here.</p>
                                        <p><a name="Why-is-it-important"></a></p>
                                        <h2 id="Why-is-it-important">Why is it important?</h2>
                                        <p>Website QA is geared towards ensuring that the web site’s user interface (UI) functions as intended (there are no bugs). It also makes sure that great user experience is achieved. Here are the other benefits of QA testing:</p>
                                        <p>&nbsp;</p>
                                        <ul>
                                            <li><strong>Showcases your brand as reputable</strong>. When everything on your site works like it should, customers associate your brand with excellence. They will, therefore, want to buy your products, pay for your services, and be associated with your brand.</li>
                                            <li><strong>It could reveal problems that may have dire consequences,</strong> for example, a critical security vulnerability.</li>
                                            <li><strong>Allows for the delivery of a reliable site</strong>. You are sure about how your site will perform, so there are minimal concerns about inconsistencies.</li>
                                            <li><strong>It ultimately saves the business money and time</strong> that would have been lost in fixing bugs long after the site has been published. It is also cheaper to fix a bug before the site is published than after. There will be no users affected, you will have no need to for your customer support to explain to users why the site does not work as expected, and you will not need to ‘shut down the site’ for fixes, losing traffic and business.</li>
                                        </ul>
                                        <p><a name="How-to-carry-out-website-QA-testing"></a></p>
                                        <h2 id="How-to-carry-out-website-QA-testing">How to carry out website QA testing</h2>
                                        <p>QA is no mean feat. Time and money need to be invested in order to make sure that a high-quality site is delivered to the users. Depending on the site’s complexity and project specifics, QA may need up to 50% of the budget allocation.</p>
                                        <p>In order to effectively carry out website QA, you need to define a process that will be followed throughout the testing phase. This process is commonly referred to as the QA process flow. The process flow breaks down the amount of time needed per testing phase, depending on the budget available and priority.</p>
                                        <p><img alt="strategy" class="alignnone size-large wp-image-154223" height="576" loading="lazy" src="/storage/images/2020/01/strategy.jpg" width="1024"><br>
                                        <a name="Factors-to-consider-when-designing-a-QA-process-flow"></a></p>
                                        <h3 id="Factors-to-consider-when-designing-a-QA-process-flow">Factors to consider when designing a QA process flow</h3>
                                        <p>There are several factors that you need to consider when designing a QA process flow. These include:<br>
                                        <a name="Audience"></a></p>
                                        <h4 id="Audience"><strong>Audience</strong></h4>
                                        <p>Before you even start thinking about the site, you need to think about who you are building it for. This will help you define the correct platforms that your audience uses the most. And this will come in handy to narrow down the testing environments, for example, the browsers to use and devices to test.<br>
                                        <a name="Application-type"></a></p>
                                        <h4 id="Application-type"><strong>Application type</strong></h4>
                                        <p><img alt="mobile testing" class="alignnone size-large wp-image-154205" height="512" loading="lazy" src="/storage/images/2020/01/mobile-testing.jpg" width="1024"></p>
                                        <p>You need to factor in the type of application that you are testing, as the testing approaches differ depending on the type of site. Is your site static or dynamic? Will you be testing a mobile site?</p>
                                        <p><a name="Test-specificity"></a></p>
                                        <h4 id="Test-specificity"><strong>Test specificity</strong></h4>
                                        <p>The test needs to be well defined and described, and cover one scenario with the outcome being clearly defined. Define the assumptions and preconditions. Use as much ‘real data’ (one that is as close to user input as possible) as you can.</p>
                                        <p><a name="Risk-level"></a></p>
                                        <h4 id="Risk-level"><strong>Risk level</strong></h4>
                                        <p>Are you building a high or low-risk site? The level of risk here is determined by site functionality and industry. For example, if your site collects user information, then you need to test that the information entered is correct. Moreover, you need to test for the information’s privacy. If financial transactions are carried out through your site, then you need to thoroughly test for security.</p>
                                        <p>On the other hand, for a static site, the emphasis should be on the UI (user interface) and functionality.</p>
                                        <p><a name="Estimated-number-of-users"></a></p>
                                        <h4 id="Estimated-number-of-users"><strong>Estimated number of users</strong></h4>
                                        <p>Working with an estimated number of users helps with performance testing. This checks the stress and load (or the traffic) the site can handle at once during a spike in traffic.</p>
                                        <p><a name="Tools-to-use"></a></p>
                                        <h4 id="Tools-to-use"><strong>Tools to use</strong></h4>
                                        <p>You need to think about the testing tools that you will use. You may need to use different tools for different testing types or phases. You may need different tools for cross-browser testing and others for performance testing. Determine how much automation you need to use. You may use tools that automate parts of your testing, for example, such as the CloudQA tool that automates regression testing.</p>
                                        <p><a name="The-platform-the-site-is-accessed-on"></a></p>
                                        <h4 id="The-platform-the-site-is-accessed-on"><strong>The platform the site is accessed on</strong></h4>
                                        <p>If the site is meant to be accessed on various platforms or browsers, you need to factor in cross-platform testing.</p>
                                        <p><a name="QA-best-practices"></a></p>
                                        <h2 id="QA-best-practices">QA best practices</h2>
                                        <p>There are a number of things that you need to do in order to implement your QA process flow effectively. In this section we look at QA best practices:</p>
                                        <ul>
                                            <li>Define the users who will be using the end product.</li>
                                            <li>Follow your checklist for every testing phase or type.</li>
                                            <li>Test using a <a href="https://wpengine.com/resources/what-is-a-staging-site-why-have-one/">staging site</a>&nbsp; (a site that simulates the real site).</li>
                                            <li>Schedule the amount of time each testing phase needs to take.</li>
                                            <li>Test as early as possible - test new features as soon as they are added.</li>
                                            <li>Use an <a href="https://www.seamgen.com/blog/agile-qa-process/">agile QA</a> approach (test at the end of different stages of development).</li>
                                            <li>Prioritize bug fixes, depending on how critical they are to your site’s functionality.</li>
                                            <li>Automate where possible, especially the high risk parts of the site. Do not ‘over-automate’, though. Prioritize testing the parts where automation would fit best.</li>
                                            <li>Strive to establish a collaborative approach between your QA team and the design/development team.</li>
                                            <li>Create a site <a href="https://www.mindmapping.com/mind-map.php">mind map</a>, a visual that will help you see your site’s structure in order to get an idea of the scope of work and identify the parts that you need to prioritize.</li>
                                        </ul>
                                        <p><a name="What-tools-can-you-use-for-your-website-QA"></a></p>
                                        <h2 id="What-tools-can-you-use-for-your-website-QA">What tools can you use for your website QA?</h2>
                                        <p><img alt="tools" class="alignnone size-large wp-image-154220" height="576" loading="lazy" src="/storage/images/2020/01/tools.png" width="1024"></p>
                                        <p>QA can be a daunting process if done manually. As we already mentioned, you need to automate where necessary and where possible. It is easy to test your site on your browser and PC and think that it will look great and perform as expected on all browsers and devices, and that users will intuitively know what to do. You may need to use a set of tools to help you test different phases of your QA process. Here are the tools that you can use to make your QA testing easier:<br>
                                        <a name="TestRail"></a></p>
                                        <h3 id="TestRail">TestRail</h3>
                                        <p><a href="https://www.gurock.com/testrail">TestRail</a> is completely web-based testing software with real-time insights to help you track your progress. You can use it in the cloud or download it. The tool easily integrates with test automation tools.<br>
                                        <a name="CrossBrowserTesting"></a></p>
                                        <h3 id="CrossBrowserTesting">CrossBrowserTesting</h3>
                                        <p>This <a href="https://crossbrowsertesting.com/">cloud-based tool</a> is used to run tests on both mobile and desktop browsers. Over 2050 browsers are available for testing. It will come in handy for compatibility and regression testing. Comes with a free trial.<br>
                                        <a name="Web-Developer-Form-Filler"></a></p>
                                        <h3 id="Web-Developer-Form-Filler">Web Developer Form Filler</h3>
                                        <p>If you use any forms on your site, even if they are as simple as a contact form, you need to test whether the form allows only the specified type of user input, whether it submits the correct information, or even whether the information shared (especially if it is personal user information)&nbsp; is shown on the browser URL. Check out the <a href="https://chrome.google.com/webstore/detail/web-developer-form-filler/gbagmkohmhcjgbepncmehejaljoclpil?hl=en">chrome extension form filler</a>.</p>
                                        <p>The Web Developer Form Filler tool lets you test out a form’s functionality. All you need to do is fill out the values that you want in your input fields, and the tool will then automatically fill it in for you. This way, you can test your forms faster.<br>
                                        <a name="Ranorex-Webtestit"></a></p>
                                        
                                        <h3 id="Ranorex-Webtestit">Ranorex Webtestit</h3>
                                        
                                        <p>This tool is ideal for UI testing across browsers and Operating Systems (Mac, Android, Windows, and Linux). With <a href="https://www.ranorex.com/webtestit/">Ranorex</a>, you can do all the tests on your local PC or Desktop. It comes with a free trial and built-in test reporting.<br>
                                        <a name="Window-Resizer"></a></p>
                                        
                                        <h3 id="Window-Resizer">Window Resizer</h3>
                                        
                                        <p><a href="https://chrome.google.com/webstore/detail/window-resizer/kkelicaakdanhinjdeammmilcgefonfh?hl=en">Window Resizer</a> is a Chrome Extension that helps you visualize how your site looks at different window sizes. This tool allows you to test the most commonly used sizes for both desktop and mobile. You can also add custom screen sizes. The tool gives you insight on content that should be <a href="https://www.abtasty.com/blog/above-the-fold/">above the fold</a>, and suggestions to make your screen look better on different screen sizes.<br>
                                        <a name="CloudQA"></a></p>
                                        
                                        <h3 id="CloudQA">CloudQA</h3>
                                        
                                        <p><a href="https://cloudqa.io/">CloudQA</a> tool is fit for use by all levels of testers, even those without technical development or design skills. You can use it for regression testing and it gives instant feedback. It’s able to run hundreds of tests at the same time across browsers. Their pricing model is that you only pay for what you use. You can even use the tool as a browser extension to help you record your tests.<br>
                                        <a name="SEOptimer"></a></p>
                                        
                                        <h3 id="SEOptimer">SEOptimer</h3>
                                        
                                        <p>This tool comes in handy for SEO testing. It does a site audit to help you identify what you are doing right when it comes to SEO, and the aspects that need improvement in order to see your site rank better in search engine results.</p>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <p>It is simple to use, even if you don’t have much SEO knowledge. It gives you an update of your site’s performance and allows you to customize your report to suit your brand. You also get to choose the language that you want your report to be in.</p>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <p>It is also integrated with CRMs like MailChimp and Salesforce for better lead management.</p>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <p><a name="Website-QA-checklist"></a></p>
                                        
                                        <h2 id="Website-QA-checklist">Website QA checklist</h2>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <p>In this section, we explore a checklist that you can use when carrying out your site QA. Here is a summary:</p>
                                        
                                        <p><img alt="website testing" class="alignnone size-full wp-image-154156" height="286" loading="lazy" src="/storage/images/2020/01/image1.png" width="768"></p>
                                        
                                        <p><a href="https://geteasyqa.com/qa/test-website/">Image source</a><br>
                                        <a name="Functional-testing"></a></p>
                                        
                                        <h3 id="Functional-testing">Functional testing</h3>
                                        
                                        <p>Here, you test your site’s features. It is easier to test these if you have a mindmap that breaks down how your site should work and look. Even if you don’t have a mind map, here are the aspects to look out for:</p>
                                        
                                        <p><a name="Dropdowns-buttons-checkboxes-input-fields-and-forms"></a></p>
                                        
                                        <h4 id="Dropdowns-buttons-checkboxes-input-fields-and-forms"><strong>Dropdowns, buttons, checkboxes, input fields and forms</strong></h4>
                                        
                                        <p>Check that these work as intended. That they actually collect the correct type of information, and submit it (for forms) or direct people appropriately. Your form validation should include:</p>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <ul>
                                            <li>Mandatory fields cannot be left empty.</li>
                                            <li>Placeholder text to make it easier for users to visualize the type of content that you would like them to fill in, in addition to clear instructions on the kind of input that you expect from them, for example, passwords with at least 8 characters, with digits, capital letters, and special characters.</li>
                                            <li>That the collected information is securely stored (passwords are encrypted for example before being stored in the database).</li>
                                        </ul>
                                        
                                        <p><a name="Your-sites-process-flow"></a></p>
                                        
                                        <h4 id="Your-sites-process-flow"><strong>Your site’s process flow</strong></h4>
                                        
                                        <p>What is the user’s journey through your site? Do you have an ideal journey that they should take? Most user journeys begin with the homepage. If you sell clothes, for example, the user journey might be from the:</p>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <p><em>home page &gt;&gt; categories &gt;&gt; particular product &gt;&gt; add to cart &gt;&gt;sign up &gt;&gt; checkout</em></p>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <p>Is that the journey that your users actually take? Or do they drop off as soon as they reach ‘sign up’? What does that say about where ‘sign up’ should be in the site process?</p>
                                        
                                        <p><a name="Links"></a></p>
                                        
                                        <h4 id="Links"><strong>Links</strong></h4>
                                        
                                        <p><img alt="broken link checker seoptimer" class="alignnone size-large wp-image-154216" height="104" loading="lazy" src="/storage/images/2020/01/broken-link-checker-seoptimer-1.png" width="1024"></p>
                                        
                                        <p>Check that all links are working and are directing people to the intended locations. A tool to check for broken links will come in handy here. Make sure that they are no <a href="https://www.seoptimer.com/blog/find-all-pages-on-a-website/">dead-end pages</a> (pages with no calls to actions or links to other pages - they do not tell users what to do next) and that email links do send emails to the correct recipients.</p>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <p>Read our article on <a href="https://www.seoptimer.com/blog/broken-links/">Broken Links</a> to learn more on how you can fix them.</p>
                                        
                                        <p><a name="Cookies"></a></p>
                                        
                                        <h4 id="Cookies"><strong>Cookies</strong></h4>
                                        
                                        <p>Cookies are created by a browser when you visit a site. They contain information like user preferences and their login status. Here’s what your QA should check for when it comes to cookies:</p>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <ul>
                                            <li>That they are not active after the set ‘expiry’ period.</li>
                                            <li>That they are encrypted before being saved on a user’s device.</li>
                                            <li>That they function properly - to do this, test when cookies are enabled vis-a-vis when disabled.</li>
                                            <li>Their impact on your site’s security - delete them and check how this affects your site’s security.</li>
                                        </ul>
                                        
                                        <p><a name="Other-functional-tests"></a></p>
                                        
                                        <h4 id="Other-functional-tests"><strong>Other functional tests</strong></h4>
                                        
                                        <ul>
                                            <li>Check for syntax errors.</li>
                                            <li>Check for the existence of a sitemap, and whether it is accurately implemented.</li>
                                        </ul>
                                        
                                        <p><a name="Performance-testing"></a></p>
                                        
                                        <h3 id="Performance-testing">Performance testing</h3>
                                        
                                        <p><img alt="checking your webpage speed" class="alignnone size-large wp-image-109287" height="574" loading="lazy" src="/storage/images/2019/07/image13.png" width="1024"></p>
                                        
                                        <p>Here, you test whether your site is able to handle heavy spikes in traffic and still perform as intended. Here is what to look out for:</p>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <p>How the site performs during:</p>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <ul>
                                            <li>Spikes in traffic (stress testing).</li>
                                            <li>Increasing workload (load testing).</li>
                                            <li>Normal workload (stability testing).</li>
                                            <li>Multiple user logins (concurrency testing).</li>
                                            <li>An increase in database data volume (volume testing).</li>
                                            <li>A continuous increase in workload (endurance testing).</li>
                                        </ul>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <p>Other performance tests:</p>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <ul>
                                            <li>Page load speed (how much time does it take for your site to load). A <a href="https://www.seoptimer.com/">performance testing tool</a> would come in handy here.</li>
                                            <li>How your site performs when the user has a slow internet connection.</li>
                                        </ul>
                                        
                                        <p><a name="Security-testing"></a></p>
                                        
                                        <h3 id="Security-testing">Security testing</h3>
                                        
                                        <p class="post-image-caption"><img alt="security testing" class="size-large wp-image-154208" height="279" loading="lazy" src="/storage/images/2020/01/SiteInMaintenanceModewithXSS-e1578436140553.png" width="1024"> <a href="https://www.wordfence.com/blog/2019/11/high-severity-vulnerability-patched-in-wp-maintenance-plugin/">Image Source</a></p>
                                        
                                        <p>Here is what to check for in terms of security:</p>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <ul>
                                            <li>Can passwords be ‘cracked’?</li>
                                            <li>Are users redirected to encrypted SSL pages?</li>
                                            <li>Do your forms have <a href="https://www.pandasecurity.com/mediacenter/panda-security/what-is-captcha/">captchas</a>? Are they working as expected?</li>
                                            <li>Can a user login without a password or with a wrong password?</li>
                                            <li>Authorization - only authorized users can access particular parts of the site.</li>
                                            <li>Are restricted files only downloadable by authorized and accessible users?</li>
                                            <li>Authentication - only a verified user is allowed to login and then access certain parts or features on your site (here is a <a href="http://www.differencebetween.net/technology/difference-between-authentication-and-authorization/">difference between authentication and authorization</a>).</li>
                                            <li>Is a user session terminated if it takes a particular time, for example, a payment that takes more than 10 minutes?</li>
                                            <li>You can also define what a security breach would look like and simulate it to see how your site would handle it (penetration testing).</li>
                                        </ul>
                                        
                                        <p><a name="Compatibility-testing"></a></p>
                                        
                                        <h3 id="Compatibility-testing">Compatibility testing</h3>
                                        
                                        <p><img alt="CSS CODE" class="alignnone size-large wp-image-154204" height="512" loading="lazy" src="/storage/images/2020/01/CSS-CODE.jpg" width="1024"></p>
                                        
                                        <p>Your users will access your site on different devices and platforms - browsers and operating systems. Here you can check how your site looks and performs across different devices and platforms. You should check:</p>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <ul>
                                            <li>How do the images look?</li>
                                            <li>Is your NAP (site’s or business name, address and phone number) easily accessible?</li>
                                            <li>Responsiveness (does it look good on mobile vs desktop/pc? On different screen sizes? Does the user have adequate space to click on the links and buttons? - remember that on a smaller screen, the user will touch a button to ‘click’ it. Are the items on your site well spaced on smaller screens?</li>
                                            <li>Does your site look great and perform as expected on different browsers and screen resolutions?</li>
                                        </ul>
                                        
                                        <p><a name="Content-testing"></a></p>
                                        
                                        <h3 id="Content-testing">Content testing</h3>
                                        
                                        <p><img alt="seoptimer crawl report" class="alignnone size-large wp-image-154214" height="596" loading="lazy" src="/storage/images/2020/01/Crawl-Report-for-https-www-visualcv-com-1-e1578436094384.png" width="1024"></p>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <p>Here, you evaluate your site’s content. This test will be more helpful if you have already defined your audience.</p>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <ul>
                                            <li>That colors used match.</li>
                                            <li>That the font sizes used are ideal.</li>
                                            <li>That the information flows logically.</li>
                                            <li>Do you have pages with <a href="https://contentmarketinginstitute.com/2019/10/thin-content/">thin content</a>?</li>
                                            <li>Does your content meet user intent?</li>
                                            <li>Check for typos and grammatical errors.</li>
                                            <li>That images are optimized with alt tags.</li>
                                            <li>Does it incorporate your primary keyword?</li>
                                            <li>Is the most important information displayed first?</li>
                                            <li>That no dummy content is still present on the site.</li>
                                            <li>That the content meant to be above the fold is displayed in the correct location.</li>
                                            <li>Check for images and videos. Are they well displayed? Do they have any copyright infringement?</li>
                                        </ul>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <p>Use our website QA checklist for your needs, and add to your own checklist and customize it as you see fit.<br>
                                        <a name="In-conclusion"></a></p>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <h2 id="In-conclusion">In conclusion</h2>
                                        
                                        <p>&nbsp;</p>
                                        
                                        <p>Website QA is a process that begins when the site requirements are laid out, and continues even after the site has been launched and it is in use. Things that need to be fixed will continue to crop up over time, so it is important to routinely test your site. It is important to define and layout the QA process before testing begins, in order to make testing easier, more focused and insightful. Lastly, log the bugs and store them for future reference when you begin to fix the bugs or errors encountered.</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Events End -->

@endsection
