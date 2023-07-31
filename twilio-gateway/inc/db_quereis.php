<?php

/**<!-- ? tg == Twilio Gateway. db_quereis.php file --> */
/** Variables */
$response = '';

/** Process Request */
if (isset($_REQUEST['data'])) {
    $request_data = $_REQUEST['data'];
    parse_str($request_data, $parsed_data);
}

/** save numbers with type **/
if (isset($parsed_data['wpmp_twilio_number_frndly_name'])) {

    $friendly_name = $parsed_data['wpmp_twilio_number_frndly_name'];
    $phone_number = $parsed_data['wpmp_twilio_from_number'];
    $type = $parsed_data['tg_num_type'];

    numberQuery($friendly_name, $phone_number, $type, 'add');
}

/** save forwarding numbers  **/
else if (isset($parsed_data['wpmp_twilio_forwarding_num_frndly_name'])) {

    $friendly_name = $parsed_data['wpmp_twilio_forwarding_num_frndly_name'];
    $phone_number = $parsed_data['wpmp_twilio_forwarding_number'];
    $type = 'forward';

    numberQuery($friendly_name, $phone_number, $type, 'add');
}

/** update / edit numbers */
else if (isset($parsed_data['wpmp_twilio_number_frndly_name_update'])) {
    $friendly_name = $parsed_data['wpmp_twilio_number_frndly_name_update'];
    $phone_number = $parsed_data['wpmp_twilio_from_number_update'];
    if ($parsed_data['tg_num_type_update'] !== '') {
        $type = $parsed_data['tg_num_type_update'];
    } else {
        $type = 'forward';
    }

    $num_id = $parsed_data['num_id'];

    numberQuery($friendly_name, $phone_number, $type, $num_id);
}

/** delete / remove numbers */
else if (isset($_REQUEST['data']['requestType'])) {

    echo 'This is update code block: ';
    echo '<br>';
    print_r($_REQUEST);
    echo '<br>';

    $friendly_name = '';
    $phone_number = '';
    $type = 'delete';

    $num_id = $_REQUEST['data']['numberID'];

    numberQuery($friendly_name, $phone_number, $type, $num_id);
}

/** Fetching Data for DataTables */
else if (isset($_REQUEST['data']['fetchType'])) {
    global $wpdb;
    $nt  = new WPM_Numbers();
    $query = '';

    $table_name  =  $nt->get_table_name();
    $page = isset($_GET['cpage']) ? abs((int) $_GET['cpage']) : 1;

    if ($_REQUEST['data']['fetchType'] == 'forwarding') {
        $query = 'SELECT * FROM ' . $table_name . ' WHERE number_type = "forward"';
    } else if ($_REQUEST['data']['fetchType'] == 'numbers') {
        $query = 'SELECT * FROM ' . $table_name . ' WHERE number_type != "forward"';
    }
    $total_query = "SELECT COUNT(1) FROM ($query) AS combined_table";
    $total = $wpdb->get_var($total_query);

    $results = $wpdb->get_results($query . ' ORDER BY id ASC');
    $resultArray = [];
    $serialNumber = 1;
    if ($_REQUEST['data']['fetchType'] == 'numbers') {
        foreach ($results as $result) {
            $resultArray[] = [
                "<p class='font-bold text-base'>" . $serialNumber . "</p>",
                "<p class='font-semibold text-base'>" . $result->friendly_name . "</p>",
                "<p class='font-semibold text-base'>" . $result->phone_number . "</p>",
                "<p class='font-bold text-base underline'>" . $result->number_type . "</p>",
                "<div class='flex justify-center'>
                    <div class='px-6 border-r-2 border-black flex gap-2'>
                        <button data-id='" . $result->id . "' class='modalOpenButton text-base border-b-2 border-b-[#cd2653] text-[#cd2653] hover:border-[#000] hover:text-[#000]'>Edit</button>
                    </div>
                    <div class='px-6'>
                        <button data-id='" . $result->id . "' class='numDeleteBtn text-base border-b-2 border-b-[#cd2653] text-[#cd2653] hover:border-[#000] hover:text-[#000]'>Delete</button>
                    </div>
                </div>"
            ];
            $serialNumber++;
        }
    } else {
        foreach ($results as $result) {
            $resultArray[] = [
                "<p class='font-bold text-base'>" . $serialNumber . "</p>",
                "<p class='font-semibold text-base'>" . $result->friendly_name . "</p>",
                "<p class='font-semibold text-base'>" . $result->phone_number . "</p>",
                "<div class='flex justify-center'>
                    <div class='px-6 border-r-2 border-black flex gap-2'>
                        <button data-id='" . $result->id . "' class='modalOpenButton text-base border-b-2 border-b-[#cd2653] text-[#cd2653] hover:border-[#000] hover:text-[#000]'>Edit</button>
                    </div>
                    <div class='px-6'>
                        <button data-id='" . $result->id . "' class='numDeleteBtn text-base border-b-2 border-b-[#cd2653] text-[#cd2653] hover:border-[#000] hover:text-[#000]'>Delete</button>
                    </div>
                </div>"
            ];
            $serialNumber++;
        }
    }

    echo json_encode([
        'data' => $resultArray
    ]);
}

/** Save numbers with type and forwarding numbers */
function numberQuery($friendly_name, $phone_number, $type, $num_id)
{

    $numbers = new WPM_Numbers();

    $data['friendly_name'] = $friendly_name;
    $data['phone_number'] = $phone_number;
    $data['number_type'] = $type;

    if ($num_id == 'add') {
        $insert_id = $numbers->insert($data);
        if ($type == 'forward') {
            // return query with only forwarding numbers
            $response = 'forwarding_numbers';
        } else {
            // return query with non forwarding numbers
            $response = 'twilio_numbers';
        }

        echo $response;
    } else if ($type == 'delete') {
        // delete query here
        /** 
         * friendly_name and phone_number will be sent emtpy in numberQuery function
         * type will be set to delete
         * num_id will be the actual id
         */
        $insert_id = $numbers->delete_numbers($num_id);

        echo $insert_id;
    } else {
        $insert_id = $numbers->update_numbers($data, $num_id);

        echo $insert_id;
    }
}
