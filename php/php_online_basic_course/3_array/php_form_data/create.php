<?php
//creat json post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function get_data() {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $file_name = 'data/list' . '.json';
        if (file_exists($file_name)) {
            $current_data = file_get_contents($file_name);
            $array_data = json_decode($current_data, true);
            $extra = array(
                'name' => $_POST['name'],
                    'branch' => $_POST['branch'],
                    'year' => $_POST['year']
            );
            $array_data[] = $extra;
            echo "file exist <br>";
            return json_encode($array_data);
        }else {
            $data = array();
            $data[]= array(
                    'name' => $_POST['name'],
                    'branch' => $_POST['branch'],
                    'year' => $_POST['year']
                );
            echo "file not exist <br>";
            return json_encode($data);
            }
    }
    $file_name = 'data/list' . '.json';
    if (file_put_contents($file_name, get_data())) {
        header('Location: index.php');
        echo "data saved";
    } else {
        echo "data not saved";
    }
}