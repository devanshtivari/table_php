<?php
    $conn = mysqli_connect("localhost" , "root" , "" , "mlag");

    if($conn === false) {
        die("Could not connect .".mysqli_connect_error());
    }

    $db = $conn;

    function fetch_data(){
        global $db;
        $query = 'SELECT * FROM complainant';
        $exec = mysqli_query($db , $query);
        if(mysqli_num_rows($exec) > 0){
            $row = mysqli_fetch_all($exec , MYSQLI_ASSOC);
            return $row;
        }
        else{
            $row = [];
            return $row;
        }
    }

    function show_data($fetchdata){
        echo
        '
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Medical Speciality</th>
                    <th>Year</th>
                    <th>Court</th>
                    <th>Case Title</th>
                    <th>Summary</th>
                </tr>
        ';
        if(count($fetchdata) > 0){
            foreach($fetchdata as $data){
                $counter = 1;
                echo
                '
                    <tr>
                        <td>'.$data['name'].'</td>
                        <td>'.$data['email'].'</td>
                        <td>'.$data['medical_speciality'].'</td>
                        <td>'.$data['year'].'</td>
                        <td>'.$data['court'].'</td>
                        <td>'.$data['case_title'].'</td>
                        <td>'.$data['case_summary'].'</td>
                    </tr>
                ';
            }
        }
        else{
            echo
            '
                <h1>No data found</h1>
            ';
        }
        echo
        '
            </table>
        ';
    }

    $fetchdata = fetch_data();
    show_data($fetchdata);
?>
