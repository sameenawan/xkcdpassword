<?php
	/** returns an array with random quiz grades */
	function getRandomGradesAverage($grades,$no_of_students,$min_grade,$max_grade) {			
		// create an array to store our students' grades
		$grades = array();

		// populate the array with random grades
		for($i=0;$i<$no_of_students;$i++) {
			// we generate a random grade between the predefined min and max values
			$grade = rand($min_grade,$max_grade);
			array_push($grades,$grade);
		}
		// let's get the class average for this quiz
		$average = number_format(array_sum($grades)/NO_OF_STUDENTS,2);
		return $average;
	}

	/** returns an array with grades extracted from a specified csv file */
	function getCSVGradesAverage($path) {
		$file = fopen($path,"r");
		$grades = array();

		// while we have not reached the end of the csv file
		while(!feof($file)) {
			// each line is retrieved as an array of two values: name and grade
			// hence, we are retrieving just the grades by using the suffixed [1]
			// lastly, we are pushing the grade into our grades array
			array_push($grades,fgetcsv($file)[1]);
		}
		fclose($file);
		// let's get the class average for this quiz
		$average = number_format(array_sum($grades)/count($grades),2);
		return $average;
	}

	// putting this here to separate it out from the template file
	function returnAverage() {
		$grades = array();
		// switch depending on method type
		if (METHOD == CSV) {
			// get average from csv file grades
			$average = getCSVGradesAverage(CSV_LOCATION);
			$_SESSION["class_average"] = $average;
			return $average;	
		} elseif (METHOD == RANDOM) {
			// get average from random grades generator
				$average = getRandomGradesAverage($grades,NO_OF_STUDENTS,MIN_GRADE,GRADE_SCALE);
				$_SESSION["class_average"] = $average;
				return $average;
		}
	}

	function getAverageStyle($average) {
		return ($average >= PASS_THRESHOLD) ? 'blue' : 'red';
	}

	function show_student_count() {
		return NO_OF_STUDENTS;
	}
?>