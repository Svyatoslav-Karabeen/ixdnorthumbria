<?php
/**
 * ABOUT PAGE >> Content
 *
 * This is the actual content to display information about our course on
 * about page
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 3.0
 * @since 2.0
 *
 **==========================================================================**/

global $pageTitle;

$tutorNames = array(
    'Prof Mark Blythe'      => 'Professor in Interdisciplinary Design',
    'Prof Gilbert Cockton'  => 'Head of Visual Communications',
    'Dr Stephen Gibson'     => 'Reader in Innovative Digital Media',
    'Mr Trevor Sewell'      => 'Senior Lecturer',
    'Mr Jamie Steane'       => 'Associate Professor',
    'Dr Joyce Yee'          => 'Associate Professor',
    'Mr John Vines'         => 'Professor of Design',
);

/**==========================================================================**/
?>

    <main>
        <div id="intro-container">
            <div class="intro-wrapper">
                <h1>About Interaction Design <span>course</span></h1>
                <p>This is how our journey into design world began</p>
            </div>
        </div>

        <div id="paragraphs-container">
            <div class="section-wrapper">
                <div class="section-title">
                    <h2>About the course</h2>
                </div>

                <div class="section-content">
                    <p>Interaction Design offers the opportunity to learn industry standard skills and techniques to excel in your chosen area. During your time on the course, you will learn highly-relevant and contemporary skills in web design, phone and tablet applications, experience design, game design, tangible interfaces, interactive installations and much more. </p>
                    <p>The programme has a national and international reputation for producing innovative and highly creative designers who go on to make a big impact within the international design and business sector. Through project-based briefs with international corporations such as Intel, Microsoft, Ericsson, Orange, and Unilever, you will develop a network of contacts as well as knowledge, work-based experience and practical skills to step confidently into this dynamic world.</p>
                </div>
            </div>

            <div class="section-wrapper">
                <div class="section-title">
                    <h2>Directions</h2>
                </div>

                <div class="section-content">
                    <div class="subsection-content">
                        <h3 class="subsection-title">App</h3>
                        <p>From user researching and generating ideas, to formulating wireframes and bringing designs to life through prototypes, application design explores a full range of creative techniques. The application projects don’t just feature great visuals, they are created in a way to enhance a user’s experience, ensuring that the applications serve a purpose.</p>
                    </div>

                    <div class="subsection-content">
                        <h3 class="subsection-title">Hybrid</h3>
                        <p>Our hybrid projects feature a wide variety of digital projects. Creating exciting projects from physical interfaces, to voice assistants and wearables. We do it all. </p>
                    </div>

                    <div class="subsection-content">
                        <h3 class="subsection-title">Experiential</h3>
                        <p>Looking more towards physical products and user interaction, our experiential projects create a truly unique experience. Working with the latest technology such as VR (Virtual Reality) and AR (Augmented Reality), it allows us to keep on top of industry standards.</p>
                    </div>
                </div>
            </div>

            <div class="section-wrapper">
                <div class="section-title">
                    <h2>Collaborative projects with industry</h2>
                </div>

                <div class="section-content">
                    <p>From leading roles in industry to internationally renowned research, our teaching team bring a wealth of experience to the course. We have extensive industry contacts across creative agencies, interactive design agencies and game design studios, many of whom have been involved in shaping the course. </p>
                    <p>Throughout your time on the course, you will work on live projects with companies and agencies from a range of different sectors such as the health sector, the banking sector and many more. The live projects you work on can allow you to network and form connections with companies for when you’re ready to start your journey in the industry.</p>
                    <p>This year’s graduating students worked with the Department for Work Pensions, UsTwo, Atom Bank, Hedgehog Lab, SageOne and others. The current second year group has worked with Guerrilla Communication and Komodo Digital.</p>

                    <div class="company-logos-wrapper">

                        <?php

                            $companyLogo = glob('../assets/img/company-*.png');

                            foreach ($companyLogo as $logo){
                                echo '<img class="company-logo" src="' . $logo . '" alt="' . basename($logo, '.png') . '">';
                            }
                        ?>

                    </div>
                </div>
            </div>

            <div class="section-wrapper">
                <div class="section-title">
                    <h2>Course tutors</h2>
                </div>

                <div class="section-content">
                    <div class="tutors-cards-wrapper">

                        <?php

                            foreach ($tutorNames as $name => $title) {
                                $imgLink = explode(' ', $name);

                                echo '<div class="single-tutor-card">';
                                    echo '<img class="tutor-photo" src="../assets/img/tutor-' . $imgLink[1] . '.jpg" alt="' . $name . '">';
                                    echo '<span class="tutor-name">' . $name . '</span>';
                                    echo '<span class="tutor-title">' . $title . '</span>';
                                echo '</div>';

                            };
                        ?>

                    </div>
                </div>
            </div>

            <div class="section-wrapper">
                <div class="section-title">
                    <h2>Contacts</h2>
                </div>

                <div class="section-content">
                    <p>If you would like to get recommendations or have any questions just <a href="mailto:imdreveal@gmail.com" target="_blank">email us</a> and we will be happy to help.</p>
                </div>
            </div>

        </div>
    </main>
