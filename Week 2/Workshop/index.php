
<?php
require_once "functions.php";

$courses = [
    [
        "title" => "Web Development",
        "description" => "Learn HTML, CSS and website development.",
        "image" => "https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=600&q=80",
        "alt" => "Programming on a computer",
        "category" => [
            "Level" => "Advanced",
            "Length" => "6 weeks"
        ]
    ],
    [
        "title" => "Business Studies",
        "description" => "Learn about business, management and entrepreneurship.",
        "image" => "https://i.insider.com/601448566dfbe10018e00c5d?width=825&format=jpeg",
        "alt" => "Business documents",
        "category" => [
            "Level" => "Beginner",
            "Length" => "5 weeks"
        ]
    ],
    [
        "title" => "Science",
        "description" => "Discover science, experiments and the world around you.",
        "image" => "https://images.unsplash.com/photo-1532094349884-543bc11b234d?auto=format&fit=crop&w=600&q=80",
        "alt" => "Science experiment",
        "category" => [
            "Level" => "Intermediate",
            "Length" => "8 weeks"
        ]
    ]
];

$beginnerCourses = getCoursesByLevel($courses, "Beginner");
$courseSummaries = getCourseSummaries($courses);
$totalWeeks = getTotalWeeks($courses);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Shlok Ghimire">
    <title>Learnora | Learn Something New</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <a href="#home" class="logo">Learn<span>ora.</span></a>

    <nav>
        <a href="#home">Home</a>
        <a href="#courses">Courses</a>
        <a href="#resources">Resources</a>
        <a href="#media">Media</a>
        <a href="#about">About</a>
    </nav>

    <a href="#courses" class="header-btn">Start Learning</a>
</header>

<main>

    <section class="hero" id="home">
        <div class="hero-content">
            <span class="tag">YOUR JOURNEY STARTS HERE</span>

            <h1>Learn Today.<br><span>Lead Tomorrow.</span></h1>

            <p>
                Explore exciting courses, discover helpful resources
                and build skills that prepare you for the future.
            </p>

            <a href="#courses" class="btn">Explore Courses →</a>
        </div>

        <div class="hero-image">
            <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFeXedUnKzuEoZH_HGuY9kgyhE1Akx4p7JKCTvDq8nhw&s=10"
                alt="Books in a library"
            >
        </div>
    </section>

    <section class="stats">
        <div>
            <h2>24/7</h2>
            <p>Learn Anytime</p>
        </div>

        <div>
            <h2>03</h2>
            <p>Learning Topics</p>
        </div>

        <div>
            <h2><?= count($courses) ?></h2>
            <p>Available Courses</p>
        </div>
    </section>

    <section class="section" id="courses">
        <div class="section-heading">
            <span class="tag">EXPLORE AND GROW</span>
            <h2>Discover Our Courses</h2>
            <p>Choose a subject and take the next step in your learning journey.</p>
        </div>

        <h3 class="subheading">Beginner Courses</h3>

        <div class="cards">
            <?php foreach ($beginnerCourses as $course): ?>
                <article class="course-card">
                    <img
                        src="<?= htmlspecialchars($course["image"]) ?>"
                        alt="<?= htmlspecialchars($course["alt"]) ?>"
                    >

                    <div class="card-content">
                        <span class="level">
                            <?= htmlspecialchars($course["category"]["Level"]) ?>
                        </span>

                        <h3><?= htmlspecialchars($course["title"]) ?></h3>

                        <p><?= htmlspecialchars($course["description"]) ?></p>

                        <div class="course-info">
                            <span>
                                <?= htmlspecialchars($course["category"]["Length"]) ?>
                            </span>

                            <a href="#resources">Explore Topic →</a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="overview">
        <div>
            <span class="tag">YOUR LEARNING PLAN</span>
            <h2>Course at a Glance</h2>
            <p>Get a quick look at the courses available on Learnora.</p>
        </div>

        <div class="overview-content">
            <ul>
                <?php foreach ($courseSummaries as $summary): ?>
                    <li><?= htmlspecialchars($summary) ?></li>
                <?php endforeach; ?>
            </ul>

            <div class="total-time">
                <span>Total Study Time</span>
                <strong><?= htmlspecialchars(formatDuration($totalWeeks)) ?></strong>
            </div>
        </div>
    </section>

    <section class="section" id="resources">
        <div class="section-heading">
            <span class="tag">KEEP EXPLORING</span>
            <h2>Learning Resources</h2>
            <p>Useful websites to help you learn beyond the classroom.</p>
        </div>

        <div class="resources">
            <article class="resource-card">
                <h3>HTML & CSS Notes</h3>
                <p>Learn the basics of building websites.</p>
                <a href="https://developer.mozilla.org/en-US/docs/Learn"
                   target="_blank" rel="noopener">Open Resource →</a>
            </article>

            <article class="resource-card">
                <h3>Study Skills Guide</h3>
                <p>Discover ways to improve your learning habits.</p>
                <a href="https://www.open.edu/openlearn/education-development"
                   target="_blank" rel="noopener">Open Resource →</a>
            </article>

            <article class="resource-card">
                <h3>Computer Science</h3>
                <p>Explore computing lessons and activities.</p>
                <a href="https://www.khanacademy.org/computing"
                   target="_blank" rel="noopener">Open Resource →</a>
            </article>
        </div>
    </section>

    <section class="about" id="about">
        <span class="tag">ABOUT LEARNORA</span>
        <h2>A Better Way to Learn</h2>

        <p>
            Learnora is a student learning platform designed to bring
            courses, study materials and educational resources together
            in one place.
        </p>

        <p>Stay curious. Keep learning. Keep growing.</p>

        <a href="#courses" class="btn">Start Exploring →</a>
    </section>

    <aside class="useful-links">
        <h3>Useful Websites</h3>

        <a href="https://www.khanacademy.org/" target="_blank" rel="noopener">
            Khan Academy
        </a>

        <a href="https://www.w3schools.com/" target="_blank" rel="noopener">
            W3Schools
        </a>

        <a href="https://www.coursera.org/" target="_blank" rel="noopener">
            Coursera
        </a>
    </aside>

</main>

<footer>
    <a href="#home" class="logo">Learn<span>ora.</span></a>
    <p>© 2026 Learnora. Keep learning and growing.</p>
    <p>Designed & Developed by Shlok Ghimire</p>
</footer>

</body>
</html>
