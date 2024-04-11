<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visitorscrud;

class entryController extends Controller
{
    public function create(Request $request){
        if ($request->isMethod('get')) {
            // Logic for handling GET requests
            return view('home');
        }

        $data = $request->validate([
          'Id' => 'filled',
          'NationalId' => 'required',
          'Name' => 'required',
          'Email' => 'required',
          'Phone' => 'required',
          'HostName' => 'required',
          'HostEmail' => 'required',
          'HostPhone' => 'required',
          'Address' => 'required',
          'Departure' => 'filled',
          'Arrival' => 'filled',
        ]);

        function test_input($data)
        {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        
        }

        date_default_timezone_set('Africa/Nairobi');
        $Arrive = date('d/m/Y H:i:s');
        if (!isset($data['Departure'])) {
            $data['Arrival'] = $Arrive;
        }

        $Depart = "Inside";
        if (!isset($data['Departure'])) {
            $data['Departure'] = $Depart;

        }

        if ($request->isMethod('get')) {

           if ($Email != $Phone) {
              $sql1 = "SELECT * FROM visitorscrud";

              $sql1 = mysqli_query($conn, $sql1);

            //echo $sql1->num_rows."<br>";

            $number = 0000 + $sql1->num_rows;

            //echo $number . "<br>";
        }
    }

        $UserId = "BS" . $number;
        if (!isset($data['Arrival'])) {
            $data['Id'] = $UserId;
       
    }
        $newVisitor = entry::create($data);

        return redirect(route("entry"));
    }
}