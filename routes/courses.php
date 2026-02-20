<?php
$courses = getCourses();
renderView('courses',['title'=> 'Courses', 'courses' => $courses]);