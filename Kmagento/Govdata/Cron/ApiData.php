<?php
namespace Kmagento\Govdata\Cron;

class ApiData{

	public function execute()
	{
		$url = 'https://api.data.gov.in/resource/04cbe4b1-2f2b-4c39-a1d5-1c2e28bc0e32?api-key=579b464db66ec23bdd000001b4dee762ca4e46b2433b445a7aa3efe5&format=json'; // path to your JSON file
		$data = file_get_contents($url);
		$j_data = json_decode($data, true);
		$j_records = $j_data['records'];


		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		$resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
		$conn = $resource->getConnection();

		foreach ($j_records as $json) {
			
			$sql = "INSERT INTO pincode_data (state, pincode, districtname, divisionname)
			VALUES ('".$json["statename"]."', '".$json["pincode"]."','".$json["districtname"]."','".$json["divisionname"]."')";

			if ($conn->query($sql) === TRUE) {
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}

	}
}