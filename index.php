
$created_at = $single_file->created_at;
$time_input = strtotime($created_at);
$date_input = getDate($time_input);
$serial_of_date = $date_input['mday'] . ' ' . $date_input['month'] . ', ' . $date_input['year'];
