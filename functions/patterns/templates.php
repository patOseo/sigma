<?php

// Register patterns
function sigma_register_templates_patterns() {
	register_block_pattern(
	    'sigma/assessment-cat',
	    array(
	        'title'       => __( 'Assessment Category Template', 'sigma' ),
	        'categories'  => array('templates'),
	        'content'     => '<!-- wp:acf/header {"name":"acf/header","data":{"bg_img":4938,"_bg_img":"field_650b146f0c88e"},"mode":"preview"} -->
            <!-- wp:group {"style":{"color":{"background":"#0000004d"}},"className":"w-100 py-5 text-center text-white"} -->
            <div class="wp-block-group w-100 py-5 text-center text-white has-background" style="background-color:#0000004d"><!-- wp:post-title {"level":1,"className":"mb-1 text-uppercase text-white text-shadow display-3"} /--></div>
            <!-- /wp:group -->
            <!-- /wp:acf/header -->
            
            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:yoast-seo/breadcrumbs /-->
            
            <!-- wp:heading {"textColor":"sigmagreen"} -->
            <h2 class="wp-block-heading has-sigmagreen-color has-text-color">BRING YOUR LEADERSHIP TO LIFE.</h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
            <p>Put our science-based leadership assessments to work to uncover the potential in your people and your organization.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph -->
            <p>Leadership competencies and characteristics can often be hard to see on the surface. At SIGMA, we help organizations measure these qualities as well as other leadership traits and skills that make individuals successful leaders. By utilizing our assessments, you\'ll be able to identify the leadership strengths and developmental opportunities of existing and prospective leaders in your organization.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:heading {"textColor":"sigmagreen"} -->
            <h2 class="wp-block-heading has-sigmagreen-color has-text-color">SIGMA’s Leadership Assessments</h2>
            <!-- /wp:heading -->
            
            <!-- wp:acf/assessments-feed {"name":"acf/assessments-feed","data":{"select_mode":"1","_select_mode":"field_65118cc70b0b3","select_category":"6","_select_category":"field_65118d4807727"},"mode":"preview"} /-->
            
            <!-- wp:heading {"textColor":"sigmagreen"} -->
            <h2 class="wp-block-heading has-sigmagreen-color has-text-color">Why Use Leadership Assessments?</h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
            <p>Leadership assessments are powerful tools for&nbsp;<a href="https://www.sigmaassessmentsystems.com/talent-development/">talent development</a>. They are also incredibly versatile. Leadership assessments can be used to:</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:list -->
            <ul><!-- wp:list-item -->
            <li>Recognize talent</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>Uncover potential</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>Inform hiring and promotion</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>Identify strengths</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>Identify opportunities for growth</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>Increase self-awareness</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>Provide a foundation for talent development programs</li>
            <!-- /wp:list-item --></ul>
            <!-- /wp:list -->
            
            <!-- wp:paragraph -->
            <p>There are many benefits to using leadership assessments to support the processes listed above. Some of those benefits include increased employee engagement, increased job satisfaction, stronger internal talent pools, decreased turnover, and improved company culture. But these benefits only apply when the assessment is valid and reliable. SIGMA’s assessments are. Each of our assessments has been scientifically developed and industry tested. That means you can trust your results and be confident that you are getting the most out of your leadership assessment.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:heading {"textColor":"sigmagreen"} -->
            <h2 class="wp-block-heading has-sigmagreen-color has-text-color">Leadership Assessment FAQs</h2>
            <!-- /wp:heading -->
            
            <!-- wp:acf/accordion {"name":"acf/accordion","data":{"html_tag":"p","_html_tag":"field_651083d95f171","one_item":"1","_one_item":"field_6510c3bdb9257","include_icons":"0","_include_icons":"field_6510cac51a576","accordion_0_title":"What are leadership assessments?","_accordion_0_title":"field_65108359b0ffe","accordion_0_content":"Leadership assessments are tools that can be used to objectively evaluate leaders on competencies and characteristics that are hard to quantify, and may be hard to see on a surface level.","_accordion_0_content":"field_6510c30e2506c","accordion_1_title":"Who should use leadership development assessments?","_accordion_1_title":"field_65108359b0ffe","accordion_1_content":"Leadership assessments should be used by organizations that want to foster leadership development and further their \u003ca href=\u0022https://www.sigmaassessmentsystems.com/succession/\u0022\u003esuccession planning\u003c/a\u003e and talent development efforts.","_accordion_1_content":"field_6510c30e2506c","accordion_2_title":"What do leadership assessments measure?","_accordion_2_title":"field_65108359b0ffe","accordion_2_content":"Leadership tests can measure a multitude of items including personality, behaviour, leadership skills, work styles, occupational stress, and more.","_accordion_2_content":"field_6510c30e2506c","accordion_3_title":"What makes a good leadership assessment?","_accordion_3_title":"field_65108359b0ffe","accordion_3_content":"The best leadership assessments are valid, reliable, and objective. They also use continuous measures, which provide a range of results, rather than grouping test takers into particular categories. Strong leadership assessments should also provide actionable insights that can be used as a starting point in the leadership development process.","_accordion_3_content":"field_6510c30e2506c","accordion":4,"_accordion":"field_65108333b0ffd"},"mode":"preview"} /-->
            
            <!-- wp:spacer {"height":"40px"} -->
            <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            
            <!-- wp:group {"className":"py-6","layout":{"type":"constrained"}} -->
            <div class="wp-block-group py-6"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"15%"} -->
            <div class="wp-block-column" style="flex-basis:15%"></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"70%"} -->
            <div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"textAlign":"center","textColor":"sigmadarkgreen"} -->
            <h2 class="wp-block-heading has-text-align-center has-sigmadarkgreen-color has-text-color"><strong>Let us help you leverage your people to maximize your company.</strong></h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">Contact us today to learn more about our suite of leadership development assessments.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"className":"mt-3"} -->
            <div class="wp-block-button mt-3"><a class="wp-block-button__link wp-element-button" href="/contact/">CONTACT US</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"15%"} -->
            <div class="wp-block-column" style="flex-basis:15%"></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->',
	    )
	);
    register_block_pattern(
	    'sigma/assessment-single',
	    array(
	        'title'       => __( 'Single Assessment Page', 'sigma' ),
	        'categories'  => array('templates'),
	        'content'     => '<!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"75%"} -->
            <div class="wp-block-column" style="flex-basis:75%"><!-- wp:paragraph -->
            <p><img width="150" height="79" srcset="https://www.sigmaassessmentsystems.com/wp-content/uploads/2019/10/LSP-R_SIGMA-300pxh-300x158.png 300w, https://www.sigmaassessmentsystems.com/wp-content/uploads/2019/10/LSP-R_SIGMA-300pxh.png 570w" src="https://www.sigmaassessmentsystems.com/wp-content/uploads/2019/10/LSP-R_SIGMA-300pxh-300x158.png" alt="LSP-R Icon"></p>
            <!-- /wp:paragraph -->
            
            <!-- wp:heading -->
            <h2 class="wp-block-heading">What is the LSP-R™ Focus?</h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
            <p>The Leadership Skills Profile-Revised (LSP-R) Focus is a personality-based leadership skills assessment that is useful for guiding employee and leader development efforts. The LSP-R Focus is built on years of rigorous development efforts and validation research. When paired with the&nbsp;<a href="https://www.sigmaassessmentsystems.com/benchmarking-lsp-r/" target="_blank" rel="noreferrer noopener">benchmarking option</a>, it provides a flexible experience, allowing you to choose which leadership traits to include in your report. As a result, you get a customizable test that provides personalized advice for test-takers. Our user-friendly report will guide leaders to focus development efforts on those competencies that have the greatest potential to become strengths.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:heading -->
            <h2 class="wp-block-heading">Who Should Use the LSP-R Focus?</h2>
            <!-- /wp:heading -->
            
            <!-- wp:list -->
            <ul><!-- wp:list-item -->
            <li>Leaders or potential leaders who would like to gain insight into their current strengths and development opportunities</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>Organizations looking to incorporate a scientifically valid assessment with their existing strategic or HR policies, including talent management programs, high-potential development plans, or succession planning processes</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>Managers and HR professionals who want to provide focus and structure to their leadership development and executive coaching programs</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>For more information about who should consider using the LSP-R, read our blog on&nbsp;<a href="https://www.sigmaassessmentsystems.com/personality-tests-in-the-workplace/" target="_blank" rel="noreferrer noopener">Personality Tests and Their Role in the Workplace</a>, and&nbsp;<a href="https://www.sigmaassessmentsystems.com/why-are-leadership-assessments-important/" target="_blank" rel="noreferrer noopener">Why Are Leadership Assessments Important?</a></li>
            <!-- /wp:list-item --></ul>
            <!-- /wp:list -->
            
            <!-- wp:heading -->
            <h2 class="wp-block-heading">Why Should I Use The LSP-R Focus?</h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
            <p><strong>Convenient Administration.</strong>&nbsp;The LSP-R can be completed in 25 minutes on SIGMA’s online platform, with reports available immediately upon completion. When paired with the benchmarking option, this leadership skills assessment tool allows you to identify in advance those leadership competencies that are most critical for effectiveness in your organization and generate a report that includes information on only those competencies.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph -->
            <p><strong>User-Friendly Report.</strong>&nbsp;The LSP-R Focus Report gives a snapshot of scores on all 50 competencies in SIGMA’s&nbsp;<a href="https://www.sigmaassessmentsystems.com/competency-framework/" target="_blank" rel="noreferrer noopener">Leadership Competency Framework</a>. It highlights which competencies are optimal for development, while remaining flexible enough for leaders to choose their own priorities. This report includes an easy-to-use development guide to support either self-directed or coaching-augmented leadership development.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph -->
            <p><strong>Powerful and Robust</strong>. The LSP-R uses the latest science on leadership theory and personality measurement to provide your organization with a valid, reliable measurement of leadership potential. The LSP-R’s 50 leadership skills are sorted into four broad categories, allowing you to not only consider potential on individual competencies, but also review scores on Cognitive, Interpersonal, Personal, and Senior Leadership Skills. The LSP-R can also be paired with SIGMA’s&nbsp;<a href="https://www.sigmaassessmentsystems.com/individual-groups/" target="_blank" rel="noreferrer noopener">coaching services</a>. We offer individual coaching, group coaching, and team training in the form of&nbsp;<a href="https://www.sigmaassessmentsystems.com/lunch-and-learn/">Lunch and Learns</a>. You will also receive access to development tools and other supporting resources, such as SIGMA’s&nbsp;<a href="https://www.sigmaassessmentsystems.com/leadership-skill-development-series/" target="_blank" rel="noreferrer noopener">Leadership Series</a>.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph -->
            <p><strong>Superior Development.</strong>&nbsp;The LSP-R items were carefully chosen from a pool of over 4,700 personality items, drawing on content from three of SIGMA’s seminal assessments: the Personality Research Form (PRF), Jackson Personality Inventory-Revised (JPIR), and Survey of Work Styles (SWS). For more information about the LSP-R’s development and validation take a look at the&nbsp;<a href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2019/10/2019-10-16-LSP-R-Introduction-to-the-Leadership-Skills-Profile-Revised.pdf" target="_blank" rel="noreferrer noopener">Psychometric Summary</a>, or read our blog,&nbsp;<a href="https://www.sigmaassessmentsystems.com/do-leadership-assessments-work/">Do Leadership Assessments Work?</a></p>
            <!-- /wp:paragraph -->
            
            <!-- wp:heading -->
            <h2 class="wp-block-heading">Pricing</h2>
            <!-- /wp:heading -->
            
            <!-- wp:table {"className":"is-style-regular"} -->
            <figure class="wp-block-table is-style-regular"><table><thead><tr><th><strong>Leadership Skills Profile – Revised FOCUS</strong></th><th>US Pricing</th><th>Canadian Pricing</th></tr></thead><tbody><tr><td>Available for online administration and scoring. Includes: <br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-sigmadarkgreen-color">• </mark>1 LSP-R test administration; <br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-sigmadarkgreen-color">• </mark>1 LSP-R Focus Report; <br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-sigmadarkgreen-color">• </mark>SigmaTesting.com account set-up; and<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-sigmadarkgreen-color">•</mark> Technical support</td><td>$126</td><td>$137</td></tr></tbody></table></figure>
            <!-- /wp:table -->
            
            <!-- wp:heading -->
            <h2 class="wp-block-heading">Looking for More? Check Out Our Free Resources:</h2>
            <!-- /wp:heading -->
            
            <!-- wp:list -->
            <ul><!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/assessments/leadership-skills-profile-revised-focus/administrator-guide/" target="_blank" rel="noreferrer noopener">Administrator’s Guide</a></li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/06/LSP-R-for-Team-Building-1.pdf" target="_blank" rel="noreferrer noopener">LSP-R for Teambuilding</a>&nbsp;(slide deck)</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/assessments/leadership-skills-profile-revised-focus/psychometric-summary/">LSP-R Psychometric Summary</a></li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/09/Step-by-Step-Guide-to-the-LSP-R-Focus-Report.pdf" target="_blank" rel="noreferrer noopener">Step-by-Step Guide to the LSP-R Focus Report</a></li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/09/How-to-Use-the-LSP-R-to-Assess-Leadership-Across-Cultures.pdf" target="_blank" rel="noreferrer noopener">How to Use the LSP-R Across Cultures</a></li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/09/Using-the-LSP-R-to-Interpret-Leadership-Scores-Across-Cultures.pdf" target="_blank" rel="noreferrer noopener">How to Interpret LSP-R Results Across Cultures</a></li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/09/How-to-Use-the-LSP-R-in-Business-Schools.pdf" target="_blank" rel="noreferrer noopener">How to Use the LSP-R in Business Schools</a>&nbsp;(<a href="https://www.sigmaassessmentsystems.com/contact/" target="_blank" rel="noreferrer noopener">contact us</a>&nbsp;for PPT session slides)</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/09/How-to-Use-the-LSP-R-in-HR-Programs.pdf" target="_blank" rel="noreferrer noopener">How to Use the LSP-R in HR Programs</a>&nbsp;(<a href="https://www.sigmaassessmentsystems.com/contact/" target="_blank" rel="noreferrer noopener">contact us</a>&nbsp;for PPT session slides)</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/09/How-to-Plan-for-Succession-with-the-LSP-R.pdf" target="_blank" rel="noreferrer noopener">How to Plan for Succession with the LSP-R</a></li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/09/How-to-Use-the-LSP-R-to-Develop-Large-Groups-on-a-Small-Budget.pdf" target="_blank" rel="noreferrer noopener">How to Develop Large Groups on a Small Budget Using the LSP-R</a></li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/09/How-to-Measure-Leadership-Using-the-LSP-R.pdf" target="_blank" rel="noreferrer noopener">How to Measure Leadership Using the LSP-R</a></li>
            <!-- /wp:list-item --></ul>
            <!-- /wp:list -->
            
            <!-- wp:heading -->
            <h2 class="wp-block-heading">Get Certified</h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
            <p>The LSP-R is a powerful assessment that can be used in a variety of contexts. In order to get the most out of your assessment, it is important to establish a deep understanding of its features and applications. Our interactive certification program is designed to equip you with just that. We’ll teach you how to understand, interpret, and communicate the results of the LSP-R. Download the program summary below.&nbsp;<a href="https://www.sigmaassessmentsystems.com/contact/" target="_blank" rel="noreferrer noopener">Contact us</a>&nbsp;if you’re interested!</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"lightestgrey"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-lightestgrey-background-color has-background wp-element-button" href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/09/LSP-R-Certification-Program-1-Pager.pdf" target="_blank" rel="noreferrer noopener">Download LSP-R Certification Information</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons -->
            
            <!-- wp:heading {"textColor":"sigmagreen"} -->
            <h2 class="wp-block-heading has-sigmagreen-color has-text-color"><strong>Ready to start developing your leaders</strong>?</h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
            <p>Ordering the LSP-R online is a quick and easy process. Complete an application form below to get approval for your online account. Once approved, you will receive an email with your login information. From there, you may log in, purchase the leadership development profile test, and begin administration immediately. If you have questions or need more information, please&nbsp;<a href="https://www.sigmaassessmentsystems.com/contact/" target="_blank" rel="noreferrer noopener">contact us</a>. Our customer service team will get back to you within 24 to 48 hours.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"sigmablue"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-sigmablue-background-color has-background wp-element-button" href="http://sigmatesting.com/isapi/stregister.dll" target="_blank" rel="noreferrer noopener">Complete the Application Form</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"25%"} -->
            <div class="wp-block-column" style="flex-basis:25%"><!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"mb-3"} -->
            <div class="wp-block-button has-custom-width wp-block-button__width-100 mb-3"><a class="wp-block-button__link wp-element-button" href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2023/07/Assessment-Order-Form_Fillable.pdf" target="_blank" rel="noreferrer noopener">ORDER ONLINE</a></div>
            <!-- /wp:button -->
            
            <!-- wp:button {"width":100} -->
            <div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="/contact/">CONTACT US</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->',
	    )
	);

    register_block_pattern(
	    'sigma/assessment-internal',
	    array(
	        'title'       => __( 'Internal Assessment Page', 'sigma' ),
	        'categories'  => array('templates'),
	        'content'     => '<!-- wp:paragraph -->
            <p>The LCIA-360 is designed&nbsp;to provide you with feedback on your leadership character based on multiple perspectives. The report provides information on your self-ratings on a series of character dimensions and elements, and compares&nbsp;these&nbsp;with ratings collected from leaders, colleagues, direct/indirect reports, and other relevant raters. The&nbsp;LCIA–360&nbsp;report also contains specific comments from your raters designed to facilitate your character development.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
            <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"width":"25%"} -->
            <div class="wp-block-column" style="flex-basis:25%"><!-- wp:image {"sizeSlug":"large"} -->
            <figure class="wp-block-image size-large"><img src="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/08/LCIA-360-Report.jpg" alt=""/></figure>
            <!-- /wp:image --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:heading {"textColor":"sigmadarkgreen"} -->
            <h2 class="wp-block-heading has-sigmadarkgreen-color has-text-color"><strong>LCIA-360 Report Contents</strong></h2>
            <!-- /wp:heading -->
            
            <!-- wp:list -->
            <ul><!-- wp:list-item -->
            <li>Page 3 – Nature &amp; Importance of Leadership Character&nbsp;</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>Page 6 – LCIA Results Overview&nbsp;</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>Page 10 – Detailed Character Profile&nbsp;</li>
            <!-- /wp:list-item --></ul>
            <!-- /wp:list -->
            
            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2015/02/LCIA-360-Sample-Report.pdf" target="_blank" rel="noreferrer noopener">Download</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->
            
            <!-- wp:acf/accordion {"name":"acf/accordion","data":{"advanced_mode":"1","_advanced_mode":"field_65171a64c3ce4"},"mode":"preview"} -->
            <!-- wp:acf/accordion-item {"name":"acf/accordion-item","data":{"item_title":"Nature \u0026 Importance of Leadership Character","_item_title":"field_65171fbb08aae","title_html_tag":"h4","_title_html_tag":"field_65171ff7c29c1","icon":"","_icon":"field_65172f70ac10f"},"mode":"preview"} -->
            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
            <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"sizeSlug":"large"} -->
            <figure class="wp-block-image size-large"><img src="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/08/Leadership-Character.jpg" alt=""/></figure>
            <!-- /wp:image --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"66.66%"} -->
            <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
            <p><br>This section provides information about the nature of leadership character, including its constituent dimensions and elements. This section also explains why character is essential for effective leadership and organizational performance.&nbsp;</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->
            <!-- /wp:acf/accordion-item -->
            
            <!-- wp:acf/accordion-item {"name":"acf/accordion-item","data":{"item_title":"LCIA Results Overview","_item_title":"field_65171fbb08aae","title_html_tag":"h4","_title_html_tag":"field_65171ff7c29c1","icon":"","_icon":"field_65172f70ac10f"},"mode":"preview"} -->
            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
            <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"sizeSlug":"large"} -->
            <figure class="wp-block-image size-large"><img src="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/08/ResultsOverview.jpg" alt=""/></figure>
            <!-- /wp:image --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"66.66%"} -->
            <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
            <p>The Character Snapshot provides an overview of your results on each character dimension. The snapshot compares your own rating on each dimension with the average rating provided by all of your raters. Use this section to quickly identify both your strengths and areas for development.&nbsp;</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph -->
            <p>The Character Summary summarizes your results on each element grouped according to its corresponding dimension. Your self assessment on each element&nbsp;is compared with your average rating. Use this information to dig deeper on dimensional scores and identify which&nbsp;elements that reflect strengths and which ones present opportunities for development.</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->
            <!-- /wp:acf/accordion-item -->
            
            <!-- wp:acf/accordion-item {"name":"acf/accordion-item","data":{"item_title":"Detailed Character Profile","_item_title":"field_65171fbb08aae","title_html_tag":"h4","_title_html_tag":"field_65171ff7c29c1","icon":"","_icon":"field_65172f70ac10f"},"mode":"preview"} -->
            <!-- wp:paragraph -->
            <p>Keep in mind that character is formed through experience. Over time, the way we respond to these experiences becomes habitual, and those habits build character. Because of this, there are opportunities for character development available all the time in everyday life. In the LCIA-360 report, SIGMA offers developmental exercises you can use to begin developing your leader character today. However, there are also plenty of opportunities to begin developing character in other areas of life: work, home, friendships, etc. For example, reflecting about why you might be impatient, excessive, or careless in any of these areas provides the raw material for examining and developing your character in action.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph -->
            <p>Although the LCIA-360 report describes each dimension of character, your associated score, and how you can develop it, we continually reinforce the point that the dimensions support one another and are interdependent. Therefore, exercises to develop Courage, for example, also bring with them opportunities to develop the other dimensions since you need to exercise Judgment about what you are doing and perhaps exercise some Temperance and Accountability in the process.</p>
            <!-- /wp:paragraph -->
            <!-- /wp:acf/accordion-item -->
            <!-- /wp:acf/accordion -->
            
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"className":"py-6","layout":{"type":"constrained"}} -->
            <div class="wp-block-group py-6" style="padding-top:0;padding-bottom:0"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
            <div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:column {"width":"15%"} -->
            <div class="wp-block-column" style="flex-basis:15%"></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"70%"} -->
            <div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"textAlign":"center","textColor":"sigmadarkgreen"} -->
            <h2 class="wp-block-heading has-text-align-center has-sigmadarkgreen-color has-text-color"><strong>Get Practical Insights with the LCIA</strong></h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">To gain access to a customized version of this report and more, order the LCIA online today or&nbsp;contact us to learn more&nbsp;about our&nbsp;<a href="https://www.sigmaassessmentsystems.com/assessments-category/leadership-development/" target="_blank" rel="noreferrer noopener">leadership development assessments</a>.&nbsp;</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"className":"mt-3"} -->
            <div class="wp-block-button mt-3"><a class="wp-block-button__link wp-element-button" href="https://www.sigmaassessmentsystems.com/assessments/leadership-character-insight-assessment/">LCIA ASSESSMENT</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"15%"} -->
            <div class="wp-block-column" style="flex-basis:15%"></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group -->',
	    )
	);
}
add_action( 'init', 'sigma_register_templates_patterns' );