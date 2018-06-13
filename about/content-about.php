<?php
/**
 * ABOUT PAGE >> CONTENT
 * This is the template that displays information about our course on about page
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 1.1
 **/

// include_once '../config.php';
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

$tutorLinks = array(
    'Prof Mark Blythe'      => 'mark',
    'Prof Gilbert Cockton'  => 'gilbert',
    'Dr Stephen Gibson'     => 'steve',
    'Mr Trevor Sewell'      => 'trev',
    'Mr Jamie Steane'       => 'jamie',
    'Dr Joyce Yee'          => 'joyce',
    'Mr John Vines'         => 'john',
);

/**==========================================================================**/
?>

    <main>
        <div class="headings">
            <h1 class="heading-main">our course</h1>
            <h2 class="heading-caption">how we felt our journey through Interaction Design</h2>
        </div>
        <div class="content">
            <div class="section section-course">
                <div class="section-title">
                    about the course
                </div>
                <div class="section-content">
                    <p>This course offers you an opportunity to study and develop the necessary professional skills and confidence to work as a sought-after interaction designer, while recognising the need for your individual growth. You will learn highly relevant and contemporary skills in web design, phone and tablets applications, experience design, game design, tangible interfaces and interactive installations.</p>
                    <p>Our programme has a national and international reputation for producing innovative and highly creative designers who go on to make directional contributions within the international design and business arena. Through project-based briefs with international corporations such as Intel, Microsoft, Ericsson, Oranfe and Unilever, you will develop a network of contacts as well as knowledge, work-based experience and practical skills to step confidently into this dynamic world.</p>
                </div>
            </div>
            <div class="section section-directions">
                <div class="section-title">
                    directions
                </div>
                <div class="section-content">
                    <div class="content-subsection">
                        <span class="subsection-title">App</span>
                        <p>description about app design related modules</p>
                    </div>
                    <div class="content-subsection">
                        <span class="subsection-title">Hybrid</span>
                        <p>description about hybrid design related modules</p>
                    </div>
                    <div class="content-subsection">
                        <span class="subsection-title">Experiental</span>
                        <p>description about exoeriental design related modules</p>
                    </div>
                </div>
            </div>
            <div class="section section-collaborations">
                <div class="section-title">
                    collaborative projects with industry
                </div>
                <div class="section-content">
                    <p>From leading roles in industry to internationally renowned research, our teaching team bring a wealth of experience to the course. You will be able to draw from the expertise of lecturers who are actively involved in projects that range from avatars and the digital revolution and smart environments and digital branding. Our academics also take leading roles in groups such as the Arts and Humanities Research Council, the Economic and Social Research Council and have chaired numerous conferences within the industry.</p>
                    <p>We have extensive industry contacts across creative agencies, interactive design agencies and game design studios, many of whom have been involved in shaping the course. In addition, industry contacts act as clients for the majority of module projects, which enables you to build your network whilst you study.</p>
                    <div class="content-logos-wrapper">
                        <img class="logo-item" src="" alt="">
                        <img class="logo-item" src="" alt="">
                        <img class="logo-item" src="" alt="">
                        <img class="logo-item" src="" alt="">
                    </div>
                </div>
            </div>
            <div class="section section-tutors">
                <div class="section-title">
                    tutors
                </div>
                <div class="section-content">
                    <div class="content-tutors-wrapper">
                        <?php
                            foreach ($tutorLinks as $name => $link) {
                                echo '<div class="tutor-item">';
                                echo '<img class="tutor-photo" src="' . url . 'assets/img/tutor-' . $link . '.jpg" alt="' . $name . '">';
                                echo '<span class="tutor-name">' . $name . '</span>';
                                echo '<span class="tutor-title">' . $tutorNames[$name] . '</span>';
                                echo '</div>';
                            };
                        ?>
                    </div>
                </div>
            </div>
            <div class="section section-contacts">
                <div class="section-title">
                    contacts
                </div>
                <div class="section-content">
                    <p>you can contact us in some way (email?) ....</p>
                </div>
            </div>
        </div>
    </main>
