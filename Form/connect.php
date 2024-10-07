<?php
	$fullName = $_POST['fullname'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$nationality = $_POST['nationality'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

    $schoolName = $_POST['school-name'];
	$passingYear = $_POST['passing-year'];
	$marksTenth = $_POST['marks_10th'];
	$srSchoolName = $_POST['sr-school-name'];
	$srPassingYear = $_POST['sr-passing-year'];
	$marksTwelth = $_POST['marks_12th'];

    $DMC_10th = $_POST['10th-DMC'];
	$DMC_12th = $_POST['12th-DMC'];
	$migration = $_POST['migration'];
	$characterCertificate = $_POST['character-certificate'];
	$test_scores = $_POST['test-scores'];

    $fatherName = $_POST['father-name'];
	$fatherOcc = $_POST['father-occupation'];
	$fatherCont = $_POST['father-contact'];
	$motherName = $_POST['mother-name'];
	$motherOcc = $_POST['mother-occupation'];
	$motherCont = $_POST['mother-contact'];
	$income = $_POST['income'];

    $course = $_POST['course'];
	$disability = $_POST['disability'];
	$activities = $_POST['activities'];

    $birthCertificate = $_POST['birth-certificate'];
	$aadhar = $_POST['aadhar'];
	$domicile = $_POST['domicile'];
	$familyId = $_POST['family-id'];

    $facility = $_POST['facility'];

	// Database connection
	$conn= mysqli_connect('localhost','root','');
	$query = "

	INSERT INTO `registration`.`form` (
		full_name,
		dob,
		gender,
		nationality,
		email,
		phone,
		school_name,
		passing_year,
		marks_tenth,
		sr_school_name,
		sr_passing_year,
		marks_twelth,
		dmc_10th,
		dmc_12th,
		migration,
		character-certificate,
		test_scores,
		father_name,
		father_occupation,
		father_contact,
		mother_name,
		mother_occupation,
		mother_contact,
		income,
		course,
		disability,
		activities,
		birth_certificate,
		aadhar,
		domicile,
		family_id,
		facility
	) VALUES (
		'$fullName',
		'$dob',
		'$gender',
		'$nationality',
		'$email',
		'$phone',
		'$schoolName',
		'$passingYear',
		'$marksTenth',
		'$srSchoolName',
		'$srPassingYear',
		'$marksTwelth',
		'$DMC_10th',
		'$DMC_12th', 
		'$migration',
		'$characterCertificate',
		'$test_scores',
		'$fatherName',
		'$fatherOcc',
		'$fatherCont',
		'$motherName',
		'$motherOcc',
		'$motherCont',
		'$income',
		'$course',
		'$disability',
		'$activities',
		'$birthCertificate',
		'$aadhar',
		'$domicile',
		'$familyId',
		'$facility'
	)";

	$result = mysqli_query($conn, $query);
	if($result) {
    	echo "data inserted";
	} else {
    	echo "query failed";
	}
?>