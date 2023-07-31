<!-- ? tg == Twilio Gateway -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css">

<?php
//save update settings 	

if (isset($_REQUEST['wpmp_settings_save'])) {

    $wpmp_sid = $_REQUEST['wpmp_sid'];
    $wpmp_auth_token = $_REQUEST['wpmp_auth_token'];

    $channel = new WPM_Credentials();

    $data['wpmp_sid'] = $wpmp_sid;
    $data['wpmp_auth_token'] = $wpmp_auth_token;

    if (isset($_REQUEST['wpmp_channel_id']) and !empty($_REQUEST['wpmp_channel_id'])) {
        $data['id'] = $_REQUEST['wpmp_channel_id'];
        $insert_id = $channel->update_credentials($data);
    } else {
        $insert_id = $channel->insert_credentials($data);
    }

    if ($insert_id) {
?>
        <div id="message" class="updated notice notice-success is-dismissible">
            <p>Saved successfuly.</p>
        </div><?php
            }
        }
                ?>
<?php
$cred = new WPM_Credentials();
$data = $cred->get_credentials_data();
$twilio_account_sid = $data['account_sid'];
$twilio_autho_token = $data['auth_token'];
$cred_id = $data['id'];
?>

<div class="max-w-7xl px-4 py-2 border-2 mx-auto">
    <div id="messageSav" class="hidden updated notice notice-success is-dismissible">
        <p>Number Saved successfuly.</p>
    </div>
    <div id="messageDel" class="hidden updated notice notice-danger is-dismissible">
        <p>Number Deleted successfuly.</p>
    </div>
    <div class="mb-4 border-b border-gray-300 dark:border-gray-800">
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap text-sm font-medium text-center" id="tg_Tabs" data-tabs-toggle="tg_Tabs_setting" role="tablist">
                <li class="mr-2 flex gap-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="credentials-btn" data-tabs-target="#credentials-tab" aria-controls="credentials-tab" type="button" role="tab" aria-selected="false">Credentials</button>
                </li>
                <li class="mr-2 flex gap-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="numbers-btn" data-tabs-target="#numbers-tab" aria-controls="numbers-tab" type="button" role="tab" aria-selected="false">Numbers</button>
                </li>
                <li class="mr-2 flex gap-2 hidden" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="audio-btn" data-tabs-target="#audio-tab" aria-controls="audio-tab" type="button" role="tab" aria-selected="false">Audio Files</button>
                </li>
                <li class="mr-2 flex gap-2 hidden" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="call-btn" data-tabs-target="#call-tab" aria-controls="call-tab" type="button" role="tab" aria-selected="false">Call Settings</button>
                </li>
                <li class="mr-2 flex gap-2 hidden" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="voicemail-btn" data-tabs-target="#voicemail-tab" aria-controls="voicemail-tab" type="button" role="tab" aria-selected="false">Voicemail</button>
                </li>
            </ul>
        </div>
        <div id="tg_Tabs_setting">
            <div class="hidden p-4 rounded-lg bg-gray-50" role="tabpanel" aria-labelledby="credentials-btn" id="credentials-tab">
                <div class="flex flex-col gap-2 px-2 py-3">
                    <form action="" method="post">
                        <div class="tg_auth_credential_div">
                            <div>
                                <label for="wpmp_sid" class="font-bold text-lg">Account SID</label>
                                <input type="text" id="wpmp_sid" name="wpmp_sid" value="<?php echo $twilio_account_sid; ?>" class="w-full px-2 py-4 text-md" placeholder="Account SID">
                            </div>
                            <div>
                                <label for="wpmp_auth_token" class="font-bold text-lg">Auth Token</label>
                                <input type="text" id="wpmp_auth_token" name="wpmp_auth_token" value="<?php echo $twilio_autho_token; ?>" class="w-full px-2 py-4 text-md" placeholder="Auth Token">
                            </div>
                        </div>
                        <p class="text-base my-2">You need to add your Twilio Credentials.</p>
                        <input type='hidden' name='wpmp_channel_id' value='<?php echo $cred_id; ?>' />
                        <input type="submit" name="wpmp_settings_save" value="Save Gateway Settings" class="text-white bg-[#0b85ff] text-lg px-4 py-2 hover:bg-[#409EFF] rounded" />
                        <p class="flex gap-2 text-base my-2">
                            Need Help?
                            <a href="#" class="border-transparent border-b-2 border-b-[#cd2653] text-[#cd2653] hover:border-white">CLICK HERE</a>
                        </p>
                    </form>
                </div>

            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50" role="tabpanel" aria-labelledby="numbers-btn" id="numbers-tab">
                <!-- <div class="flex flex-col justify-center items-center"> -->
                <div class="flex flex-col items-start justify-evenly gap-2 px-8">
                    <div class="flex gap-2 items-end">
                        <p class="underline text-lg font-bold">
                            YOUR TWILIO NUMBERS:
                        </p>
                        <P class="font-italic text-base italic">
                            Add the Twilio Number(s) You want to use with Twilio Gateway Plugin.
                        </P>
                    </div>
                    <div class="tables-div w-full">
                        <div class="grid">
                            <div class="grid-container">
                                <table id="twilio_numbers" class="tg_tables" style="width: 100% !important;">
                                    <thead>
                                        <tr>
                                            <th class="font-bold text-lg">ID</th>
                                            <th class="font-bold text-lg">Friendly Name</th>
                                            <th class="font-bold text-lg">Number</th>
                                            <th class="font-bold text-lg">Type</th>
                                            <th class="font-bold text-lg">Actions</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-4 items-end">
                        <form id="wpmp_twilio_number_frndly_name_form" method="post">
                            <div class="max-w-xs">
                                <label for="wpmp_twilio_number_frndly_name" class="font-bold text-lg">Friendly Name</label>
                                <input type="text" id="wpmp_twilio_number_frndly_name" name="wpmp_twilio_number_frndly_name" class="w-full px-2 py-4 text-md" placeholder="Friendly Name" required>
                            </div>
                            <div class="max-w-xs">
                                <label for="wpmp_twilio_from_number" class="font-bold text-lg">Twilio Number</label>
                                <input type="text" id="wpmp_twilio_from_number" name="wpmp_twilio_from_number" class="w-full px-2 py-4 text-md" placeholder="Twilio Number" required>
                            </div>
                            <select name="tg_num_type" id="tg_num_type" class="h-9">
                                <option value="" class="font-semibold">Select Type</option>
                                <option value="sms" selected>SMS</option>
                                <option value="whatsapp">WhatsApp</option>
                            </select>
                            <!-- <input type="submit" name="wpmp_twilio_num_save" value="Add Number" class="text-white bg-[#0b85ff] text-lg px-4 py-1 hover:bg-[#409EFF] rounded" /> -->
                            <input type="submit" name="wpmp_twilio_number_frndly_name_save" value="Add Twilio Number" class="text-white bg-[#0b85ff] text-lg px-4 py-1 hover:bg-[#409EFF] rounded" />
                        </form>
                    </div>
                    <div class="flex gap-4 items-end">
                        <p class="text-base my-2">
                            <a href="#" class="border-b-2 border-b-[#cd2653] text-[#cd2653] hover:border-[#000] hover:text-[#000]">+ Add Another Twilio Number</a>
                        </p>
                        <p class="flex gap-2 text-base my-2">
                            Need Help?
                            <a href="#" class="border-b-2 border-b-[#cd2653] text-[#cd2653] hover:border-[#000] hover:text-[#000]">CLICK HERE</a>
                        </p>
                    </div>
                </div>
                <div class="flex flex-col items-start justify-evenly gap-2 px-8 mt-2 pt-4 border-t-2 border-black">
                    <div class="flex gap-2 items-end">
                        <p class="underline text-lg font-bold">
                            YOUR FORWARDING NUMBERS:
                        </p>
                        <p class="font-italic text-base italic">
                            If You Want To Forward Twilio Calls, to your cell phone or another number, please add the forwarding numbers here first.
                        </p>
                    </div>
                    <div class="tables-div w-full">
                        <table id="forwarding_numbers" class="tg_tables" style="width: 100% !important;">
                            <thead>
                                <tr>
                                    <th class="font-bold text-lg">ID</th>
                                    <th class="font-bold text-lg">Friendly Name</th>
                                    <th class="font-bold text-lg">Number</th>
                                    <th class="font-bold text-lg">Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="flex gap-4 items-end">
                        <form id="wpmp_twilio_forwarding_num_frndly_name_form" method="post">
                            <div class="max-w-xs">
                                <label for="wpmp_twilio_forwarding_num_frndly_name" class="font-bold text-lg">Friendly Name</label>
                                <input type="text" id="wpmp_twilio_forwarding_num_frndly_name" name="wpmp_twilio_forwarding_num_frndly_name" class="w-full px-2 py-4 text-md" placeholder="Friendly Name" required>
                            </div>
                            <div class="max-w-xs">
                                <label for="wpmp_twilio_forwarding_number" class="font-bold text-lg">Forwarding Number</label>
                                <input type="text" id="wpmp_twilio_forwarding_number" name="wpmp_twilio_forwarding_number" class="w-full px-2 py-4 text-md" placeholder="Twilio Number" required>
                            </div>
                            <!-- <input type="submit" name="wpmp_twilio_forwarding_num_save" value="Add Number" class="text-white bg-[#0b85ff] text-lg px-4 py-1 hover:bg-[#409EFF] rounded" /> -->
                            <input type="submit" name="wpmp_twilio_forwarding_num_frndly_name_save" value="Add Forwarding Number" class="text-white bg-[#0b85ff] text-lg px-4 py-1 hover:bg-[#409EFF] rounded" />
                        </form>
                    </div>

                    <div class="flex gap-4 items-end">
                        <p class="text-base my-2">
                            <a href="#" class="border-b-2 border-b-[#cd2653] text-[#cd2653] hover:border-[#000] hover:text-[#000]">+ Add another forwarding Number</a>
                        </p>
                        <p class="flex gap-2 text-base my-2">
                            Need Help?
                            <a href="#" class="border-b-2 border-b-[#cd2653] text-[#cd2653] hover:border-[#000] hover:text-[#000]">CLICK HERE</a>
                        </p>
                    </div>
                </div>
                <!-- </div> -->
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50" role="tabpanel" aria-labelledby="audio-btn" id="audio-tab">
                <div class="tables-div">
                    <table id="audio_files" class="w-full tg_tables">
                        <thead>
                            <tr>
                                <th class="font-bold text-lg"># No</th>
                                <th class="font-bold text-lg">File Name</th>
                                <th class="font-bold text-lg">Uploaded Date</th>
                                <th class="font-bold text-lg">Play</th>
                                <th class="font-bold text-lg">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p class="font-bold text-base">1</p>
                                </td>
                                <td>
                                    <p class="text-base">record1.mp3</p>
                                </td>
                                <td>01/01/2023</td>
                                <td>
                                    <button class="bg-green-500 px-4 py-2 rounded-md group">
                                        <p class="text-white font-bold group-hover:border-b-2">Play</p>
                                    </button>
                                </td>
                                <td>
                                    <button class="bg-[#cd2643] px-4 py-2 rounded-md group">
                                        <p class="text-white font-bold group-hover:border-b-2">Delete</p>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="font-bold text-base">2</p>
                                </td>
                                <td>
                                    <p class="text-base">record4.mp3</p>
                                </td>
                                <td>01/01/2023</td>
                                <td>
                                    <button class="bg-green-500 px-4 py-2 rounded-md group">
                                        <p class="text-white font-bold group-hover:border-b-2">Play</p>
                                    </button>
                                </td>
                                <td>
                                    <button class="bg-[#cd2643] px-4 py-2 rounded-md group">
                                        <p class="text-white font-bold group-hover:border-b-2">Delete</p>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <p class="my-3 text-gray-500 font-bold">Upload button, use media editor/uploader built in to WP, then add the file here.</p>
                        <input type="submit" name="wpmp_add_new_recording" value="Add New Recording" class="text-white bg-[#0b85ff] text-lg px-4 py-2 hover:bg-[#409EFF] rounded" />
                    </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50" role="tabpanel" aria-labelledby="call-btn" id="call-tab">
                <p class="my-2 font-bold">You need to configure your Twilio Credentials, and Numbers, before you can configure any call settings.
                    The form should be "Disabled" if there are no valid Twilio credentials, and if there are no valid Twilio Numbers added... <br><strong class="font-medium text-gray-800 dark:text-white">Upload button, use media editor/uploader built in to WP, then add the file here.</strong></p>
                <div class="tables-div">
                    <table id="call_settings" class="w-full tg_tables">
                        <thead>
                            <tr>
                                <th class="font-bold text-lg"># No</th>
                                <th>
                                    <p class="font-bold text-lg">Number</p>
                                </th>
                                <th>
                                    <p class="font-bold text-lg">Settings</p>
                                </th>
                                <th>
                                    <p class="font-bold text-lg">Edit</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p class="font-bold text-base">1</p>
                                </td>
                                <td>
                                    <a href="#" class="text-base border-b-2 border-b-[#cd2653] text-[#cd2653] hover:border-[#000] hover:text-[#000]">Sales Department <br> +1212121212</a>
                                </td>
                                <td>
                                    <div class="flex justify-center gap-4">
                                        <p class="font-bold text-base">Configured</p>
                                        <svg viewBox="0 0 36 36" width="22" height="22">
                                            <defs id="defs10" />
                                            <path id="namedview8" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:pageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" />
                                            <path fill="#77b255" d="m 36,32 c 0,2.209 -1.791,4 -4,4 H 4 C 1.791,36 0,34.209 0,32 V 4 C 0,1.791 1.791,0 4,0 h 28 c 2.209,0 4,1.791 4,4 z" id="path2" />
                                            <path fill="#ffffff" d="M 29.28,6.362 C 28.124,5.611 26.576,5.94 25.822,7.098 L 14.936,23.877 9.907,19.227 C 8.893,18.289 7.311,18.352 6.374,19.365 5.437,20.379 5.499,21.961 6.513,22.898 l 7.209,6.666 c 0.48,0.445 1.09,0.665 1.696,0.665 0.673,0 1.534,-0.282 2.099,-1.139 0.332,-0.506 12.5,-19.27 12.5,-19.27 0.751,-1.159 0.421,-2.707 -0.737,-3.458 z" id="path4" />
                                        </svg>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-lg border-b-2 border-b-[#cd2653] text-[#cd2653] hover:border-[#000] hover:text-[#000]">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="font-bold text-base">2</p>
                                </td>
                                <td>
                                    <a href="#" class="text-base border-b-2 border-b-[#cd2653] text-[#cd2653] hover:border-[#000] hover:text-[#000]">Support Department <br> +131313131313</a>
                                </td>
                                <td>
                                    <div class="flex justify-center gap-4">
                                        <p class="font-bold text-base">Not Configured</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" width="22" height="22">
                                            <path fill="#DD2E44" d="M21.533 18.002L33.768 5.768c.976-.976.976-2.559 0-3.535-.977-.977-2.559-.977-3.535 0L17.998 14.467 5.764 2.233c-.976-.977-2.56-.977-3.535 0-.977.976-.977 2.559 0 3.535l12.234 12.234L2.201 30.265c-.977.977-.977 2.559 0 3.535.488.488 1.128.732 1.768.732s1.28-.244 1.768-.732l12.262-12.263 12.234 12.234c.488.488 1.128.732 1.768.732.64 0 1.279-.244 1.768-.732.976-.977.976-2.559 0-3.535L21.533 18.002z" />
                                        </svg>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-lg border-b-2 border-b-[#cd2653] text-[#cd2653] hover:border-[#000] hover:text-[#000]">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    <p class="my-2 font-bold">These will show above automatically after the user adds "Twilio Numbers" in the Numbers tab. </p>
                    <p class="my-2 font-bold">However the configuration is empty we show "Not configured" <br>
                        If the configuration is settings, we show "Configured"</p>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50" role="tabpanel" aria-labelledby="voicemail-btn" id="voicemail-tab">
                <div class="tables-div">
                    <table id="voice_mail" class="w-full tg_tables">
                        <thead>
                            <tr>
                                <th class="font-bold text-lg"># No</th>
                                <th>
                                    <p class="font-bold text-lg">Number</p>
                                </th>
                                <th>
                                    <p class="font-bold text-lg">Edits</p>
                                </th>
                                <th>
                                    <p class="font-bold text-lg">Logs</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p class="font-bold text-base">1</p>
                                </td>
                                <td>
                                    <a href="#" class="text-base border-b-2 border-b-[#cd2653] text-[#cd2653] hover:border-[#000] hover:text-[#000]">Sales Department <br> +1212121212</a>
                                </td>
                                <td>
                                    <div class="flex justify-center gap-4">
                                        <p class="font-bold text-base">Configured</p>
                                        <svg viewBox="0 0 36 36" width="22" height="22">
                                            <defs id="defs10" />
                                            <path id="namedview8" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:pageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" />
                                            <path fill="#77b255" d="m 36,32 c 0,2.209 -1.791,4 -4,4 H 4 C 1.791,36 0,34.209 0,32 V 4 C 0,1.791 1.791,0 4,0 h 28 c 2.209,0 4,1.791 4,4 z" id="path2" />
                                            <path fill="#ffffff" d="M 29.28,6.362 C 28.124,5.611 26.576,5.94 25.822,7.098 L 14.936,23.877 9.907,19.227 C 8.893,18.289 7.311,18.352 6.374,19.365 5.437,20.379 5.499,21.961 6.513,22.898 l 7.209,6.666 c 0.48,0.445 1.09,0.665 1.696,0.665 0.673,0 1.534,-0.282 2.099,-1.139 0.332,-0.506 12.5,-19.27 12.5,-19.27 0.751,-1.159 0.421,-2.707 -0.737,-3.458 z" id="path4" />
                                        </svg>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-lg border-b-2 border-b-[#cd2653] text-[#cd2653] hover:border-[#000] hover:text-[#000]">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="font-bold text-base">2</p>
                                </td>
                                <td>
                                    <a href="#" class="text-base border-b-2 border-b-[#cd2653] text-[#cd2653] hover:border-[#000] hover:text-[#000]">Support Department <br> +131313131313</a>
                                </td>
                                <td>
                                    <div class="flex justify-center gap-4">
                                        <p class="font-bold text-base">Not Configured</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" width="22" height="22">
                                            <path fill="#DD2E44" d="M21.533 18.002L33.768 5.768c.976-.976.976-2.559 0-3.535-.977-.977-2.559-.977-3.535 0L17.998 14.467 5.764 2.233c-.976-.977-2.56-.977-3.535 0-.977.976-.977 2.559 0 3.535l12.234 12.234L2.201 30.265c-.977.977-.977 2.559 0 3.535.488.488 1.128.732 1.768.732s1.28-.244 1.768-.732l12.262-12.263 12.234 12.234c.488.488 1.128.732 1.768.732.64 0 1.279-.244 1.768-.732.976-.977.976-2.559 0-3.535L21.533 18.002z" />
                                        </svg>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-lg border-b-2 border-b-[#cd2653] text-[#cd2653] hover:border-[#000] hover:text-[#000]">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal overlay -->
    <div id="modalOverlay" class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50 hidden">
        <!-- Modal content -->
        <div class="bg-white rounded-lg shadow-lg max-w-md p-6">
            <!-- Modal header -->
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-semibold text-gray-900">Update Friendly Name</h3>
                <button class="modalCloseButton text-gray-400 hover:text-gray-500 focus:outline-none" type="button">
                    <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="mb-4">
                <form id="wpmp_twilio_number_update" method="post">
                    <input type="hidden" name="num_id" id="num_id">
                    <div class="max-w-xs">
                        <label for="wpmp_twilio_number_frndly_name_update" class="font-bold text-lg">Friendly Name</label>
                        <input type="text" id="wpmp_twilio_number_frndly_name_update" name="wpmp_twilio_number_frndly_name_update" class="w-full px-2 py-4 text-md" placeholder="Friendly Name" required>
                    </div>
                    <div class="max-w-xs">
                        <label for="wpmp_twilio_from_number_update" class="font-bold text-lg">Twilio Number</label>
                        <input type="text" id="wpmp_twilio_from_number_update" name="wpmp_twilio_from_number_update" class="w-full px-2 py-4 text-md" placeholder="Twilio Number" readonly>
                    </div>
                    <div class="max-w-xs">
                        <label for="tg_num_type_update" class="font-bold text-lg">Number Type</label>
                        <select id="tg_num_type_update" name="tg_num_type_update" class="h-9 w-full">
                            <option value="" class="font-semibold">Select Type</option>
                            <option value="sms">SMS</option>
                            <option value="whatsapp">WhatsApp</option>
                        </select>
                    </div>
                    <!-- Modal footer -->
                    <div class="max-w-xs py-4">
                        <input type="submit" name="wpmp_twilio_number_update" value="Update Friendly Name" class="text-white bg-[#0b85ff] text-lg px-4 py-1 hover:bg-[#409EFF] w-full rounded" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- special request -->
    <button class='modalSpecial text-base border-b-2 border-b-[#cd2653] text-[#cd2653] hover:border-[#000] hover:text-[#000]'><h1>Request My Friends!</h1></button>
    <div id="modalSpecial" class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50 hidden">
        <!-- Modal content -->
        <div class="bg-white rounded-lg shadow-lg max-w-md p-6">
            <!-- Modal header -->
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-semibold text-gray-900">Special Request: My Friends</h3>
                <button class="modalSpecialCloseBtn text-gray-400 hover:text-gray-500 focus:outline-none" type="button">
                    <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="mb-4">
                <h3>Hi, Ajay and Christopher. </h3>
                <p>I loved to work with you people and interested to continue with you.</p>
                <p>But due to some personal issues I am unable to continue freely on the current upwork account.</p>
                <p><b>This only matter of time and account.</b></p>
                <h4>I would like you to continue with me on the following <s><i><a href="https://www.upwork.com/freelancers/~018519cb649b551cc8" target="_blank">Upwork</a></i></s> Account. </h4>
                <h5>Only for Christopher.</h5>
                <p>I would love to work same as I am working currently, and rate will stay as it is.</p>
                <h3>I am looking forward to see your reponse on the given account's inbox.</h3>
                <h4>Kind Regards</h4>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>
<!-- Read Attached MS word file. -->

<!-- 
    
    1. Credentials-Tab fig 1.1
    1.1. Account SID => name = wpmp_sid, id= upmp_sid
    1.2. Auth Token => name = wpmp_auth_token, id = wpmp_auth_token
    1.3. Twilio Number => name = wpmp_twilio_from_number, id = wpmp_twilio_from_number
    1.4. Save Gateway Settings (Button) => name = wpmp_settings_save

    2. Numbers-Tab
    2.1. Your Twilio Numbers fig 1.2
    2.1.1. Table (Which contains the data) => id = twilio_numbers
    ? Not Understand How To Handel the inputs etc
    2.2. Your Forwarding Numbers
    2.2.1 Table (Which contains the data) => id = forwarding_numbers
    ? Not Understand How To Handel the inputs etc

    3. Audio_Files-Tab fig 1.3
    3.1. Table (Which contains the data) => id = audio_files
    3.2. Play (Button[s]) => ? I was not aware of what id should be given to it.
    3.3. Delete (Button[s]) => ? I was not aware of what id should be given to it.
    3.4. Add New Recording (Button) => ? I was not aware of what id should be given to it.

    4. Call_Settings-Tab fig 1.4
    4.1. Table (Which will contains the data) => id = call_settings
    4.2. Configured (with icon and No Idea what is this button/plan-text) => ? I was not aware of what id should be given to it.
    4.3. Not Configured (with icon and No Idea what is this button/plan-text) => ? I was not aware of what id should be given to it.
    4.4. Edit (Button) => ? I was not aware of what id should be given to it.

    5. Voicemail-Tab fig 1.5
    5.1. Table (Which will contains the data) => id = voice_mail
    5.2. Configured (with icon and No Idea what is this button/plan-text) => ? I was not aware of what id should be given to it.
    5.3. Not Configured (with icon and No Idea what is this button/plan-text) => ? I was not aware of what id should be given to it.
    5.4. Edit (Button) => ? I was not aware of what id should be given to it.

    Most Important of All.
    0.0 I did not created other two pages. You will define me where to work and I will do my job only in that particular file. 
    0.1 I was facing problem in installing Flow-Bite so I used cdn for js and css. (I belive, it will not be used elsewhere.)
    0.2 I am doing regular job, so it is difficult for me to manage everything. Try to bear with me. Regards.
    0.3 I will try my best to make MS-Word report next time to share about the frontend components.
 -->