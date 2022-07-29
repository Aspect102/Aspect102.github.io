$json = file_get_contents('php://input');
$data = json_decode($json);
echo $data[0]
echo $data[1]
echo $data[2]
echo $data[3]
echo $data[4]
echo $data[5]
