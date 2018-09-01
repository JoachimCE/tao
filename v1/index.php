<?php
//Access the two datasources path
include 'config.php';


$request_method=$_SERVER["REQUEST_METHOD"];


/*Check if it's a get request and if it has parameters then call the adequate function.*/
switch($request_method)
{
    case 'GET':
        if(!empty($_GET["login"]))
        {
            $login=$_GET["login"];
            getOneUser($login);
        }
        else
	    {
            getUsers();
        }
    break;
	default:
		// Invalid Request Method
		header("HTTP/1.0 405 Method Not Allowed");
		break;
}

/*Function called in the getOneUser method, which search and return the corresponding value */
function searchInJson($obj, $value){
    foreach( $obj as $key => $item ) {
        if( !is_nan( intval( $key ) ) && is_array( $item ) ){                 if( in_array( $value, $item ) ) return $item;
        } else {
            foreach( $item as $child ) {
                if(isset($child) && $child == $value) {
                    return $child;
                }
            }
        }
    }
    return null;
}




/*function called if there is no parameter passed through the GET request*/
function getUsers()
{
    global $jsonPath;
    global $csvPath;
    //Check datasource
    if(file_exists($jsonPath))
    {
        $data = file_get_contents($jsonPath);
        $decodedData = json_decode($data);
        header('Content-Type: application/json');
        $return["users"] = $decodedData;

        echo json_encode($return);
    }
    else if(file_exists($csvPath))
    {
        $file = $csvPath;
        $csv = file_get_contents($csvPath);
        $array = array_map("str_getcsv", explode("\n", $csv));
        $json = json_encode($array);
        echo($json);
    }    
}


/*
Function called if the parameter "login" is passed through the GET request. Return the user/testtaker which has the same login thant the one in the request.
*/
function getOneUser($login){
    global $jsonPath;
    global $csvPath;
    //Check if datasource exists and process in function of the format(json or csv).
    if(file_exists($jsonPath))
    {
        $data = file_get_contents($jsonPath);
        $decodedData = json_decode($data);
        header('Content-Type: application/json');
        $return["users"] = $decodedData;

        foreach($return["users"] as $item)
        {
            if($item->login == $login)
            {
                echo json_encode($item);
            }
        }
    }
    else if(file_exists($csvPath))
    {
        $file = $csvPath;
        $csv = file_get_contents($csvPath);
        $array = array_map("str_getcsv", explode("\n", $csv));
        $json = json_encode($array);
        $decodedData = json_decode($json);
        $return = searchInJson($decodedData, $login);
        $result = json_encode($return);
        header('Content-Type: application/json');
        print_r($result);
    }

}




?>