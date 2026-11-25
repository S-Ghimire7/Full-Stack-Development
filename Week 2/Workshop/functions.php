
<?php

function formatDuration($weeks) {
    if ($weeks == 1) {
        return "1 week";
    }

    return $weeks . " weeks";
}

function getCoursesByLevel($courses, $level) {
    return array_filter(
        $courses,
        fn($course) => $course["category"]["Level"] === $level
    );
}

function getCourseSummaries($courses) {
    return array_map(
        fn($course) => $course["title"] . " (" . $course["category"]["Length"] . ")",
        $courses
    );
}

function getTotalWeeks($courses) {
    return array_reduce(
        $courses,
        fn($total, $course) => $total + (int) $course["category"]["Length"],
        0
    );
}

?>
